<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model {

    protected $table = 'rank';

    public $timestamps = false;

    public function employer()
    {
        return $this->belongsTo('App\Model\Employer', 'employer_id', 'id');
    }
    
    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
