<?php namespace App\Repositories;

interface IRoleRepo
{
	public function all();

	/**
	 * Get role by role code
	 * @param $roleCode role code
	 * @return mixed
	 */
	function getRoleByRoleCode($roleCode);
}
