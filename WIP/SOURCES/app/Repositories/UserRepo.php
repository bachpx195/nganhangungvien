<?php namespace App\Repositories;

use App\Model\User;

class UserRepo implements IUserRepo {
	
	public function filter($name, $email, $phone) {
		
		$query = User::select();
		
		if ($name != null) {
			$query = $query->where('username', 'like', '%' . $name . '%');
		}
		
		if ($email != null) {
			$query = $query->where('email', 'like', '%' . $email . '%');
		}
		
		if ($phone != null) {
			$query = $query->where('phone', 'like', '%' . $phone . '%');
		}
		
		return $query
					->orderBy('username', 'asc')
					->paginate();
	}
	
	public function findByEmail($email) {
		
		return User::where('email', $email)->first();
	}

	/**
	 * {@inheritDoc}
	 */
	public function findById($userId)
	{
		return User::where('id', $userId)->first();
	}

	/**
	 * {@inheritDoc}
	 */
	function search($params, $pageSize)
	{
		$query = User::select();

		if (isset($params['user_info']) && $params['user_info']) {
			$query = $query->where(function ($query) use ($params) {
				$query->where('user.username', 'like', '%' . $params['user_info'] . '%')
					->orWhere('user.full_name', 'like', '%' . $params['user_info'] . '%')
					->orWhere('user.email', 'like', '%' . $params['user_info'] . '%')
					->orWhere('user.phone_number', 'like', '%' . $params['user_info'] . '%');
			});
		}

		$query = $query->orderBy('username', 'ASC');
		return $query->paginate($pageSize);
	}
}