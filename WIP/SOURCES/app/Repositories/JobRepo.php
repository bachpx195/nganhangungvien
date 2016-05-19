<?php namespace App\Repositories;

use App\Model\Job;

class JobRepo implements IJobRepo {
    
    public function all() {

        return Job::get();
    }
}