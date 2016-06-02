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
    ) {
        $this->registrar = $registrar;
        $this->employerRepo = $employerRepo;
    }

    public function employerList(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
        $keyword 		= $request->input('keyword');

        $pageSize = config('front.pageSize');
        $employers = $this->employerRepo->search($keyword, $pageSize);
        $pagination 	= $employers->appends($request->all());

        return view('admin/employer/list')
            ->with('employers', $employers)
            ->with('activeMenu', $activeMenu)
            ->with('keyword', $keyword)
            ->with('pagination', $pagination)
            ->with('pageTitle', 'Danh sách nhà tuyển dụng');
    }
    
    public function employerDetail(Request $request)
    {
        if ($request->isMethod('get')) {

            if ($request->has('id')) {

                $employer = Employer::find($request->get('id'));
            } else {
                $employer = new Employer();
            }

            return view('admin.employer.employer_form')
                ->with('employer', 	$employer);
        }
    }
}