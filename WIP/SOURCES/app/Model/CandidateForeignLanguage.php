<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CandidateForeignLanguage extends Model {

    protected $table = 'candidate_foreign_language';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id');
    }

    public function language()
    {
        return $this->belongsTo('App\Model\ForeignLanguage', 'language_id');
    }
}
