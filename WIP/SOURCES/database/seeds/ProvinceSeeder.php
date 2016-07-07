<?php

use Illuminate\Database\Seeder;
use App\Model\Province;

class ProvinceSeeder extends Seeder {

    public function run()
    {
        DB::table('province')->truncate();

        $provinces = [
            ['name' => 'Hải Phòng', 'sort_order' => 4],
            ['name' => 'Hải Dương', 'sort_order' => 99],
            ['name' => 'Hưng Yên', 'sort_order' => 99],
            ['name' => 'Hà nội', 'sort_order' => 1],
            ['name' => 'Thái Bình', 'sort_order' => 99],
            ['name' => 'Hà Nam', 'sort_order' => 99],
            ['name' => 'Nam Định', 'sort_order' => 99],
            ['name' => 'Ninh Bình', 'sort_order' => 99],
            ['name' => 'Phú Thọ', 'sort_order' => 99],
            ['name' => 'Vĩnh Phúc', 'sort_order' => 99],
            ['name' => 'Bắc Giang', 'sort_order' => 99],
            ['name' => 'Bắc Ninh', 'sort_order' => 99],
            ['name' => 'Lai Châu', 'sort_order' => 99],
            ['name' => 'Sơn La', 'sort_order' => 99],
            ['name' => 'Hòa Bình', 'sort_order' => 99],
            ['name' => 'Lào Cai', 'sort_order' => 99],
            ['name' => 'Yên Bái', 'sort_order' => 99],
            ['name' => 'Thái Nguyên', 'sort_order' => 99],
            ['name' => 'Bắc Cạn', 'sort_order' => 99],
            ['name' => 'Lạng Sơn', 'sort_order' => 99],
            ['name' => 'Tuyên Quang', 'sort_order' => 99],
            ['name' => 'Cao Bằng', 'sort_order' => 99],
            ['name' => 'Hà Giang', 'sort_order' => 99],
            ['name' => 'Quảng Ninh', 'sort_order' => 99],
            ['name' => 'Thanh Hóa', 'sort_order' => 99],
            ['name' => 'Nghệ An', 'sort_order' => 99],
            ['name' => 'Hà Tĩnh', 'sort_order' => 99],
            ['name' => 'Quảng Bình', 'sort_order' => 99],
            ['name' => 'Thừa Thiên Huế', 'sort_order' => 99],
            ['name' => 'Quảng Trị', 'sort_order' => 99],
            ['name' => 'Quảng Nam', 'sort_order' => 99],
            ['name' => 'Đà Nẵng', 'sort_order' => 3],
            ['name' => 'Quảng Ngãi', 'sort_order' => 99],
            ['name' => 'Bình Định', 'sort_order' => 99],
            ['name' => 'Phú Yên', 'sort_order' => 99],
            ['name' => 'Ninh Thuận', 'sort_order' => 99],
            ['name' => 'Bình Thuận', 'sort_order' => 99],
            ['name' => 'Khánh Hòa', 'sort_order' => 99],
            ['name' => 'Đắc Lắc', 'sort_order' => 99],
            ['name' => 'Gia Lai', 'sort_order' => 99],
            ['name' => 'Kon Tum', 'sort_order' => 99],
            ['name' => 'Lâm Đồng', 'sort_order' => 99],
            ['name' => 'TP HCM', 'sort_order' => 2],
            ['name' => 'Đồng Nai', 'sort_order' => 99],
            ['name' => 'Bà Rịa Vũng Tàu', 'sort_order' => 99],
            ['name' => 'Tây Ninh', 'sort_order' => 99],
            ['name' => 'Bình Dương', 'sort_order' => 99],
            ['name' => 'Bình Phước', 'sort_order' => 99],
            ['name' => 'Đồng Tháp', 'sort_order' => 99],
            ['name' => 'Vĩnh Long', 'sort_order' => 99],
            ['name' => 'Cần Thơ', 'sort_order' => 99],
            ['name' => 'Long An', 'sort_order' => 99],
            ['name' => 'Bến Tre', 'sort_order' => 99],
            ['name' => 'Trà Vinh', 'sort_order' => 99],
            ['name' => 'An Giang', 'sort_order' => 99],
            ['name' => 'Kiên Giang', 'sort_order' => 99],
            ['name' => 'Tiền Giang', 'sort_order' => 99],
            ['name' => 'Cà Mau', 'sort_order' => 99],
            ['name' => 'Bạc Liêu', 'sort_order' => 99],
            ['name' => 'Sóc Trăng', 'sort_order' => 99],
            ['name' => 'Điện Biên', 'sort_order' => 99],
            ['name' => 'Đắk Nông', 'sort_order' => 99],
            ['name' => 'Hậu Giang', 'sort_order' => 99
            ]
        ];

        Province::insert($provinces);
    }

}