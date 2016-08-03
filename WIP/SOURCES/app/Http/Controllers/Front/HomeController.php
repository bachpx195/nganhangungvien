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
use App\Model\Config;


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
		$bannerLeftImageConfig = $this->configRepo->findByCode(Constants::CONFIG_LEFT_BANNER);
        $bannerRightImageConfig = $this->configRepo->findByCode(Constants::CONFIG_RIGHT_BANNER);
        $newsBannerImageConfig = $this->configRepo->findByCode(Constants::CONFIG_NEWS_BANNER);
		return view('front/home/index')
				->with('dropdownData', $dropdownData)
				->with('tabsData', $tabsData)
				->with('candidatesData', $candidatesData)
				->with('countData',$countData)
				->with('linkYouTubeChanel', $this->linkYouTubeChanel)
				->with('linkYouTube', $linkYouTube)
				->with('bannerLeftImageConfig', $bannerLeftImageConfig)
            	->with('bannerRightImageConfig', $bannerRightImageConfig)
            	->with('newsBannerImageConfig', $newsBannerImageConfig);
	}
    public function error()
    {
        return view('errors.404');
    }
	
}