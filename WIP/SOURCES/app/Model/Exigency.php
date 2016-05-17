<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exigency extends Model {

    protected $table = 'exigency';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
