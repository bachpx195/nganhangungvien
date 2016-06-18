<?php

namespace App\Http\Controllers;

use App\Repositories\EmployerRepo;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Registrar;

use App\Repositories\IUserRepo;
use App\Repositories\IRoleRepo;
use App\Libs\BaoKim\Card;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class UserController extends Controller {
	
	protected $userRepo;
	protected $roleRepo;
	protected $registrar;
	protected $card;
	protected $employerRepo;

	/**
	 * UserController constructor.
	 * @param IUserRepo $userRepo
	 * @param IRoleRepo $roleRepo
	 * @param Registrar $registrar
	 * @param EmployerRepo $employerRepo
	 * @param Card $card
	 */
	public function __construct(
		IUserRepo $userRepo,
		IRoleRepo $roleRepo,
		Registrar $registrar,
		EmployerRepo $employerRepo,
		Card $card
	) {
		
		$this->userRepo = $userRepo;
		$this->roleRepo = $roleRepo;
		$this->registrar = $registrar;
		$this->card = $card;
		$this->employerRepo = $employerRepo;
	}
	
	public function userList(Request $request) {
		
		$name 		= $request->input('name');
		$email 		= $request->input('email');
		$phone 		= $request->input('phone');
		
		$userList 	= $this->userRepo->filter($name, $email, $phone);
		$pagination = $userList->appends($request->all());
		
		return view('user/user_list')
					->with('userList', 		$userList)
					->with('name', 			$name)
					->with('email', 		$email)
					->with('phone', 		$phone)
					->with('pagination', 	$pagination);
	}
	
	public function userForm(Request $request) {
		
		// get method
		if ($request->isMethod('get')) {
			
			$roleList 	= $this->roleRepo->all();
			
			if ($request->has('id')) {
			
				$user = User::find($request->get('id'));
			} else {
				$user = new User;
			}
			
			return view('user/user_form')
						->with('user', 		$user)
						->with('roleList', 	$roleList);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$tempUser = $this->userRepo->findByEmail($input['email']);
				if ($tempUser != null && $tempUser->id != $input['id']) {
					
					return redirect()
								->back()
								->withErrors(['email' => trans('validation.unique', ['attribute' => 'email'])])
								->withInput();
				}
				
				$user = User::find($request->get('id'));
				$user->full_name = $input['full_name'];
				$user->email 	= $input['email'];
				$user->phone 	= $input['phone'];
				$user->role_id 	= $input['role_id'];
				$user->active 	= $input['active'];
				
				if (isset($input['password']) && $input['password'] != '') {
					$user->password = bcrypt($input['password']);
				}
				
				$user->save();
			} else {
				$validator = $this->registrar->validator($request->all());
				
				if ($validator->fails()) {
					
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$user = new User;
				$user->username = $input['username'];
				$user->password = bcrypt($input['password']);
				$user->full_name = $input['full_name'];
				$user->email 	= $input['email'];
				$user->phone 	= $input['phone'];
				$user->role_id 	= $input['role_id'];
				$user->active 	= $input['active'];
				
				$user->save();
			}
			
			return redirect(route('user.list'));
		}
	}
	
	public function delete(Request $request, $id) {
	
		$data = [];
	
		if ($request->ajax()) {
			
			User::find($id)->delete();
				
			$data = ['status' => true, 'message' => ''];
		}
	
		return $data;
	}

	/**
	 * Payment by card
	 *
	 * @param Request $request
	 * @return mixed
	 */
	public function userPay(Request $request)
	{
		$user = Auth::user();
		$paymentStatus = Session::get('paymentStatus', null);
		Session::forget('paymentStatus');
		$employer = $this->employerRepo->findEmployerInfoByUserId($user->id);

		if ($request->isMethod('get')) {

			return view('user/pay', ['employer' => $employer, 'paymentStatus' => $paymentStatus]);
		} else {
			$userData = Input::except(array('_token', '_method'));
			$r = $this->card->baoKimCardApi($userData);

			if ($r['success'])
			{
				$employer = $this->employerRepo->increaseBalanceAfterPayment($user->id, $r['amount']);
				$paymentStatus = true;
			} else {
				$paymentStatus = false;
			}

			Session::put('paymentStatus', $paymentStatus);

			if($request->ajax()){
				return array('success' => $paymentStatus, 'employer' => $employer);
			} else {
				return redirect(route('user.pay'));
			}
		}
	}

	/**
	 * Show top up modal and payment
	 *
	 * @return mixed
	 */
	public function userTopUp()
	{
		$user = Auth::user();
		$employer = $this->employerRepo->findEmployerInfoByUserId($user->id);

		return view('user/top_up', ['employer' => $employer]);
	}
}
