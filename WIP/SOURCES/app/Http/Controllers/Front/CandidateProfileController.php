<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Province;
use App\Model\Job;
use App\Model\Salary;
use App\Model\Level;
use App\Model\ExperienceYears;
use App\Model\ForeignLanguage;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ICandidateRepo;

class CandidateProfileController extends BaseController {
	
	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request)
	{
		$dropdownData = $this->dropdownData();
		
		return view('front/search/search_result')
				->with('dropdownData', $dropdownData);
	}
	
}