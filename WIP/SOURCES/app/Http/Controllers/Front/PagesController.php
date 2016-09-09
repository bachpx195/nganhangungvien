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

	public function mauHopDong()
	{
		return view('front/pages/mau_hop_dong');
	}

	public function privacyPolicy()
	{
		return view('front/pages/privacy_policy');
	}

	public function deAnWebsite()
	{
		return view('front/pages/de_an_website');
	}

	public function donDangKyCCDVTMDT()
	{
		return view('front/pages/don_dang_ky');
	}

	public function giaiQuyetTranhChap()
	{
		return view('front/pages/giai_quyet_tranh_chap');
	}

	public function quyCheWebSiteTMDT()
	{
		return view('front/pages/quy_che_web_site_tmdt');
	}

	public function dangKyBoCongThuong()
	{
		return view('front/pages/bo_cong_thuong');
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