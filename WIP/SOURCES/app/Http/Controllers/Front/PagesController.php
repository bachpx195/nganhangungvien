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
use App\Repositories\IConfigRepo;
use Auth;

class PagesController extends BaseController {

    protected $policy;
	
	/**
     * PagesController constructor.
     *
     * @param IConfigRepo $configRepo
     */
    public function __construct(IConfigRepo $configRepo) {
        $this->policy = !empty($configRepo->findByCode(Constants::CONFIG_POLICY)->value) ? 
                        $configRepo->findByCode(Constants::CONFIG_POLICY)->value : '';
    }

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function outsourcingPackage()
	{
		return view('front/pages/outsourcing_package');
	}

	public function registVip()
	{
		return view('front/pages/regist_vip');
	}

    public function error()
    {
        return view('errors.404');
    }

    public function policy()
	{
		return view('front/pages/policy')
				->with('policy', $this->policy);
	}
	
}