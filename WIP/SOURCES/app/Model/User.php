<?php namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	
	/**
	 * role
	 */
	public function role() {
		
		return $this->belongsTo('App\Role', 'role_id', 'id');
	}
	
	public function hasRole($roles) {
		
		$this->userRole = $this->role()->get();
		
		// Check if the user is a root account
		//if($this->have_role->name == 'Root') {
		//	return true;
		//}
		
		if(is_array($roles)) {
			foreach($roles as $need_role) {
				if($this->checkIfUserHasRole($need_role)) {
					return true;
				}
			}
		} else {
			return $this->checkIfUserHasRole($roles);
		}
		
		return false;
	}
	
	private function checkIfUserHasRole($need_role) {
		
		foreach($this->userRole as $role) {
			
			if (strtolower($need_role) == strtolower($role->name))
				return true;
		}
		
		return false;
	}

}
