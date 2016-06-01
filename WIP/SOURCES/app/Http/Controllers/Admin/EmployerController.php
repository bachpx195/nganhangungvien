<?php namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\IEmployerRepo;
use App\Services\Registrar;

class EmployerController extends Controller
{
    private $employerRepo;
    private $registrar;

    public function __construct(
        IEmployerRepo $employerRepo,
        Registrar $registrar
    )
    {
        $this->employerRepo = $employerRepo;
        $this->registrar = $registrar;
    }

    public function employerList(Request $request)
    {
        $activeMenu = Constants::EMPLOYER;
        $params = $request->all();

        $pageSize = config('front.pageSize');
        $employers = $this->employerRepo->search($params, $pageSize);

        return view('admin/employer/list')
            ->with('employers', $employers)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::EMPLOYER_LIST_PT);
    }
}