<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Candidate;

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
		
		return view('front/profile/candidate')
				->with('candidate', $candidate)
				->with('dropdownData', $dropdownData);
	}
	
}