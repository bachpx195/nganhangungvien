<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CandidateCertificate extends Model {

    protected $table = 'candidate_certificate';

    public function candidate()
    {
        return $this->belongsTo('App\Model\Candidate', 'candidate_id', 'id');
    }
}
