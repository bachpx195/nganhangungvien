<?php

use Illuminate\Database\Seeder;
use App\Model\ForeignLanguage;

class ForeignLanguageSeeder extends Seeder {

    public function run()
    {
        DB::table('foreign_language')->delete();

        $foreignLanguages = [
            ['name' => 'Tiếng Anh – Tiếng Đức'],
            ['name' => 'Tiếng Anh - Tiếng Nga'],
            ['name' => 'Tiếng Anh – Tiếng Ý'],
            ['name' => 'Tiếng Anh – Tiếng Tây Ban Nha'],
            ['name' => 'English - Tiếng Anh'],
            ['name' => 'French - Tiếng Pháp'],
            ['name' => 'United States - Tiếng Anh Mỹ'],
            ['name' => 'Russian - Tiếng Nga'],
            ['name' => 'Korean - Tiếng Hàn'],
            ['name' => 'Japanese - Tiếng Nhật'],
            ['name' => 'German - Tiếng Đức'],
            ['name' => 'Arabic - Tiếng Ả Rập'],
            ['name' => 'Bengalic - Tiếng Bengal'],
            ['name' => 'Bulgarian - Tiếng Bungary'],
            ['name' => 'Burmese - Tiếng Miến điện'],
            ['name' => 'Cambodian - Tiếng Campuchia'],
            ['name' => 'Czech  - Tiếng Séc'],
            ['name' => 'Danmark - Tiếng Đan mạch'],
            ['name' => 'Dutch - Tiếng Hà Lan'],
            ['name' => 'Finnish - Tiếng phần Lan'],
            ['name' => 'Greek - Tiếng Hy Lạp'],
            ['name' => 'Hindi - Tiếng Hinđi'],
            ['name' => 'Hungarian - Tiếng Hungary'],
            ['name' => 'Indonesian - Tiếng Inđônesia'],
            ['name' => 'Italian - Tiếng Ý'],
            ['name' => 'Laotian - Tiếng Lào'],
            ['name' => 'Malay - Tiếng Mã Lai'],
            ['name' => 'Norwegian - Tiếng Nauy'],
            ['name' => 'Polish - Tiếng Ba Lan'],
            ['name' => 'Portuguese - Tiếng Bồ Đào Nha'],
            ['name' => 'Romanian  - Tiếng Ru ma ni'],
            ['name' => 'Spanish - Tiếng Tây Ban Nha'],
            ['name' => 'Taiwanese - Tiếng Đài Loan'],
            ['name' => 'Turkish - Tiếng Thổ Nhĩ Kỳ'],
            ['name' => 'Thai - Tiếng Thái'],
            ['name' => 'Ukrainian - Tiếng Ucraina']
        ];

        ForeignLanguage::insert($foreignLanguages);
    }

}