<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateForeignLanguage extends Model {

    protected $table = 'candidate_foreign_language';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

    public function foreignLanguage()
    {
        return $this->belongsTo('App\Model\ForeignLanguage', 'language_id', 'id');
    }
}
