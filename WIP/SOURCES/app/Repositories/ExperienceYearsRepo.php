<?php namespace App\Repositories;

use App\Model\ExperienceYears;

class ExperienceYearsRepo implements IExperienceYearsRepo {
    
    public function all() {

        return ExperienceYears::get();
    }
}