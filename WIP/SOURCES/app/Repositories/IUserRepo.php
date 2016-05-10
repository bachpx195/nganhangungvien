<?php namespace App\Repositories;

interface IUserRepo
{
	public function filter($name, $email, $phone);
	
	public function findByEmail($email);
}
