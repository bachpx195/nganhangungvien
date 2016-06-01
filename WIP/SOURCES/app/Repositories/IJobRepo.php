<?php namespace App\Repositories;

interface IJobRepo
{
    public function all();

    function filter($name);
}
