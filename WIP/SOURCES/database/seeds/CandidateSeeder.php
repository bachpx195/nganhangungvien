<?php

use Illuminate\Database\Seeder;
use App\Model\Candidate;

class CandidateSeeder extends Seeder {
	
	public function run() 
	{
		DB::table('candidate')->delete();
		
		// Manager
		Candidate::insert([
			'Full_name' => 'Liêu Anh Khoa',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'Experience_years' => '1',
			'email' => '1@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Trịnh Thị Bích Hạnh',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'Experience_years' => '4',
			'email' => '2@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Nguyễn Hữu Chiến',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'email' => '3@mail.com',
			'Experience_years' => '3',
		]);
		Candidate::insert([
			'Full_name' => 'Ngô Tấn Bình',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '5',
			'email' => '4@mail.com',
			'Experience_years' => '4',
		]);
		Candidate::insert([
			'Full_name' => 'Dương Tiến Dũng',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '5',
			'Experience_years' => '4',
			'email' => '5@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Nguyễn Văn Thắng',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'Experience_years' => '7',
			'email' => '6@mail.com',
		]);
		Candidate::insert([
			'Full_name' => 'Đào Thị Thúy',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '6',
			'Experience_years' => '6',
			'email' => '7@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Trần Bá Vương',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'Experience_years' => '2',
			'email' => '8@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Ngô Thị Ánh Hồng',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '3',
			'Experience_years' => '1',
			'email' => '9@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Vũ Thị Thùy Trang',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'Experience_years' => '4',
			'email' => '10@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Vương Nhất Toàn',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'Experience_years' => '8',
			'email' => '11@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Võ Yến Nhi',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '5',
			'email' => '12@mail.com',
			'Experience_years' => '4',
		]);
		Candidate::insert([
			'Full_name' => 'Nguyễn Thị Thanh Tuyền',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '3',
			'email' => '13@mail.com',
			'Experience_years' => '5',
		]);
		Candidate::insert([
			'Full_name' => 'Trần Văn Đạt',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'Experience_years' => '2',
			'email' => '14@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Nguyễn Thị Hồng Hạnh',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'Experience_years' => '1',
			'email' => '15@mail.com'
		]);

		Candidate::insert([
			'Full_name' => 'Lưu Tiến Tuấn',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'Experience_years' => '5',
			'email' => '16@mail.com'
		]);
		Candidate::insert([
			'Full_name' => 'Huỳnh Thanh Hiếu',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'email' => '17@mail.com',
			'Experience_years' => '8',
		]);
		Candidate::insert([
			'Full_name' => 'Hồ Văn Ba',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '1',
			'email' => '18@mail.com',
			'Experience_years' => '2',
		]);
		Candidate::insert([
			'Full_name' => 'Trần Nguyễn Quỳnh Như',
			'updated_at' => '11/05/2016',
			'Expect_salary' => '4',
			'email' => '19@mail.com',
			'Experience_years' => '2',
		]);
	}
	
}