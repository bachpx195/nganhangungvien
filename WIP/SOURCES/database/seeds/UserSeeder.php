<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {
	
	public function run() 
	{
		DB::table('user')->delete();
		
		// Manager
		User::create([
				'username' => 'admin',
				'full_name' => 'admin',
				'email' => 'admin@mail.com',
				'password' => Hash::make('123456'),
				'phone_number' => '0988888666',
				'image' => '',
				'user_type'	=> 'admin'
		]);
	}
	
}