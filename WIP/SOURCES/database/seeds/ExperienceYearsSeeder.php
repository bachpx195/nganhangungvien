<?php

use Illuminate\Database\Seeder;
use App\Model\ExperienceYears;

class ExperienceYearsSeeder extends Seeder {

    public function run()
    {
        DB::table('experience_years')->truncate();

        $experienceYears = [
            ['name' => 'Chưa có kinh nghiệm', 'code' => '-1'],
            ['name' => 'Dưới 1 năm', 'code' => '0'],
            ['name' => '1 năm', 'code' => '1'],
            ['name' => '2 năm', 'code' => '2'],
            ['name' => '3 năm', 'code' => '3'],
            ['name' => '4 năm', 'code' => '4'],
            ['name' => '5 năm', 'code' => '5'],
            ['name' => '6 năm', 'code' => '6'],
            ['name' => '7 năm', 'code' => '7'],
            ['name' => '8 năm', 'code' => '8'],
            ['name' => '9 năm', 'code' => '9'],
            ['name' => '10 năm', 'code' => '10'],
            ['name' => 'Hơn 10 năm', 'code' => '99']
        ];

        ExperienceYears::insert($experienceYears);
    }

}