<?php namespace App\Repositories;

use App\Model\Province;

class ProvinceRepo implements IProvinceRepo {
    
    public function all() {

        return Province::get();
    }
}