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

	/**
	 * Search user by keyword
	 * @param $keyword keyword want to search
	 * @param $pageSize page size
	 * @return mixed
	 */
	function search($keyword, $pageSize);
}
