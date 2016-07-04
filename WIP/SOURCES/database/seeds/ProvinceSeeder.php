<?php

use Illuminate\Database\Seeder;
use App\Model\Province;

class ProvinceSeeder extends Seeder {

    public function run()
    {
        DB::table('province')->truncate();

        $provinces = [
            ['name' => 'Hải Phòng'],
            ['name' => 'Hải Dương'],
            ['name' => 'Hưng Yên'],
            ['name' => 'TP Hà nội'],
            ['name' => 'Thái Bình'],
            ['name' => 'Hà Nam'],
            ['name' => 'Nam Định'],
            ['name' => 'Ninh Bình'],
            ['name' => 'Phú Thọ'],
            ['name' => 'Vĩnh Phúc'],
            ['name' => 'Bắc Giang'],
            ['name' => 'Bắc Ninh'],
            ['name' => 'Lai Châu'],
            ['name' => 'Sơn La'],
            ['name' => 'Hòa Bình'],
            ['name' => 'Lào Cai'],
            ['name' => 'Yên Bái'],
            ['name' => 'Thái Nguyên'],
            ['name' => 'Bắc Cạn'],
            ['name' => 'Lạng Sơn'],
            ['name' => 'Tuyên Quang'],
            ['name' => 'Cao Bằng'],
            ['name' => 'Hà Giang'],
            ['name' => 'Quảng Ninh'],
            ['name' => 'Thanh Hóa'],
            ['name' => 'Nghệ An'],
            ['name' => 'Hà Tĩnh'],
            ['name' => 'Quảng Bình'],
            ['name' => 'Thừa Thiên Huế'],
            ['name' => 'Quảng Trị'],
            ['name' => 'Quảng Nam'],
            ['name' => 'TP Đà Nẵng'],
            ['name' => 'Quảng Ngãi'],
            ['name' => 'Bình Định'],
            ['name' => 'Phú Yên'],
            ['name' => 'Ninh Thuận'],
            ['name' => 'Bình Thuận'],
            ['name' => 'Khánh Hòa'],
            ['name' => 'Đắc Lắc'],
            ['name' => 'Gia Lai'],
            ['name' => 'Kon Tum'],
            ['name' => 'Lâm Đồng'],
            ['name' => 'TP HCM'],
            ['name' => 'Đồng Nai'],
            ['name' => 'Bà Rịa Vũng Tàu'],
            ['name' => 'Tây Ninh'],
            ['name' => 'Bình Dương'],
            ['name' => 'Bình Phước'],
            ['name' => 'Đồng Tháp'],
            ['name' => 'Vĩnh Long'],
            ['name' => 'Cần Thơ'],
            ['name' => 'Long An'],
            ['name' => 'Bến Tre'],
            ['name' => 'Trà Vinh'],
            ['name' => 'An Giang'],
            ['name' => 'Kiên Giang'],
            ['name' => 'Tiền Giang'],
            ['name' => 'Cà Mau'],
            ['name' => 'Bạc Liêu'],
            ['name' => 'Sóc Trăng'],
            ['name' => 'Điện Biên'],
            ['name' => 'Đắk Nông'],
            ['name' => 'Hậu Giang']
        ];

        Province::insert($provinces);
    }

}