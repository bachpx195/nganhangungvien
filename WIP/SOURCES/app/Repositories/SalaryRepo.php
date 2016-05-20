<?php namespace App\Repositories;

use App\Model\Salary;

class SalaryRepo implements ISalaryRepo {

    public function all() {

        return Salary::get();
    }
}