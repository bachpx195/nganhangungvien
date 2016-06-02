<?php namespace App\Repositories;

interface IRankRepo
{
    public function all();

    public function filter($name);
}
