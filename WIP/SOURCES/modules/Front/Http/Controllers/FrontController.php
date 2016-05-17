<?php namespace Modules\Front\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class FrontController extends Controller {

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('front::home/index');
	}
	
}