<?php

use Illuminate\Database\Seeder;
use App\Model\EmploymentStatus;

class EmploymentStatusSeeder extends Seeder {

    public function run()
    {
        DB::table('employment_status')->delete();

        $employmentStatuses = [
            ['name' => 'Toàn thời gian cố định'],
            ['name' => 'Toàn thời gian tạm thời'],
            ['name' => 'Bán thời gian cố định'],
            ['name' => 'Bán thời gian tạm thời'],
            ['name' => 'Theo hợp đồng tư vấn'],
            ['name' => 'Thực tập'],
            ['name' => 'Khác']
        ];

        EmploymentStatus::insert($employmentStatuses);
    }

}