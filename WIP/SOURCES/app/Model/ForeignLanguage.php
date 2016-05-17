<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForeignLanguage extends Model {

    protected $table = 'foreign_language';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
