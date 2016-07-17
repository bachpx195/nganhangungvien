<?php

namespace App\Libs;

class Constants
{
    //Active sidebar menu
    const DASHBOARD = 'dashboard';
    const CANDIDATE = 'candidate';
    const EMPLOYER = 'employer';
    const NEWS = 'news';
    const USER = 'user';
    const CONFIG = 'config';
    const DATASYSTEM = 'datasystem';
    const VIDEO = 'video';

    const ROLE_ADMIN = "ADMIN";
    const ROLE_SUPER = "SUPER_ADMIN";

    const USER_TYPE_ADMIN = "admin";

    // Configuration
    const CONFIG_YOUTUBE = 'LINK_YOUTUBE';

    const CONFIG_YOUTUBE_CHANEL = 'LINK_YOUTUBE_CHANEL';
    const CONFIG_POLICY = 'POLICY';

    const CONFIG_POLICY = 'POLICY';

    // config expire vip interval month, default = 2 month
    const CONFIG_EXPIRE_VIP = 'EXPIRE_VIP';
    const CONFIG_EXPIRE_VIP_DEFAULT = 2;

    //Page title = PT
    const CANDIDATE_NEW_PT = 'Tạo mới hồ sơ ứng viên';
    const CANDIDATE_LIST_PT = 'Quản lý hồ sơ ứng viên';
    //config
    const CONFIG_NEW_PT = 'Tạo mới cấu hình hệ thống';
    const CONFIG_LIST_PT = 'Quản lý cấu hình hệ thống';

    const EMPLOYER_LIST = 'Quản lý nhà tuyển dụng';
    const EMPLOYER_DETAIL = 'Chi tiết nhà tuyển dụng';

    const TRANSACTION_LIST = "Quản lý lịch sử giao dịch";

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
    const NEWS_UPDATE_PT = 'Cập nhật tin tức';

    const CANDIDATE_UPDATE_PT = 'Cập nhật hồ sơ ứng viên';

    const EMPLOYMENTSTATUS_NEW_PT = 'Tạo mới hình thức làm việc';
    const EMPLOYMENTSTATUS_LIST_PT = 'Quản lý hình thức làm việc';

    const FOREIGNLANGUAGE_NEW_PT = 'Tạo mới ngoại ngữ';
    const FOREIGNLANGUAGE_LIST_PT = 'Quản lý ngoại ngữ';

    const USER_LIST = "Danh sách người dùng";
    const USER_FORM = "Cập nhật thông tin người dùng";
    const USER_FORM_ADD = "Thêm mới người dùng";

    const ROLE_LIST = "Danh sách quyền";
    const ROLE_FORM_ADD = "Thêm mới quyền";
    const ROLE_FORM_UPDATE = "Cập nhật thông tin quyền";

    const PERMISSION_LIST = "Danh sách phân quyền";
    const PERMISSION_UPDATE = "Phân quyền cho người dùng";

    // define payment type
    const PAYMENT_TYPE_CARD = 1;
    const PAYMENT_TYPE_ATM = 2;
    const PAYMENT_TYPE_VIEW_CANDIDATE = 3;

    public static $PAYMENT_TYPE = array(
        Constants::PAYMENT_TYPE_CARD => 'Nạp tiền qua thẻ',
        Constants::PAYMENT_TYPE_ATM => 'Nạp tiền qua ATM',
        Constants::PAYMENT_TYPE_VIEW_CANDIDATE => 'Trừ tiền khi xem ứng viên'
    );

    /*
     * Type of transaction
     */
    public static $TRANSACTION_TYPES = array(
        'RECHARGE' => 1,
        'WITHDRAWAL' => 2
    );

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

    const CHARGE_RATE = 80;
}
