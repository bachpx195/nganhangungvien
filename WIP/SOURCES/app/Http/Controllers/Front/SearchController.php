<?php 

namespace App\Http\Controllers\Front;

use App\Helpers\CandidateHelper;
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
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use App\Repositories\IProvinceRepo;
use App\Repositories\IConfigRepo;

class SearchController extends BaseController {
	
	protected $candidateRepo, $provinceRepo, $configRepo;
    public function __construct(
        ICandidateRepo $candidateRepo,
        IProvinceRepo $provinceRepo,
        IConfigRepo $configRepo
    )
    {
        parent::__construct($candidateRepo, $provinceRepo, $configRepo);
    }

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request)
	{
		$params = $request->all();
		$params['status'] = 1;

		$pageSize = config('front.pageSize');
		$candidates = $this->candidateRepo->search($params, $pageSize);
		$candidates->appends(Input::except('page'));

		$dropdownData = $this->dropdownData();

		return view('front/search/search_result')
				->with('linkYouTubeChanel', $this->linkYouTubeChanel)
				->with('candidates', $candidates)
				->with('dropdownData', $dropdownData)
				->with('params', $params);
	}

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function listByCategory(Request $request, $slug)
	{
		//$page = Input::get('page');

		$params = CandidateHelper::getParamsBySlug($slug);
		$params['status'] = 1;

		/*if($page){
			Paginator::currentPageResolver(function() use ($page) {
				return $page;
			});
		}*/
		$pageSize = config('front.pageSize');
		$candidates = $this->candidateRepo->search($params, $pageSize);

		$dropdownData = $this->dropdownData();
		$categoryName = CandidateHelper::getCagegoryNameBySlug($slug);

		return view('front/search/search_category')
			->with('candidates', $candidates)
			->with('dropdownData', $dropdownData)
			->with('categoryName', $categoryName)
			->with('linkYouTubeChanel', $this->linkYouTubeChanel)
			->with('params', $params);
	}

	public function listByView(Request $request)
	{
		$params = [];
		$params['status'] = 1;

		$pageSize = config('front.pageSize');
		$candidates = $this->candidateRepo->search($params, $pageSize, 'view_total');

		$dropdownData = $this->dropdownData();
		$title = trans("messages.front.title.view");

		return view('front/search/search_category')
			->with('candidates', $candidates)
			->with('dropdownData', $dropdownData)
			->with('categoryName', $title)
			->with('linkYouTubeChanel', $this->linkYouTubeChanel)
			->with('params', []);
	}

	public function listByTime(Request $request)
	{
		$params = [];
		$params['status'] = 1;

		$pageSize = config('front.pageSize');
		$candidates = $this->candidateRepo->search($params, $pageSize, 'updated_at');

		$dropdownData = $this->dropdownData();
		$title = trans("messages.front.title.new");

		return view('front/search/search_category')
			->with('candidates', $candidates)
			->with('dropdownData', $dropdownData)
			->with('categoryName', $title)
			->with('linkYouTubeChanel', $this->linkYouTubeChanel)
			->with('params', []);
	}
	
}