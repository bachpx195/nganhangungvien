<?php namespace App\Repositories;

use App\Model\Role;

class RoleRepo implements IRoleRepo {
	public function all() {
		return Role::orderBy('created_at', 'DESC')
					->get();
	}
}