<?php namespace App\Repositories;

interface IProvinceRepo
{
    public function all();

   	public function filter($name);
}
