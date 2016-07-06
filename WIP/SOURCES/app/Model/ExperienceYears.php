<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExperienceYears extends Model {

    protected $table = 'experience_years';

    public $timestamps = false;


    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
