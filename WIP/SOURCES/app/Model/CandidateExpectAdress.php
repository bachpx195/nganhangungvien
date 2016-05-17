<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateExpectAddress extends Model {

    protected $table = 'candidate_expect_address';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

    public function province()
    {
        return $this->belongsTo('App\Model\Province', 'province_id', 'id');
    }
}
