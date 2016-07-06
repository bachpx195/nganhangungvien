<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('role')->truncate();

        Role::insert([
            'name' => 'Super Admin',
            'code' => 'SUPER_ADMIN'
        ]);

        Role::insert([
            'name' => 'Admin',
            'code' => 'ADMIN'
        ]);
    }
}