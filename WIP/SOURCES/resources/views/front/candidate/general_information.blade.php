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
                               required data-required-msg="Vui lòng nhập Tiêu đề hồ sơ"
                                value="{{$candidate['cv_title']}}">
                    </div>
                </div>


                <div class="form-group clearfix mb_16">
                    <label for="email" class="control-label-info bold txt-color-363636 fs14 w180">
                        Email <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <input type="email" class="form-control input-lg2 color-input" id="email"
                               name="email" placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                               required data-required-msg="Vui lòng không bỏ trống Email"
                               value="{{$candidate['email']}}">
                    </div>
                    @include('front.common.form_error', array('fieldName' => 'email'))
                </div>

                <!-- input Họ và Tên * -->
                <div class="form-group clearfix mb_16">
                    <label for="full_name" class="control-label-info bold txt-color-363636 fs14 w180">
                        Họ và Tên <span class="colorRed">*</span>
                    </label>
                    <div class="register_fr_input_wd583">
                        <input type="text" class="form-control input-lg2 color-input" id="full_name" name="full_name"
                               placeholder="Ví dụ: Nguyễn Văn A , Trần Thị B."
                               required data-required-msg="Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu."
                               value="{{ $candidate['full_name'] }}">
                    </div>
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
                            <select name="birthday_day" class="select-style w128"
                                    required data-required-msg="Vui lòng chọn Ngày sinh">
                                @include('front.common.day_options', array('selected' => $candidate['birthday_day']))
                            </select>
                        </div>
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                            <select name="birthday_month" class="select-style w128"
                                    required data-required-msg="Vui lòng chọn Tháng sinh">
                                @include('front.common.month_options', array('selected' => $candidate['birthday_month']))
                            </select>
                        </div>
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                            <select name="birthday_year" class="select-style w128"
                                    required data-required-msg="Vui lòng chọn Năm sinh">
                                @include('front.common.year_options', array('selected' => $candidate['birthday_year']))
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mb1 input-phone">
                    <label for="phone_number" class="control-label-info bold txt-color-363636 fs14 w180">Số điện thoại <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333">
                        <input type="text" class="form-control input-lg2 color-input" id="phone" name="phone_number" placeholder="Ví dụ: 0942465168"
                               required data-required-msg="Vui lòng nhập vào Số điện thoại"
                               value="{{ $candidate['phone_number'] }}">
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="c_chuc_vu"
                           class="control-label-info bold txt-ghi fs14 w180">Cấp
                        bậc hiện tại <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="current_rank"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Cấp bậc hiện tại">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['current_rank'],
                                        'options' => $ranks,
                                        'defaultName' => 'Chọn cấp bậc'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="c_chuc_vu"
                           class="control-label-info bold txt-ghi fs14 w180">Cấp
                        bậc mong muốn <span class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="expect_rank" class="select-style"
                                    required data-required-msg="Vui lòng chọn Cấp bậc mong muốn">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['expect_rank'],
                                        'options' => $ranks,
                                        'defaultName' => 'Chọn cấp bậc'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- input Ngành nghề quan tâm -->
                <div class="form-group mt_16">
                    <label class="control-label-info bold txt-ghi fs14 w180 lineheight_24">
                        Ngành nghề <span class="colorRed">*</span>
                    </label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="job"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Ngành nghề mong muốn">
                                @include('front.common.options',
                                    array(
                                        'selected' => isset($candidate['job']) ? $candidate['job'] : '',
                                        'options' => $jobs,
                                        'defaultName' => 'Chọn Ngành nghề'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label class="control-label-info bold txt-ghi fs14 w180 lineheight_24">
                        Tỉnh thành <span class="colorRed">*</span>
                    </label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="province_id"
                                    class="select-style"
                                    required data-required-msg="Vui lòng nhập chọn Tỉnh thành">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['province_id'],
                                        'options' => $provinces,
                                        'defaultName' => 'Chọn Tỉnh thành'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_8">
                    <label for="level" class="control-label-info bold txt-ghi fs14 w180">Trình độ học vấn cao nhất<span
                                class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="level"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Trình độ học vấn">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['level'],
                                        'options' => $levels,
                                        'defaultName' => 'Chọn Trình độ học vấn cao nhất'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group mt_16">
                    <label for="experience_years" class="control-label-info bold txt-ghi fs14 w180">Tổng số năm kinh nghiệm <span
                                class="colorRed">*</span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="experience_years"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Số năm kinh nghiệm">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['experience_years'],
                                        'options' => $experienceYears,
                                        'defaultName' => 'Chọn năm kinh nghiệm'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input Hình thức làm việc -->
                <div class="form-group mt_16">
                    <label for="employment_status" class="control-label-info bold txt-ghi fs14 w180">
                        Hình thức làm việc <span class="colorRed">*</span>
                    </label>

                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="employment_status"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Hình thức làm việc">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['employment_status'],
                                        'options' => $employmentStatuses,
                                        'defaultName' => 'Chọn hình thức làm việc'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- input Mức lương mong muốn -->

                <div class="form-group mt_16">
                    <label for="expect_salary" class="control-label-info bold txt-ghi fs14 w180">
                        Mức lương mong muốn <span class="colorRed">*</span>
                    </label>

                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="expect_salary"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Số lương mong muốn">
                                @include('front.common.options',
                                    array(
                                        'selected' => $candidate['expect_salary'],
                                        'options' => $salaries,
                                        'defaultName' => 'Chọn Mức lương'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mt_16">
                    <label for="exigency"
                           class="control-label-info bold txt-ghi fs14 w180 lineheight_24">Nhu cầu công việc <span class="colorRed">*</span><span
                                class="note_title_form italic font12 text_grey3 mt_a6 pt_4"></span></label>
                    <div class="fr-input-wd333 select_style31 city_select">
                        <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                            <select name="exigency"
                                    class="select-style"
                                    required data-required-msg="Vui lòng chọn Nhu cầu công việc.">
                                @include('front.common.options',
                                    array(
                                        'selected' => isset($candidate['exigency']) ? $candidate['exigency'] : '',
                                        'options' => $exigencies,
                                        'defaultName' => 'Chọn nhu cầu làm việc'
                                        ))
                            </select>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="form-group mt_16">
                    <label for="job_goal"
                           class="control-label-info bold txt-ghi fs14 w180">
                        Mục tiêu nghề nghiệp <span class="colorRed">*</span>
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <textarea name="job_goal"
                                  placeholder="Gợi ý: Mục tiêu ngắn hạn của bạn trong một vài năm tới, Mục tiêu dài hạn trong 10-15 năm tới"
                                  class="inputTxtAreaTop form-control"
                                  required data-required-msg="Vui lòng chọn Mục tiêu nghề nghiệp"
                                  rows="5"
                                  value="{{ $candidate['job_goal'] }}"></textarea>
                    </div>
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
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Ảnh đại diện</label>
                    <div class="col-md-10">
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail upload-image">
                                    <img src="{{ URL::asset('assets/image/default.png') }}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail upload-image"> </div>
                                <div>
						            <span class="btn red btn-outline btn-file">
						                <span class="fileinput-new"> Chọn hình ảnh </span>
						                <span class="fileinput-exists"> Thay đổi </span>
						                <input  type="file" name="image" accept="image/*" > </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Hủy </a>
                                </div>
                            </div>
                            <div class="clearfix margin-top-10">
                                <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png ) </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Tải lên CV đính kèm</label>
                    <div class="col-md-10">
                        <input name="attach_cv" type="file" multiple class="file-loading btn red btn-outline btn-file"
                               accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>