<?php namespace App\Repositories;

interface IConfigRepo
{
    public function all();

    public function findByCode($code);
}
