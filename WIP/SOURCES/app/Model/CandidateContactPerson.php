<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CandidateContactPerson extends Model {

    protected $table = 'candidate_contact_person';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id');
    }
}
