<?php namespace App\Model;

use App\Libs\Constants;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\App;
use App\Model\Employer;

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
	protected $fillable = ['username', 'email', 'password', 'id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function userRole() {
		return $this->belongsTo('App\Model\UserRole', 'user_id', 'id');
	}
	
	/**
	 * role
	 */
	public function role() {
		
		return $this->belongsTo('App\Role', 'role_id', 'id');
	}

	public function roles()
	{
		return $this->belongsToMany('App\Model\Role', 'user_role', 'user_id', 'role_id');
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

	public function isSuperAdmin()
	{
		return $this->roles()->where('code', 'SUPER_ADMIN')->first();
	}

	public function employer(){
		return $this->belongsTo('App\Model\Employer', 'user_id', 'id');
	}

	public function employerCompanyName(){

		$employer = Employer::where('user_id', '=', $this->id)
			->first();

		if($employer){
			return $employer->company_name;
		}
		return NULL;
	}
}
