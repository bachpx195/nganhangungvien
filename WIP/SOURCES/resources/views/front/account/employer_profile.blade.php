@extends('front/global')
<style type="text/css">
    .list-items .fwb {
        font-weight: bold;
    }

    #select-data {
        padding-left: 0px;
    }

    .title_text_line span {
        color: #00549F;
    }

    #popup_change_password, #popup_change_company_info, #popup_change_contact_person {
        -moz-box-align: center;
        -moz-box-pack: center;
        background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
        border-radius: 2px;
        display: none;
        height: auto;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
    }
</style>
@section('content')
<div class="container-fluid nopadding">
    <div class="pos_relative content_body">
        <div class="content_cols-right pt_16 pl_24 pb_24">
            <h3 class="title_text_line mt_24 mb_8 ml_12 mr_12 uppercase">
                <span class="fwb txt-color-363636 fs20">Thông tin tài khoản</span>
            </h3>
            <div class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12">
                <div class="w_100">
                    <div class="box_info font14">
                        <div class="pull-left w_100">
                            <div class="list-items mb_0 mb_10 mt_4">
                                <img src="/assets/default/images/not-verify.png" alt="Ngân hàng ứng viên"
                                     title="Ngân hàng ứng viên"
                                     width="150"/></div>
                            <div class="list-items mb_0">
                                <span class="fwb">Email: </span>{{ $employer->userEmail }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Mật khẩu: </span>********
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Số dư tài khoản: </span>{{ number_format($employer->balance) }} VNĐ
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-items fc-btn-edit">
                            <button id="btnChangePassword"
                                    class="btn btn-white no-shadow btn-xs font14 pr_12 pl_6 mt_10 show_popup_s33_3">
                            <span class="line-icon text_grey3">
                                <i class="icon-24 icon_24 icon-pencil pos_absolute"></i> <span
                                        class="pl_28"> Đổi mật khẩu</span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="title_text_line mt_24 mb_8 ml_12 mr_12 uppercase">
                <span class="fwb txt-color-363636 fs20">Thông tin công ty</span>
            </h3>
            <div class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12">
                <div class="w_100">
                    <div class="box_info font14">
                        <div class="pull-left w_100" id="employer_company_information_content">
                            <div class="list-items mb_0">
                                <span class="fwb">Tên công ty: </span>{{ $employer->company_name }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Quy mô công ty: </span>{{ $employer->companySize }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Địa chỉ công ty: </span>{{ $employer->company_address }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Tỉnh/thành phố: </span>{{ $employer->provinceName }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Điện thoại cố định: </span>{{ $employer->phone }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Website: </span>{{ $employer->website }}
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Giới thiệu về công ty:</span>
                            </div>
                            <div class="list-items mb_0">
                                {{ $employer->company_description }}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-items fc-btn-edit">
                            <button id="btnChangeCompanyInfo"
                                    class="btn btn-white no-shadow btn-xs font14 pr_12 pl_6 mt_10 show_popup_s33_4">
                            <span class="line-icon text_grey3">
                                <i class="icon-24 icon_24 icon-pencil pos_absolute"></i> <span class="pl_28"> Chỉnh sửa</span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="title_text_line mt_24 mb_8 ml_12 mr_12 uppercase">
                <span class="fwb txt-color-363636 fs20">Thông tin chủ tài khoản</span>
            </h3>
            <div class="box_tab bg_white box_shadow pt_12 pl_14 pr_14 pb_16 ml_12 mr_12">
                <div class="w_100">
                    <div class="box_info chu_tai_khoan font14">
                        <div class="pull-left w_100" id="employer_contact_person_content">
                            <div class="list-items mb_0">
                                <span class="fwb">Tên người liên hệ: </span><span
                                        class="name"> {{ $employer->contact_person }}</span>
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Số điện thoại liên hệ: </span><span
                                        class="tel"> {{ $employer->contact_phone }}</span>
                            </div>
                            <div class="list-items mb_0">
                                <span class="fwb">Email liên hệ: </span><span
                                        class="email"> {{ $employer->contact_email }}</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-items fc-btn-edit">
                            <button id="btnChangeContactPerson"
                                    class="btn btn-white no-shadow btn-xs font14 pr_12 pl_6 mt_10 show_popup_s33_5">
                            <span class="line-icon text_grey3">
                                <i class="icon-24 icon_24 icon-pencil pos_absolute"></i> <span class="pl_28"> Chỉnh sửa</span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Popup change password-->
    <div class="popup_change_password" hidden="hidden" id="popup_change_password">
        @include('front.account.popup_change_user_password')
    </div>
    <!-- Popup change company information -->
    <div class="popup_change_company_info" id="popup_change_company_info" hidden="hidden">
        @include('front.account.popup_change_company_info')
    </div>
    <!-- Popup change contact person information-->
    <div class="popup_change_contact_person" id="popup_change_contact_person" hidden="hidden">
        @include('front.account.popup_change_contact_person')
    </div>
</div>
<!-- template popup -->
<div class="popup_template_company_info" id="popup_template_company_info" hidden="hidden">
    @include('front.account.template.template_change_company_info')
</div>
<div class="popup_template_contact_person" id="popup_template_contact_person" hidden="hidden">
    @include('front.account.template.template_change_contact_person')
</div>
<!-- javascript function -->
@include('front.account.employer_profile_js')
@endsection
