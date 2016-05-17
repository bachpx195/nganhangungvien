<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model {

    protected $table = 'employment_status';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
