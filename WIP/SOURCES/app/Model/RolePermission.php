<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model {

    protected $table = 'role_permission';

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function permission()
    {
        return $this->belongsTo('App\Model\Permission', 'permission_id', 'id');
    }
}
