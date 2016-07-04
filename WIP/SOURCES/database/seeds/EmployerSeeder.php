<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Employer;

class EmployerSeeder extends Seeder {

    public function run()
    {
        DB::table('employer')->truncate();

        $userList = User::where('user_type', 'employer')->get();

        foreach ($userList as $user) {
            Employer::insert([
                'user_id' => $user['id'],
                'balance' => rand(0, 100),
                'phone' => '0931392183',
                'company_name' => 'Công ty ' . $user['id'],
                'company_description' => 'Mô tả công ty' . $user['id'],
                'company_size' => 500,
                'company_address' => 'Địa chỉ công ty ' . $user['id'],
                'website' => 'google.com',
                'contact_person' => 'Person ' . $user['id'],
                'contact_phone' => '01658263495',
                'contact_email' => 'Email@gmail.com',
                'status' => 1
            ]);
        }
    }

}