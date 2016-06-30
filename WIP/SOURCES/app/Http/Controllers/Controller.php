<?php namespace App\Http\Controllers;

use App\Libs\Constants;
use App\Repositories\IUserRoleRepo;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	protected function isSuperAdmin(IUserRoleRepo $userRoleRepo) {
		$currentUser = Auth::user();
		$role = $userRoleRepo->getRoleByUserId($currentUser->id);
		if (strcmp($role->code, Constants::ROLE_SUPER) == 0) {
			return true;
		}
		return false;
	}

}
