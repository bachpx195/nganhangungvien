<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {

    protected $table = 'transaction';

    public function employer()
    {
        return $this->belongsTo('App\Model\Employer', 'employer_id', 'id');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
