<?php

use Illuminate\Database\Seeder;
use App\Model\Job;

class JobSeeder extends Seeder {

    public function run()
    {
        DB::table('job')->delete();

        $jobs = [
            ['name' => 'Kế toán-Kiểm toán'],
            ['name' => 'Hành chính-Văn phòng'],
            ['name' => 'Bán hàng'],
            ['name' => 'Xây dựng'],
            ['name' => 'Điện-Điện tử'],
            ['name' => 'Cơ khí-Chế tạo'],
            ['name' => 'Y tế-Dược'],
            ['name' => 'Làm bán thời gian'],
            ['name' => 'Lao động phổ thông'],
            ['name' => 'Báo chí-Truyền hình'],
            ['name' => 'Bảo hiểm'],
            ['name' => 'Bảo vệ'],
            ['name' => 'Biên-Phiên dịch'],
            ['name' => 'Bưu chính'],
            ['name' => 'Chứng khoán- Vàng'],
            ['name' => 'Công nghệ cao'],
            ['name' => 'Công nghiệp'],
            ['name' => 'Dầu khí-Hóa chất'],
            ['name' => 'Đầu tư'],
            ['name' => 'Dệt may - Da giày'],
            ['name' => 'Dịch vụ'],
            ['name' => 'Điện tử viễn thông'],
            ['name' => 'Du lịch'],
            ['name' => 'Game'],
            ['name' => 'Giáo dục-Đào tạo'],
            ['name' => 'Hàng gia dụng'],
            ['name' => 'Hàng hải'],
            ['name' => 'Hàng không'],
            ['name' => 'Hoá học-Sinh học'],
            ['name' => 'Hoạch định-Dự án'],
            ['name' => 'In ấn-Xuất bản'],
            ['name' => 'IT phần cứng/mạng'],
            ['name' => 'IT phần mềm'],
            ['name' => 'KD bất động sản'],
            ['name' => 'Khách sạn-Nhà hàng'],
            ['name' => 'Kiến trúc-TK nội thất'],
            ['name' => 'Kỹ thuật'],
            ['name' => 'Marketing-PR'],
            ['name' => 'Mỹ phẩm-Trang sức'],
            ['name' => 'Ngân hàng'],
            ['name' => 'Ngành nghề khác'],
            ['name' => 'Nghệ thuật - Điện ảnh'],
            ['name' => 'Người giúp việc'],
            ['name' => 'Nhân sự'],
            ['name' => 'Nhân viên kinh doanh'],
            ['name' => 'Nông-Lâm-Ngư nghiệp'],
            ['name' => 'NV trông quán Internet'],
            ['name' => 'Promotion Girl (PG)'],
            ['name' => 'Quan hệ đối ngoại'],
            ['name' => 'Quản trị kinh doan'],
            ['name' => 'Sinh viên làm thêm'],
            ['name' => 'Thực phẩm-Đồ uống'],
            ['name' => 'Thiết kế đồ hoạ web'],
            ['name' => 'Thiết kế-Mỹ thuật'],
            ['name' => 'Thời trang'],
            ['name' => 'Thủ công mỹ nghệ'],
            ['name' => 'Thư ký-Trợ lý'],
            ['name' => 'Thực tập'],
            ['name' => 'Thương mại điện tử'],
            ['name' => 'Tiếp thị-Quảng cáo'],
            ['name' => 'Tổ chức sự kiện-Quà tặng'],
            ['name' => 'Tư vấn'],
            ['name' => 'Vận tải - Lái xe'],
            ['name' => 'Vật tư-Thiết bị'],
            ['name' => 'Xuất, nhập khẩu']
        ];

        Job::insert($jobs);
    }

}