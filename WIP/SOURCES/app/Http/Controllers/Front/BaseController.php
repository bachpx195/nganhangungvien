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

class BaseController extends Controller {

	protected $candidateRepo;
	
	public function __construct(ICandidateRepo $candidateRepo)
	{
		$this->candidateRepo = $candidateRepo;
	}
	
	/**
	 * Get dropdown data
	 *
	 *
	 */
	protected function dropdownData()
	{
		$dropdownData = [];
		$dropdownData['provinces'] = Province::all();
		$dropdownData['occupations'] = Job::all();
		$dropdownData['salaryGrades'] = Salary::all();
		$dropdownData['degrees'] = Level::all();
		$dropdownData['yearOfexps'] = ExperienceYears::all();
		$dropdownData['languages'] = ForeignLanguage::all();
		
		return $dropdownData;
	}
	
	protected function errorView(){
		return response()->view('front.errors.404', [], 404);
	}
}