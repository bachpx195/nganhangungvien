<?php

use Illuminate\Database\Seeder;
use App\Model\CompanySize;

class CompanySizeSeeder extends Seeder {

    public function run()
    {
        DB::table('company_size')->truncate();

        $companySizes = [
            ['name' => 'Ít hơn 10 nhân viên'],
            ['name' => 'Từ 10 - 24 nhân viên'],
            ['name' => 'Từ 25 - 99 nhân viên'],
            ['name' => 'Từ 100 - 499 nhân viên'],
            ['name' => 'Từ 500 - 999 nhân viên'],
            ['name' => 'Trên 1000 nhân viên']
        ];

        CompanySize::insert($companySizes);
    }

}