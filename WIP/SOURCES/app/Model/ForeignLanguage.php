<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForeignLanguage extends Model {

    protected $table = 'foreign_language';

    public function candidates()
    {
        return $this->hasMany('App\Model\CandidateForeignLanguage', 'language_id');
    }

}
