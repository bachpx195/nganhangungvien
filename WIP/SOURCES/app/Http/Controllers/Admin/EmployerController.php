<?php namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Province;
use App\Repositories\IConfigRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IUserRoleRepo;
use Illuminate\Http\Request;
use App\Libs\Constants;
use App\Model\Employer;
use App\Model\User;
use App\Repositories\IEmployerRepo;
use App\Services\Registrar;
use Illuminate\Pagination\Paginator;
use Auth;

class EmployerController extends Controller
{
    protected $employerRepo;
    protected $registrar;
    protected $provinceRepo;
    protected $configRepo;
    protected $userRoleRepo;

    public function __construct(
        IEmployerRepo $employerRepo,
        IProvinceRepo $provinceRepo,
        IConfigRepo $configRepo,
        IUserRoleRepo $userRoleRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->employerRepo = $employerRepo;
        $this->provinceRepo = $provinceRepo;
        $this->configRepo = $configRepo;
        $this->userRoleRepo = $userRoleRepo;
    }

    /**
     * Get list employer
     * @param Request $request
     * @return $this
     */
    public function employerList(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
        $currentUser = Auth::user();
        $role = $this->userRoleRepo->getRoleByUserId($currentUser->id);
//        $keyword = $request->input('keyword');
//        $pageSize = config('front.pageSize');
//        $employers = $this->employerRepo->search($keyword, $pageSize);

        $provinces = $this->provinceRepo->getSortedList();

        return view('admin/employer/list')
            ->with('role', $role)
            ->with('provinces', $provinces)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::EMPLOYER_LIST);
    }

    public function delete(Request $request, $id)
    {

        $data = [];

        if ($request->ajax()) {
            $employer = Employer::find($id);
            User::find($employer->user_id)->delete();
            Employer::find($id)->delete();

            $data = ['status' => false, 'message' => 'aaa'];
        }

        return $data;
    }

    /**
     * Get employer detail
     * @param Request $request
     * @return $this
     */
    public function employerDetail(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
        if ($request->isMethod('get')) {

            if ($request->has('id')) {
                $employer = $this->employerRepo->findById($request->get('id'));
            }
            if (!$employer) {
                abort(404, 'Not found employer');
            }
            $vipState = $this->getVipState($employer);
            return view('admin.employer.employer_detail')
                ->with('employer', $employer)
                ->with('vipState', $vipState)
                ->with('activeMenu', $activeMenu)
                ->with('pageTitle', Constants::EMPLOYER_DETAIL);
        }
    }

    /**
     * Change employer status
     * @param Request $request
     * @param $id employer id
     * @return result of update status
     */
    public function employerStatus(Request $request, $id)
    {
        $data = [];

        if ($request->ajax()) {
            if (!$request->has('status')) {
                $data = ['status' => false, 'message' => 'Not found status'];
            } else {
                $status = $request->input('status');
                $success = $this->employerRepo->updateStatus($id, $status);
                $data = ['status' => $success, 'message' => ''];
            }
        }

        return $data;
    }

    /**
     * Set employer is VIP
     *
     * @param Request $request
     * @param int $id
     *
     * @return array $result
     */
    public function setVip(Request $request, $id)
    {
        if (!$this->isSuperAdmin($this->userRoleRepo)) {
            return ['success' => false, 'message' => 'Bạn không có quyền gán VIP'];
        }
        $result = [];
        if ($request->ajax()) {
            if (!$request->has('vip')) {
                $result = ['success' => false, 'message' => 'Not found vip'];
            } else {
                $vip = $request->input('vip');
                $expire_vip = $request->input('expire_vip');
                $success = $this->employerRepo->setVip($id, $vip, $expire_vip);
                $result = ['success' => $success, 'message' => ''];
            }
        }
        return $result;
    }

    public function getList(Request $request)
    {
        $input = $request->all();

        $pageSize = $input['length'];
        $page = $input['page'];

        // force current page to 5
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });

        $employers = $this->employerRepo->search($input['params'], $pageSize);
        $total = $employers->total();

        $currentUser = Auth::user();
        $role = $this->userRoleRepo->getRoleByUserId($currentUser->id);

        $list = [];
        foreach ($employers as $index => $item) {
            $list[] = array(
                "id"                => $item->id,
                "company_name"      => $item->company_name,
                "contact_person"    => $item->contact_person,
                "contact_email"     => $item->contact_email,
                "contact_phone"     => $item->contact_phone,
                "company_address"   => $item->company_address,
                "province"          => $item->province ? $item->province->name : '',
                "status"            => $item->status,
                "vip"               => $this->getVipState($item),
                "expire_vip"        => $this->getVipState($item) == 1 ? $item->expire_vip : '',
                "roleCode"          => $role ? $role->code : ''
            );
        }

        return response()->json([
            "data" => $list,
            "total" => $total
        ]);
    }

    private function getVipState($employer)
    {
        if ($employer->vip == 1) {
            $expireDate = date('Y-m-d h:m:s', strtotime($employer->expire_vip));
            $currentDate = date('Y-m-d h:m:s', time());
            if (isset($employer->expire_vip) && ($expireDate > $currentDate)) {
                return 1;
            }
        }
        return 0;
    }
}