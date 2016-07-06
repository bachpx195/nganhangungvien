<?php

use Illuminate\Database\Seeder;
use App\Model\Level;

class LevelSeeder extends Seeder {

    public function run()
    {
        DB::table('level')->truncate();

        $levels = [
            ['name' => 'Trên đại học'],
            ['name' => 'Đại học'],
            ['name' => 'Cao đẳng'],
            ['name' => 'Trung cấp'],
            ['name' => 'Chứng chỉ nghề'],
            ['name' => 'Trung học'],
            ['name' => 'Không yêu cầu bằng cấp']
        ];

        Level::insert($levels);
    }

}