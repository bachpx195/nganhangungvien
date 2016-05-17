<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model {

    protected $table = 'salary';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
