<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class EmployerRegisterController extends BaseController {
	
	/**
	 * Register employer
	 *
	 * @return \Illuminate\View\View
	 */
	public function register(Request $request)
	{
		if($request->isMethod('POST')){
			$data = $request->all();
			var_dump($data);
			die();
		}else{

		}

		$provinces = $this->provinceRepo->getSortedList();
		return view('front/register/employer_register')
				-> with('provinces', $provinces);
	}
	
}