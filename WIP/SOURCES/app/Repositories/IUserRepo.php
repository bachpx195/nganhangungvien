<?php namespace App\Repositories;

interface IUserRepo
{
	public function filter($name, $email, $phone);
	
	public function findByEmail($email);

	/**
	 * Get user by user id
	 * @param $userId user id
	 * @return mixed
	 */
	public function findById($userId);
}
