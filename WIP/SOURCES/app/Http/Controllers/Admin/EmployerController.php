<?php namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Province;
use App\Repositories\IProvinceRepo;
use Illuminate\Http\Request;
use App\Libs\Constants;
use App\Model\Employer;
use App\Repositories\IEmployerRepo;
use App\Services\Registrar;
use Illuminate\Pagination\Paginator;

class EmployerController extends Controller
{
    protected $employerRepo;
    protected $registrar;
    protected $provinceRepo;

    public function __construct(
        IEmployerRepo $employerRepo,
        IProvinceRepo $provinceRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->employerRepo = $employerRepo;
        $this->provinceRepo = $provinceRepo;
    }

    /**
     * Get list employer
     * @param Request $request
     * @return $this
     */
    public function employerList(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
//        $keyword = $request->input('keyword');
//        $pageSize = config('front.pageSize');
//        $employers = $this->employerRepo->search($keyword, $pageSize);

        $provinces = Province::all();

        return view('admin/employer/list')
//            ->with('employers', $employers)
            ->with('provinces', $provinces)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::EMPLOYER_LIST);
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
            return view('admin.employer.employer_detail')
                ->with('employer', $employer)
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
        $result = [];

        if ($request->ajax()) {
            if (!$request->has('vip')) {
                $result = ['success' => false, 'message' => 'Not found vip'];
            } else {
                $vip = $request->input('vip');
                $success = $this->employerRepo->setVip($id, $vip);
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
                "vip"               => $item->vip
            );
        }

        return response()->json([
            "data" => $list,
            "total" => $total
        ]);
    }
}