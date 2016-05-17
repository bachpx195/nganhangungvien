<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

    protected $table = 'candidate';

    public function province()
    {
        return $this->hasOne('App\Model\Province', 'province_id', 'id');
    }

    public function expectYears()
    {
        return $this->hasOne('App\Model\ExpectYears', 'expect_years', 'id');
    }

    public function currentRank()
    {
        return $this->hasOne('App\Model\Rank', 'current_rank', 'id');
    }

    public function expectRank()
    {
        return $this->hasOne('App\Model\Rank', 'expect_rank', 'id');
    }

    public function expectJob()
    {
        return $this->hasOne('App\Model\Job', 'expect_job', 'id');
    }

    public function expectSalary()
    {
        return $this->hasOne('App\Model\Salary', 'expect_salary', 'id');
    }

    public function expectAddress()
    {
        return $this->hasOne('App\Model\Province', 'expect_address', 'id');
    }

    public function exigency()
    {
        return $this->hasOne('App\Model\Exigency', 'exigency', 'id');
    }

    public function experience()
    {
        return $this->hasMany('App\Model\Experience', 'experience', 'id');
    }
}
