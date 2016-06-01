<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {

    protected $table = 'level';

    public $timestamps = false;

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
