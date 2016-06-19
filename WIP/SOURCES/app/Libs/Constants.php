<?php

namespace App\Libs;

class Constants {
    //Active sidebar menu
    const DASHBOARD = 'dashboard';
    const CANDIDATE = 'candidate';
    const EMPLOYER  = 'employer';
    const NEWS      = 'news';
    const USER      = 'user';
    const CONFIG    = 'config';
    const DATASYSTEM    = 'datasystem';
    const VIDEO     = 'video';

    // Configuration
    const CONFIG_YOUTUBE = 'LINK_YOUTUBE';

    //Page title = PT
    const CANDIDATE_NEW_PT = 'Tạo mới hồ sơ ứng viên';
    const CANDIDATE_LIST_PT = 'Quản lý hồ sơ ứng viên';
    //config
    const CONFIG_NEW_PT = 'Tạo mới cấu hình hệ thống';
    const CONFIG_LIST_PT = 'Quản lý cấu hình hệ thống';

    const EMPLOYER_LIST = 'Quản lý nhà tuyển dụng';
    const EMPLOYER_DETAIL = 'Chi tiết nhà tuyển dụng';


    const PROVINCE_NEW_PT = 'Tạo mới tỉnh/thành phố';
    const PROVINCE_LIST_PT = 'Quản lý tỉnh/thành phố';

    const SALARY_NEW_PT = 'Tạo mới mức lương';
    const SALARY_LIST_PT = 'Quản lý lương';

    const JOB_NEW_PT = 'Tạo mới nghề nghiệp';
    const JOB_LIST_PT = 'Quản lý nghề nghiệp';

    const LEVEL_NEW_PT = 'Tạo mới trình độ';
    const LEVEL_LIST_PT = 'Quản lý trình độ';

    const RANK_NEW_PT = 'Tạo mới cấp bậc';
    const RANK_LIST_PT = 'Quản lý cấp bậc';

    const EXIGENCY_NEW_PT = 'Tạo mới nhu cầu công việc';
    const EXIGENCY_LIST_PT = 'Quản lý nhu cầu công việc';

    const COMPANYSIZE_NEW_PT = 'Tạo mới quy mô công ty';
    const COMPANYSIZE_LIST_PT = 'Quản lý quy mô công ty';

    const EXPERIECEYEARS_NEW_PT = 'Tạo mới kinh nghiệm';
    const EXPERIECEYEARS_LIST_PT = 'Quản lý kinh nghiệm';

    const NEWS_NEW_PT = 'Tạo mới tin tức';
    const NEWS_LIST_PT = 'Quản lý tin tức';

    const CANDIDATE_UPDATE_PT = 'Cập nhật hồ sơ ứng viên';

    const EMPLOYMENTSTATUS_NEW_PT = 'Tạo mới hình thức làm việc';
    const EMPLOYMENTSTATUS_LIST_PT = 'Quản lý hình thức làm việc';

    const FOREIGNLANGUAGE_NEW_PT = 'Tạo mới ngoại ngữ';
    const FOREIGNLANGUAGE_LIST_PT = 'Quản lý ngoại ngữ';

    /*
     * Config of BAOKIM gateway
     */
    public static $BAO_KIM = array(
        'gateway' => 'BaoKim',
        'merchant_id' => '',
        'secure_pass' => '',
        'api_password' => '',
        'api_username' => ''
    );

    const GOOGLE_DOC_PATH = 'https://docs.google.com/viewer';
}
