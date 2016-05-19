<?php namespace App\Repositories;

use App\Model\Exigency;

class ExigencyRepo implements IExigencyRepo {
    
    public function all() {

        return Exigency::get();
    }
}