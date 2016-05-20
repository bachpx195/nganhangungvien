<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

    protected $table = 'candidate';

    public function province()
    {
        return $this->belongsTo('App\Model\Province', 'province_id', 'id');
    }

    public function experienceYears()
    {
        return $this->belongsTo('App\Model\ExperienceYears', 'experience_years', 'id');
    }

    public function currentRank()
    {
        return $this->belongsTo('App\Model\Rank', 'current_rank', 'id');
    }

    public function expectRank()
    {
        return $this->belongsTo('App\Model\Rank', 'expect_rank', 'id');
    }

    public function expectJob()
    {
        return $this->belongsTo('App\Model\Job', 'job', 'id');
    }

    public function expectSalary()
    {
        return $this->belongsTo('App\Model\Salary', 'expect_salary', 'id');
    }

    public function expectAddress()
    {
        return $this->belongsTo('App\Model\Province', 'expect_address', 'id');
    }

    public function exigency()
    {
        return $this->belongsTo('App\Model\Exigency', 'exigency', 'id');
    }

    public function experience()
    {
        return $this->hasMany('App\Model\Experience', 'experience', 'id');
    }
}
