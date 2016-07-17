<?php namespace App\Repositories;

use App\Model\EmploymentStatus;

class EmploymentStatusRepo implements IEmploymentStatusRepo {
    
    public function all() {

        return EmploymentStatus::orderBy('id', 'asc')->get();
    }
}