<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Registrar;

use App\Repositories\IUserRepo;
use App\Repositories\IRoleRepo;
use App\User;

class UserController extends Controller {
	
	protected $userRepo;
	protected $roleRepo;

	/**
	 * UserController constructor.
	 * @param IUserRepo $userRepo
	 * @param IRoleRepo $roleRepo
	 * @param Registrar $registrar
	 */
	public function __construct(IUserRepo $userRepo, IRoleRepo $roleRepo, Registrar $registrar) {
		
		$this->userRepo = $userRepo;
		$this->roleRepo = $roleRepo;
		$this->registrar = $registrar;
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
}
