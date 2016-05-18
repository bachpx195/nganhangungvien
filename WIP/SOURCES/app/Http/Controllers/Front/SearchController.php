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

class SearchController extends Controller {

	protected $request;
	
	public function __construct(ICandidateRepo $candidateRepo)
	{
		$this->candidateRepo = $candidateRepo;
	}
	
	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request)
	{
		$params = [];
		$params['title'] = $request->get('title');
		$params['occupation'] = $request->get('occupation');
		$params['province'] = $request->get('province');
		$params['salaryGrade'] = $request->get('salaryGrade');
		$params['degree'] = $request->get('degree');
		$params['yearOfexp'] = $request->get('yearOfexp');
		$params['sex'] = $request->get('sex');
		$params['language'] = $request->get('language');
		$params['timeUpdate'] = $request->get('timeUpdate');
		
		$params = $request->all();
		
		var_dump($params);
		die();
		
		return view('front::search/index');
	}
	
}