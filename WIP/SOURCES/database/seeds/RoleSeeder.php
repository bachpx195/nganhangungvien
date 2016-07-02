<?php namespace database\seeds;

use App\Model\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('role')->delete();

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