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

	protected $candidateRepo;
	
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
		$params = $request->all();
		
		$candidates = $this->candidateRepo->search($params);
		
		return view('front/search/search_result')
				->with('candidates', $candidates);
	}
	
}