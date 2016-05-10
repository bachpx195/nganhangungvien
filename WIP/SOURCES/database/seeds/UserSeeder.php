<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {
	
	public function run() 
	{
		DB::table('users')->delete();
		
		// Manager
		User::create([
				'username' => 'admin',
				'full_name' => 'admin',
				'email' => 'admin@mail.com',
				'password' => Hash::make('123456'),
				'role_id' => 1
		]);
	}
	
}