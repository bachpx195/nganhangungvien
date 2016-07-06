<?php namespace App\Repositories;

interface ICompanySizeRepo
{
	public function all();

    public function filter($name);
}
