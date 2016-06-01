<?php namespace App\Repositories;

interface IExigencyRepo
{
    public function all();

    public function filter($name);
}
