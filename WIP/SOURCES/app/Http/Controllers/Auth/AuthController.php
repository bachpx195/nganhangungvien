<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Lang;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	protected $redirectTo = "/admin";
	protected $redirectAfterLogout = 'admin/login';
	
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getLogin(Request $request) {
		return view('admin.account.login');
	}

	public function getLogout()
	{
		$this->auth->logout();

		return redirect($this->redirectAfterLogout);
	}
	
	/**
	 * Custom login
	 * 
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postLogin(Request $request) {  
		
		$email = $request->input('username');
		$password = $request->input('password');
        echo $email;
		echo $password;
		if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1]))   {
			return redirect()->intended($this->redirectTo);
        }
        else {

			if (Auth::attempt(['username' => $email, 'password' => $password, 'status' => 1]))   {
				return redirect()->intended($this->redirectTo);
        	}

        	return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => trans('messages.auth.login.error'),
					]);
        }
    }
}
