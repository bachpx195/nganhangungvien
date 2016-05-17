<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SaveScv extends Model {

    protected $table = 'save_csv';

    public function employer()
    {
        return $this->belongsTo('App\Model\Employer', 'employer_id', 'id');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }

}
