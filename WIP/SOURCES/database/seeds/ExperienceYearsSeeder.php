<?php

use Illuminate\Database\Seeder;
use App\Model\ExperienceYears;

class ExperienceYearsSeeder extends Seeder {

    public function run()
    {
        DB::table('experience_years')->delete();

        $experienceYears = [
            ['name' => 'Chưa có kinh nghiệm'],
            ['name' => 'Dưới 1 năm'],
            ['name' => '1 năm'],
            ['name' => '2 năm'],
            ['name' => '3 năm'],
            ['name' => '4 năm'],
            ['name' => '5 năm'],
            ['name' => 'Hơn 5 năm']
        ];

        ExperienceYears::insert($experienceYears);
    }

}