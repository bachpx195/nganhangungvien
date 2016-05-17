<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

    protected $table = 'permission';

    /**
     * Get the role that owns the permission.
     */
    public function role()
    {
        return $this->belongsTo('App\Model\Role', 'candidate_id', 'id');
    }

}
