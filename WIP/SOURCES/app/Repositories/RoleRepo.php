<?php namespace App\Repositories;

use App\Libs\Constants;
use App\Model\Role;

class RoleRepo implements IRoleRepo {
	public function all() {
		return Role::orderBy('created_at', 'DESC')
					->get();
	}

	/**
	 * {@inheritdoc}
	 */
	function getRoleByRoleCode($roleCode)
	{
		if ($roleCode == Constants::ROLE_SUPER) {
			return Role::all();
		}
		return Role::where('code', '=', $roleCode)
			->get();
	}
}