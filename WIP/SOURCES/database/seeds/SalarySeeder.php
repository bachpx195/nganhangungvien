<?php

use Illuminate\Database\Seeder;
use App\Model\Salary;

class SalarySeeder extends Seeder {

    public function run()
    {
        DB::table('salary')->delete();

        $salaries = [
            ['name' => 'Thỏa thuận'],
            ['name' => '1 - 3 triệu'],
            ['name' => '3 - 5 triệu'],
            ['name' => '5 - 7 triệu'],
            ['name' => '7 – 10 triệu'],
            ['name' => '10 – 15 triệu'],
            ['name' => '15 – 20 triệu'],
            ['name' => '20 – 30 triệu'],
            ['name' => 'Trên 30 triệu']
        ];

        Salary::insert($salaries);
    }

}