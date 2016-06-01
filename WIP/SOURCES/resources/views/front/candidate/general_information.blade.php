<div class="box-child-ths">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_init" value="1">
    <!---Thoong tin dang ky -->
    <div class="block-pop-dangky">
        <div id="block-thong-tin-dang-nhap" class="mb_30 pt_6">
            <div class="head-box-child-ths">
                <span class="uppercase bold text-tim-nhat">THÔNG TIN TỔNG QUAN</span>
                <span class="required_l">(bắt buộc)</span>
                <span class="required_r">(<label>*</label>)Thông tin bắt buộc nhập</span>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="ln_hr_head"></div>
            </div>

            <div class="clearfix"></div>
            <!-- input email -->
            <div class="body-box-child-ths pb16 mt16">
                <div class="form-group clearfix mb_16">
                    <label for="cv_title" class="control-label-info bold txt-color-363636 fs14 w180">
                        Tiêu đề hồ sơ <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <input type="text" class="form-control input-lg2 color-input" id="cv_title"
                               name="cv_title" placeholder="Ví dụ: Nhân viên chăm sóc khách hàng - vận hành game"
                                value="{{$candidate['cv_title']}}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none"
                         data-name="cv_title">
                        Vui lòng nhập tiêu đề hồ sơ đúng để NTD liên hệ được với bạn
                    </div>
                </div>


                <div class="form-group clearfix mb_16">
                    <label for="email" class="control-label-info bold txt-color-363636 fs14 w180">
                        Email <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <input type="text" class="form-control input-lg2 color-input" id="email"
                               name="email" placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                               value="{{$candidate['email']}}">
                    </div>
                    @include('front.common.form_error', array('fieldName' => 'email'))
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="email">
                        Vui lòng nhập địa chỉ email đúng để NTD liên hệ được với bạn</div>
                </div>

                <!-- input Họ và Tên * -->
                <div class="form-group clearfix mb_16">
                    <label for="full_name" class="control-label-info bold txt-color-363636 fs14 w180">
                        Họ và Tên <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <input type="text" class="form-control input-lg2 color-input" id="full_name" name="full_name"
                               placeholder="Ví dụ: Nguyễn Văn A , Trần Thị B."
                               value="{{ $candidate['full_name'] }}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="full_name">
                        Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu.</div>
                </div>

                <!-- input Giới tính -->
                <div class="form-group clearfix mb_16">
                    <label class="control-label-checkbox bold txt-color-363636 fs14 w180">
                        Giới tính <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <div class="demo-list-green mr_24 sex-lable">
                            <input tabindex="1" type="radio" name="sex" value="0" id="ml_0"
                                   @if ($candidate['sex'] != 1) checked @endif>
                            <label for="ml_0" class="font14 fwn">Nữ</label>
                        </div>
                        <div class="demo-list-green  sex-lable">
                            <input tabindex="1" type="radio" name="sex" value="1" id="ml_1"
                                   @if ($candidate['sex'] == 1) checked @endif>
                            <label for="ml_1" class="font14 fwn">Nam</label>
                        </div>
                    </div>
                </div>
                <!-- input Tình trạng hôn nhân -->
                <div class="form-group clearfix mb_18">
                    <label class="control-label-checkbox bold txt-color-363636 fs14 w180">
                        Tình trạng hôn nhân<span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583 ">
                        <div class="demo-list-green mr_24 sex-lable">
                            <input tabindex="2" type="radio" name="is_married" id="tthn_0" value="0"
                                   @if ($candidate['is_married'] != 1) checked @endif>
                            <label for="tthn_0" class="font14 fwn">Độc thân</label>
                        </div>
                        <div class="demo-list-green mr_24 sex-lable">
                            <input tabindex="2" type="radio" name="is_married" id="tthn_1"  value="1"
                                   @if ($candidate['is_married'] == 1) checked @endif>
                            <label for="tthn_1" class="font14 fwn">Đã có gia đình</label>
                        </div>
                    </div>
                </div>

                <!-- input birthday -->
                <div class="form-group mb_16">
                    <label for="birthday" class="control-label-info bold txt-color-363636 fs14 w180">
                        Ngày sinh <span class="colorRed">*</span></label>
                    <div class="register_fr_input_wd583 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                            <select id="birthday" name="birthday_day" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                @include('front.common.day_options', array('selected' => $candidate['birthday_day']))
                            </select>
                        </div>
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                            <select id="thang_sinh" name="birthday_month" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                @include('front.common.month_options', array('selected' => $candidate['birthday_month']))
                            </select>
                        </div>
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                            <select id="nam_sinh" name="birthday_year" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                @include('front.common.year_options', array('selected' => $candidate['birthday_year']))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="birthday">
                        Vui lòng ngày, tháng, năm sinh.</div>
                </div>

                <div class="form-group mb1 input-phone">
                    <label for="phone_number" class="control-label-info bold txt-color-363636 fs14 w180">Số điện thoại <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333">
                        <input type="text" class="form-control input-lg2 color-input" id="phone" name="phone_number" placeholder="Ví dụ: 0942465168"
                               value="{{ $candidate['phone_number'] }}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="phone_number">
                        Vui lòng nhập vào số điện thoại.</div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="c_chuc_vu"
                           class="control-label-info bold txt-ghi fs14 w180">Cấp
                        bậc hiện tại <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_chuc_vu_hien_tai"
                                    name="current_rank"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    tabindex="-1" data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['current_rank'],
                                        'options' => $ranks,
                                        'defaultName' => 'Chọn cấp bậc'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="current_rank">
                        Vui lòng chọn cấp bậc hiện tại.</div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="c_chuc_vu"
                           class="control-label-info bold txt-ghi fs14 w180">Cấp
                        bậc mong muốn <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_chuc_vu"
                                    name="expect_rank"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    tabindex="-1" data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['expect_rank'],
                                        'options' => $ranks,
                                        'defaultName' => 'Chọn cấp bậc'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="expect_rank">
                        Vui lòng chọn cấp bậc mong muốn.</div>
                </div>
                <div class="clearfix"></div>
                <!-- input Ngành nghề quan tâm -->
                <div class="form-group mt_16">
                    <label class="control-label-info bold txt-ghi fs14 w180 lineheight_24">
                        Ngành nghề <span class="colorRed">*</span>
                    </label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="fk_tinh" name="job"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg them_nganhnghe"
                                    tabindex="-1">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['job'],
                                        'options' => $job,
                                        'defaultName' => 'Chọn Ngành nghề'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="job">
                        Vui lòng chọn cấp bậc mong muốn.</div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label class="control-label-info bold txt-ghi fs14 w180 lineheight_24">
                        Tỉnh thành <span class="colorRed">*</span>
                    </label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="fk_tinh" name="province_id"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg them_nganhnghe"
                                    tabindex="-1">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['province_id'],
                                        'options' => $provinces,
                                        'defaultName' => 'Chọn Tỉnh thành'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="province_id">
                        Vui lòng nhập chọn tỉnh thành..</div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_8">
                    <label for="level"
                           class="control-label-info bold txt-ghi fs14 w180">Trình
                        độ học vấn cao nhất<span
                                class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_trinh_do_hv" name="level"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    tabindex="-1" data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['level'],
                                        'options' => $levels,
                                        'defaultName' => 'Chọn Trình độ học vấn cao nhất'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="level">
                        Vui lòng chọn trình độ học vấn.</div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="experience_years"
                           class="control-label-info bold txt-ghi fs14 w180">Tổng
                        số năm kinh nghiệm <span
                                class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_so_nam_kinh_nghiem"
                                    name="experience_years"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    tabindex="-1" data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['experience_years'],
                                        'options' => $experienceYears,
                                        'defaultName' => 'Chọn Kinh nghiệm'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="experience_years">
                        Vui lòng chọn số năm kinh nghiệm.</div>
                </div>

                <!-- input Hình thức làm việc -->
                <div class="form-group mt_16">
                    <label for="employment_status"
                           class="control-label-info bold txt-ghi fs14 w180">
                        Hình thức làm việc <span class="colorRed">*</span>
                    </label>

                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_thoi_gian_lam_viec"
                                    name="employment_status"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['employment_status'],
                                        'options' => $employmentStatuses,
                                        'defaultName' => 'Chọn hình thức làm việc'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="employment_status">
                        Vui lòng chọn hình thực làm việc.</div>
                </div>
                <div class="clearfix"></div>
                <!-- input Mức lương mong muốn -->

                <div class="form-group mt_16">
                    <label for="expect_salary"
                           class="control-label-info bold txt-ghi fs14 w180">
                        Mức lương mong muốn <span class="colorRed">*</span>
                    </label>

                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="c_muc_luong" name="expect_salary"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg select_box2"
                                    data-disS="1"
                                    data-select-class="tinh_thanh_reg">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['expect_salary'],
                                        'options' => $salaries,
                                        'defaultName' => 'Chọn Mức lương'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="expect_salary">
                        Vui lòng chọn số lương mong muốn.</div>
                </div>

                <div class="form-group mt_16">
                    <label for="exigency"
                           class="control-label-info bold txt-ghi fs14 w180 lineheight_24">Nhu cầu công việc <span class="colorRed">*</span><span
                                class="note_title_form italic font12 text_grey3 mt_a6 pt_4"></span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select id="fk_tinh" name="exigency"
                                    class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg them_nganhnghe"
                                    tabindex="-1">
                                @include('front.common.options',
                                    array(
                                        'selected' => isset($candidate['exigency']) ? $candidate['exigency'] : '',
                                        'options' => $exigencies,
                                        'defaultName' => 'Chọn nhu cầu làm việc'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="exigency">
                        Vui lòng chọn nhu cầu công việc.</div>
                </div>
                <div class="clearfix"></div>

                <div class="form-group mt_16">
                    <label for="job_goal"
                           class="control-label-info bold txt-ghi fs14 w180">
                        Mục tiêu nghề nghiệp <span class="colorRed">*</span>
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <textarea name="job_goal"
                                  id="c_muc_tieu_nghe_nghiep"
                                  placeholder="Gợi ý: Mục tiêu ngắn hạn của bạn trong một vài năm tới, Mục tiêu dài hạn trong 10-15 năm tới"
                                  class="inputTxtAreaTop form-control"
                                  rows="5"
                                  value="{{ $candidate['job_goal'] }}"></textarea>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="job_goal">
                        Vui lòng chọn mục tiêu nghề nghiệp.</div>
                </div>

                <div class="form-group mt_16">
                    <label for="job_goal"
                           class="control-label-info bold txt-ghi fs14 w180">
                        Kỹ năng & Sở trường
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <textarea name="skill_forte"
                                  placeholder="Gợi ý: Kỹ năng và sở trường của mạnh nhất của bạn"
                                  class="inputTxtAreaTop form-control"
                                  rows="5"
                                  value="{{ $candidate['skill_forte'] }}"></textarea>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="skill_forte">
                        Vui lòng chọn mục tiêu nghề nghiệp.</div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>