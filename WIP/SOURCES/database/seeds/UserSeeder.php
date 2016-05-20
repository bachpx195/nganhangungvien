<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserSeeder extends Seeder {
	
	public function run() 
	{
		DB::table('user')->delete();
		
		// Manager
		User::insert([
			'username' => 'admin',
			'full_name' => 'admin',
			'email' => 'admin@mail.com',
			'password' => Hash::make('123456'),
			'phone_number' => '0988888666',
			'image' => '',
			'user_type'	=> 'admin'
		]);

		User::insert([
			'username' => 'employer',
			'full_name' => 'employer',
			'email' => 'employer@mail.com',
			'password' => Hash::make('employer'),
			'phone_number' => '0988888777',
			'image' => '',
			'user_type'	=> 'employer'
		]);
	}
	
}