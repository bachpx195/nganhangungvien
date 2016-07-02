<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Libs\Constants;
use Illuminate\Http\Request;
use App\Model\Candidate;
use App\Model\Province;
use App\Model\Job;
use App\Model\Salary;
use App\Model\Level;
use App\Model\ExperienceYears;
use App\Model\ForeignLanguage;
use App\Repositories\ICandidateRepo;
use Auth;

class PagesController extends BaseController {

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function outsourcingPackage()
	{

		return view('front/pages/outsourcing_package');
	}
    public function error()
    {
        return view('errors.404');
    }
	
}