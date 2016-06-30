<?php

namespace App\Http\ViewComposers;

use App\Repositories\IEmployerRepo;
use App\Repositories\IUserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserComposer
{
	protected $userRepo;
	protected $employerRepo;

	public function __construct(IUserRepo $userRepo, IEmployerRepo $employerRepo)
	{
		$this->userRepo = $userRepo;
		$this->employerRepo = $employerRepo;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		if(Auth::check()){
			$user = Auth::user();
			$employer = $this->employerRepo->findEmployerInfoByUserId($user->id);
			$view->with('currentEmployer', $employer);
		}
	}
}