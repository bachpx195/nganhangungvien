<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class CandidateProfileController extends BaseController {
	
	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request)
	{
		$dropdownData = $this->dropdownData();
		
		return view('front/profile/candidate')
				->with('dropdownData', $dropdownData);
	}
	
}