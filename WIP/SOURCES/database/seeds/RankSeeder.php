<?php

use Illuminate\Database\Seeder;
use App\Model\Rank;

class RankSeeder extends Seeder {

    public function run()
    {
        DB::table('rank')->truncate();

        $ranks = [
            ['name' => 'Quản lý cấp cao'],
            ['name' => 'Quản lý cấp trung'],
            ['name' => 'Quản lý nhóm - giám sát'],
            ['name' => 'Chuyên gia'],
            ['name' => 'Chuyên viên - Nhân viên'],
            ['name' => 'Cộng tác viên']
        ];

        Rank::insert($ranks);
    }

}