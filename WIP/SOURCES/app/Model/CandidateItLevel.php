<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateItLevel extends Model {

    protected $table = 'candidate_it_level';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }
}
