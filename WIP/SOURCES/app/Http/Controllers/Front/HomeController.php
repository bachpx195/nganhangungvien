<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Province;
use App\Model\Job;
use App\Model\Salary;
use App\Model\Level;
use App\Model\ExperienceYears;
use App\Model\ForeignLanguage;

class HomeController extends Controller {

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$dropdownData = [];
		$dropdownData['provinces'] = Province::all();
		$dropdownData['occupations'] = Job::all();
		$dropdownData['salaryGrades'] = Salary::all();
		$dropdownData['degrees'] = Level::all();
		$dropdownData['yearOfexps'] = ExperienceYears::all();
		$dropdownData['languages'] = ForeignLanguage::all();
		
		return view('front/home/index')
				->with('dropdownData', $dropdownData);
	}
	
}