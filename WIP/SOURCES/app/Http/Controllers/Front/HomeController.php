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

class HomeController extends BaseController {

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		//echo Auth::user()->username;
		$dropdownData = $this->dropdownData();

		$candidatesData = $this->candidatesData();

		$tabsData = [];
		$tabsData['careers'] = $this->candidateRepo->careerStatistic();
		$tabsData['experienceYears'] = $this->candidateRepo->experienceYearsStatistic();
		$tabsData['levels'] = $this->candidateRepo->levelsStatistic();
		$tabsData['salaries'] = $this->candidateRepo->salariesStatistic();
		$tabsData['provinces'] = $this->candidateRepo->provinceStatistic();

		$countData=[];
		$countData['all'] = $this->candidateRepo->countAllStatistic();
		$countData['rencent'] = $this->candidateRepo->countRecentStatistic();
		$countData['new'] = $this->candidateRepo->countNewStatistic();

		$linkYouTube = '';
		// $linkYouTubeChanel = '';
		$videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
		// $videoChanelConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE_CHANEL);
		if($videoConfig){
			$linkYouTube = $videoConfig->value;
			$linkYouTube = str_replace('watch?v=', 'embed/', $linkYouTube);
		}
		// if($videoChanelConfig){
		// 	$linkYouTubeChanel = $videoChanelConfig->value;
		// }
		return view('front/home/index')
				->with('dropdownData', $dropdownData)
				->with('tabsData', $tabsData)
				->with('candidatesData', $candidatesData)
				->with('countData',$countData)
				->with('linkYouTubeChanel', $this->linkYouTubeChanel)
				->with('linkYouTube', $linkYouTube);
	}
	
}