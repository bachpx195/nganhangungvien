<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanySize extends Model {

    protected $table = 'company_size';

    public $timestamps = false;

    public function employer()
    {
        return $this->belongsTo('App\Model\Employer', 'employer_id', 'id');
    }
}
