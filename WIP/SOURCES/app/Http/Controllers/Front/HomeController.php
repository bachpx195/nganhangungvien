<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Candidate;
use App\Model\Province;
use App\Model\Job;
use App\Model\Salary;
use App\Model\Level;
use App\Model\ExperienceYears;
use App\Model\ForeignLanguage;
use App\Repositories\ICandidateRepo;

class HomeController extends BaseController {

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$dropdownData = $this->dropdownData();

		$tabsData = [];
		$tabsData['careers'] = $this->candidateRepo->careerStatistic();
		$tabsData['experienceYears'] = $this->candidateRepo->experienceYearsStatistic();
		$tabsData['levels'] = $this->candidateRepo->levelsStatistic();
		$tabsData['salaries'] = $this->candidateRepo->salariesStatistic();
		$tabsData['provinces'] = $this->candidateRepo->provinceStatistic();

		$candidatesData=[];
		$candidatesData['candidate'] = $this->candidateRepo->candidateStatistic();
		$candidatesData['bestView'] = $this->candidateRepo->bestViewStatistic();

		$countData=[];
		$countData['all'] = $this->candidateRepo->countAllStatistic();
		$countData['rencent'] = $this->candidateRepo->countRecentStatistic();
		$countData['new'] = $this->candidateRepo->countNewStatistic();

		return view('front/home/index')
				->with('dropdownData', $dropdownData)->with('tabsData', $tabsData)->with('candidatesData', $candidatesData)->with('countData',$countData);
	}
	
}