<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model {

    protected $table = 'employer';

    public function province()
    {
        return $this->belongsTo('App\Model\Province', 'province_id', 'id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function companySize()
    {
        return $this->hasOne('App\Model\CompanySize', 'company_size', 'id');
    }
}
