<?php namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libs\Constants;
use App\Model\Employer;
use App\Repositories\IEmployerRepo;
use App\Services\Registrar;

class EmployerController extends Controller
{
    protected $employerRepo;
    protected $registrar;

    public function __construct(
        IEmployerRepo $employerRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->employerRepo = $employerRepo;
    }

    /**
     * Get list employer
     * @param Request $request
     * @return $this
     */
    public function employerList(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
        $keyword = $request->input('keyword');
        $pageSize = config('front.pageSize');
        $employers = $this->employerRepo->search($keyword, $pageSize);

        return view('admin/employer/list')
            ->with('employers', $employers)
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
}