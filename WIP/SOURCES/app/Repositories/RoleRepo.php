<?php namespace App\Repositories;

use App\Role;

class RoleRepo implements IRoleRepo {
	
	public function all() {
		
		return Role::orderBy('ordering')
					->get();
	}
	
}