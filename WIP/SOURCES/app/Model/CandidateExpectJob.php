<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateExpectJob extends Model {

    protected $table = 'candidate_expect_job';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo('App\Model\Job', 'job_id', 'id');
    }
}