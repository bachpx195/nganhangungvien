<?php namespace App\Repositories;

interface ISalaryRepo
{
    public function all();

    public function filter($name);
}
