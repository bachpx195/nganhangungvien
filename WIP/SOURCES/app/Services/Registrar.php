<?php namespace App\Services;

use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

use App\User;
use App\Role;
use App\UserRole;
use Validator;
use Log;
use Mail;
use Lang;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			//'name' => 'required|max:255',
			//'email' => 'required|email|max:255|unique:users',
			'email' 	=> 'email|max:255|unique:users',
			'username' 	=> 'required|max:255|unique:users',
			'password' 	=> 'required|min:6',
			//'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'receive_email' => isset($data['receive_email']) ? 1 : 0,
		]);
		
		// set default role
		try {
			$default_role = Role::where('is_default', 1)->first()->id;
			
			UserRole::create([
				'user_id' => $user->id,
				'role_id' => $default_role,
				'is_default' => 1
			]);
		} catch(\Exception $e){
			Log::warning('No default role. ' . $e);
		}
		
		$subject = Lang::get('messages.email.user.welcome');
		
		Mail::queue('emails.user_welcome',
				array(
					'name' => $user->name
				),
				function($message) use($user, $subject) {
						
					$message->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
					$message->to($user->email)->subject($subject);
				});
		
		return $user;
	}

}
