<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

    protected $table = 'experience';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }
}
