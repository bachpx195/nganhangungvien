<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Candidate;
use App\Repositories\ICandidateRepo;

class CandidateProfileController extends BaseController {
	
	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request, $slug, $id)
	{
		$candidate = Candidate::find($id);
		if(!$candidate){
			return $this->errorView();
		}
		
		$dropdownData = $this->dropdownData();

		$candidatesData = $this->candidatesData();
		
		$sameData=[];
		$sameData['exp'] = $this->candidateRepo->sameExpStatistic($id);
		$sameData['lvl'] = $this->candidateRepo->sameLvlStatistic($id);
		
		return view('front/profile/candidate')
				->with('candidate', $candidate)
				->with('dropdownData', $dropdownData)
				->with('candidatesData', $candidatesData)
				->with('sameData', $sameData);
	}
	
}