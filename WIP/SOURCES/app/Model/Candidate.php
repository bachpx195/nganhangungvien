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
    
    public function expectJobs()
    {
        //return $this->belongsTo('App\Model\Job', 'job', 'id');
    	return $this->belongsToMany('App\Model\Job', 'candidate_expect_job', 'candidate_id', 'job_id');
    }

    public function expectSalary()
    {
        return $this->belongsTo('App\Model\Salary', 'expect_salary', 'id');
    }

    public function expectAddresses()
    {
        return $this->belongsToMany('App\Model\Province', 'candidate_expect_address', 'candidate_id', 'province_id');
    }

    public function exigency()
    {
        return $this->belongsTo('App\Model\Exigency', 'exigency', 'id');
    }
    
    public function maxLevel()
    {
    	return $this->belongsTo('App\Model\Level', 'level', 'id');
    }
    
    public function employmentStatus()
    {
    	return $this->belongsTo('App\Model\EmploymentStatus', 'employment_status', 'id');
    }

    public function experiences()
    {
        return $this->hasMany('App\Model\Experience', 'candidate_id');
    }
    
    public function foreignLanguages(){
    	return $this->hasMany('App\Model\CandidateForeignLanguage', 'candidate_id');
    }
    
    public function certificates(){
    	return $this->hasMany('App\Model\CandidateCertificate', 'candidate_id');
    }
    
    public function itLevels(){
    	return $this->hasMany('App\Model\CandidateItLevel', 'candidate_id');
    }
}
