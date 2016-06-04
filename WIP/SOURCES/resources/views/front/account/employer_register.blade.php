@extends('front/global')

@section('content')
    @if (!empty($employer['email_errors']))
        <div class="block-note-ths">
            <div class="pos-dang-ky-hotline">
                {{ $employer['email_errors'] }}
                <div class="ln_hr"></div>
            </div>
        </div>
    @endif


    <div class="content_dangky w800 bg_white mt16 box_shadow">
        <div class="block_ntv_dangky regis_header h_56" id="regis_header">
            <div class="w_50 floatLeft">
                <span class="title_ntd_dky "></span><span
                        class="uppercase bold fs16 color_ntd_dky">Nhà Tuyển dụng Đăng ký</span>
            </div>
            <div class="w_50 floatLeft block-right-ntv txr">
			<span class="text-co-tai-khoan">Bạn đã có tài khoản? <a
                        href="javascript:void(0)" class="text-dang-nhap underline">Đăng nhập</a></span>
            </div>
        </div>
        <div class="regis_content_1 w800">
            <div class="block-pop-dangky  pr0" id="regis_content">

                <div class="block-content" id="frm-login-info">
                    <div class="mb8">
                        <div class="center-p12p24 ">
                            <form id="form_register" class="form-horizontal"
                                  enctype="multipart/form-data" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
                                    <div class="clear mb_14">
                                        <span class="title_info_login_ntd "></span><span
                                                class="fwb txt-color-363636 fs20">Thông tin đăng nhập</span>
                                    </div>
                                    <div class="require_info clearfix mb_10 italic">
                                        (<span class="colorRed">*</span>) Thông tin bắt buộc nhập
                                    </div>
                                    <!-- input email -->
                                    <div class="form-group clearfix mb_14">
                                        <label for="email"
                                               class="control-label-info bold txt-color-363636 fs14 w180">
                                            Email <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="email" class="form-control input-lg2 color-input"
                                                   id="email" name="email" required
                                                   data-required-msg="Vui lòng nhập email"
                                                   placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                                                   value="{!! old('email') !!}">
                                        </div>
                                    </div>

                                    <!-- input password -->
                                    <div class="form-group mb_14">
                                        <label for="password"
                                               class="control-label-info bold txt-color-363636 fs14 w180">Mật
                                            khẩu <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333">
                                            <input type="password"
                                                   class="form-control input-lg2 color-input" id="password"
                                                   name="password"
                                                   required data-required-msg="Vui lòng nhập mật khẩu"/>
                                        </div>
                                    </div>
                                    <!-- input repassword -->
                                    <div class="form-group mb_14">
                                        <label for="retype_password"
                                               class="control-label-info bold txt-color-363636 fs14 w180">Xác
                                            nhận lại mật khẩu <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333">
                                            <input type="password"
                                                   class="form-control input-lg2 color-input"
                                                   id="retype_password" name="retype_password"
                                                   required data-required-msg="Vui lòng nhập xác nhận mật khẩu"
                                                   data-matches="#password"
                                                   data-matches-msg="Xác nhận mật khẩu không đúng"/>
                                        </div>
                                    </div>
                                    <div class="form-group mb_14">
                                        <label for="fullname"
                                               class="control-label-info bold txt-color-363636 fs14 w180">
                                            Họ và tên <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   id="fullname" name="fullname" required
                                                   data-required-msg="Vui lòng nhập họ tên">
                                        </div>
                                    </div>
                                </div>
                                <div id="block-thong-tin-ca-nhan" class="mb_22">
                                    <div class="clear mb_18">
                                        <span class="title_info_login_ntd "></span><span
                                                class="fwb txt-ghi fs20">Thông tin công ty</span>
                                    </div>
                                    <!-- input Tên công ty  * -->
                                    <div class="form-group clearfix mb_12">
                                        <label for="company_name"
                                               class="control-label-info bold txt-color-363636 fs14 w180">
                                            Tên công ty <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   id="company_name" name="company_name"
                                                   placeholder="Ví dụ: Công Ty Cổ Phần Giải Pháp Tuyển Dụng Thuê Ngoài Việt Nam"
                                                   required
                                                   data-required-msg="Ghi tên công ty đầy đủ và rõ ràng theo Giấy phép đăng ký kinh doanh">
                                        </div>
                                    </div>

                                    <!-- input Quy mô công ty -->
                                    <div class="form-group mb_14">
                                        <label for="company_size"
                                               class="control-label-info bold txt-color-363636 fs14 w180">
                                            Quy mô công ty <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333 select_style31 city_select">
                                            <div
                                                    class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                <select id="company_size" name="company_size"
                                                        class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style"
                                                        required data-required-msg="Vui lòng chọn quy mô công ty">
                                                    <option value="">Chọn Quy mô công ty</option>
                                                    <option value="1">Ít hơn 10 nhân viên</option>
                                                    <option value="6">Từ 10 - 24 nhân viên</option>
                                                    <option value="2">Từ 25 - 99 nhân viên</option>
                                                    <option value="3">Từ 100 - 499 nhân viên</option>
                                                    <option value="4">Từ 500 - 999 nhân viên</option>
                                                    <option value="5">Trên 1000 nhân viên</option>
                                                </select>
                                            </div>
                                            <span data-for='company_size' class='k-invalid-msg'></span>
                                        </div>
                                    </div>

                                    <!-- input tel_co_dinh -->
                                    <div class="form-group mb_8">
                                        <label for="phone"
                                               class="control-label-info bold txt-color-363636 fs14 w180">Điện
                                            thoại cố định <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   id="phone" name="phone"
                                                   required data-required-msg="Vui lòng nhập số điện thoại cố định"
                                                   pattern="[0-9]{8,13}"
                                                   required
                                                   data-pattern-msg="Vui lòng nhập số điện thoại đúng định đạng (Từ 8 đến 13 chữ số)"/>
                                        </div>
                                    </div>

                                    <!-- input company_info -->
                                    <div class="form-group mb_16">
                                        <label for="company_description"
                                               class="control-label-info bold txt-color-363636 fs14 w180">Giới
                                            thiệu về công ty <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
										<textarea
                                                class="form-control p14 inputTextArea txt-color-757575"
                                                id="company_description" name="company_description"
                                                placeholder="Hãy cung cấp những thông tin cơ bản như: năm thành lập, ngành nghề hoạt động chính, thành tựu đã đạt được, đính hướng phát triển tương lai..."
                                                required data-required-msg="Vui lòng nhập giới thiệu về công ty"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <!-- input company_address -->
                                    <div class="form-group">
                                        <label for="company_address"
                                               class="control-label-info bold txt-color-363636 fs14 w180">Địa
                                            chỉ công ty <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   id="company_address" name="company_address"
                                                   placeholder="Ví dụ: Số nhà 98A, phố Ngụy Như Kon Tum, phường Nhân Chính , quận Thanh Xuân"
                                                   required
                                                   data-required-msg="Vui lòng nhập chi tiết địa chỉ của bạn bằng tiếng Việt có dấu."/>
                                        </div>
                                    </div>
                                    <!-- input Tỉnh/thành phố * -->
                                    <div class="form-group mb_16">
                                        <label for="province_id"
                                               class="control-label-info bold txt-ghi fs14 w180">Tỉnh/thành
                                            phố <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333 select_style31 city_select">
                                            <div
                                                    class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                <select id="province_id" name="province_id"
                                                        class="tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style"
                                                        tabindex="-1"
                                                        required data-required-msg="Vui lòng chọn tỉnh thành">
                                                    <option value="">Chọn Tỉnh thành</option>
                                                    @foreach($provinces as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- input website -->
                                    <div class="form-group mb1 input-phone">
                                        <label for="website"
                                               class="control-label-info bold txt-ghi fs14 w180">Website </label>
                                        <div class="fr-input-wd333">
                                            <input type="text" class="form-control input-lg2 color-input"
                                                   id="website" name="website"/>
                                        </div>
                                    </div>


                                </div>

                                <div id="block-thong-tin-quan-tam" class="mb_16 pt_6">
                                    <div class="clear mb_20">
                                        <span class="title_info_login_ntd "></span><span
                                                class="fwb txt-color-363636 fs20">Thông tin chủ tài khoản</span>
                                    </div>

                                    <!-- input Tên người liên hệ -->
                                    <div class="form-group mb1 input-phone mb_10">
                                        <label for="contact_person"
                                               class="control-label-info bold txt-ghi fs14 w180">Tên người
                                            liên hệ <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583">
                                            <input type="text" name="contact_person"
                                                   class="form-control input-lg2 color-input" id="contact_person"
                                                   required data-required-msg="Vui lòng nhập tên người liên hệ"/>
                                        </div>
                                    </div>
                                    <!-- input phone -->
                                    <!--<input type="hidden" class="form-control input-lg2 color-input"
                                           id="phones" name="phones">-->
                                    <div class="dien-thoai-lien-he form-group mb1 input-phone mb_6">
                                        <label for="contact_phone"
                                               class="control-label-info bold txt-ghi fs14 w180">Số điện
                                            thoại liên hệ <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333">
                                            <input type="text" class="form-control input-lg2 color-input phone_txt"
                                                   name="contact_phone"
                                                   required data-required-msg="Vui lòng nhập số điện thoại liên hệ"
                                                   pattern="[0-9]{8,13}"
                                                   required
                                                   data-pattern-msg="Vui lòng nhập số điện thoại đúng định đạng (Từ 8 đến 13 chữ số)"/>
                                        </div>
                                    </div>
                                    <!--<div class="form-group mb_10" id="add_tel_contact">
                                        <label class="control-label-checkbox w180"></label>
                                        <div class="fr-input-wd333">
                                            <span class="color_add_tel fs14 cursor_pointer" id="addPhone">
                                                <span class="add_tel_692095"></span>Thêm Số điện thoại
                                            </span>
                                        </div>
                                    </div>-->

                                    <!-- input Email liên hệ -->
                                    <div class="form-group mb_10">
                                        <label for="contact_email"
                                               class="control-label-info bold txt-ghi fs14 w180"> Email liên
                                            hệ <span class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333">
                                            <input type="email" class="form-control input-lg2 color-input"
                                                   id="contact_email" name="contact_email"
                                                   required data-required-msg="Vui lòng nhập email người liên hệ"/>
                                        </div>
                                    </div>
                                    <div class="mb_16">
                                        <div class="line-break02"></div>
                                    </div>
                                    <!-- input Nhập mã bảo mật * -->
                                    <div class="form-group mb_20">
                                        <label for="captcha"
                                               class="control-label-info bold txt-ghi fs14 w185">Nhập mã bảo
                                            mật <span class="colorRed">*</span>
                                        </label>
                                        <div class="register_fr_input_wd583 w390 pl_10">
                                            <div class="img_security_code floatLeft">
                                                {!! captcha_image_html('RegisterCaptcha') !!}
                                            </div>
                                            <!--<div class="img_security_code floatLeft"></div>-->
                                            <div class="fr-input-wd333 w263 ">
                                                <input type="text" class="form-control input-lg2 color-input"
                                                       id="CaptchaCode" name="CaptchaCode"
                                                       required data-required-msg="Vui lòng nhập mã bảo mật"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb_12">
                                        <label class="control-label-info w185"></label>
                                        <div class="fr-input-wd333 floatLeft pl_10">
                                            <button type="button" id="btnRegister"
                                                    class="btn bold btnRegisterNTD w153 fwb uppercase fs16">Đăng
                                                Ký
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
