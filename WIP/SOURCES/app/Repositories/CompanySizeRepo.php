<?php namespace App\Repositories;

use App\Model\CompanySize;

class CompanySizeRepo implements ICompanySizeRepo {
    
    public function all() {

        return CompanySize::get();
    }
}