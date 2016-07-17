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
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="cv_title" class="control-label-info bold txt-color-363636 fs14 col-md-3">
                                Tiêu đề hồ sơ <span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-lg2 color-input" id="cv_title"
                                       name="cv_title" placeholder="Ví dụ: Nhân viên chăm sóc khách hàng - vận hành game"
                                       required data-required-msg="Vui lòng nhập Tiêu đề hồ sơ"
                                       value="{{$candidate['cv_title']}}">
                            </div>
                        </div>

                        <!-- input Họ và Tên * -->
                        <div class="form-group">
                            <label for="full_name" class="control-label-info bold txt-color-363636 fs14 col-md-3">
                                Họ và Tên <span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-lg2 color-input" id="full_name" name="full_name"
                                       placeholder="Ví dụ: Nguyễn Văn A , Trần Thị B."
                                       required data-required-msg="Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu."
                                       value="{{ $candidate['full_name'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label-info bold txt-color-363636 fs14 col-md-3">
                                Email <span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="email" class="form-control input-lg2 color-input" id="email"
                                       name="email" placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                                       required data-required-msg="Vui lòng không bỏ trống Email"
                                       value="{{$candidate['email']}}">
                            </div>
                            @include('front.common.form_error', array('fieldName' => 'email'))
                        </div>

                        <!-- input Giới tính -->
                        <div class="form-group">
                            <label class="control-label-checkbox bold txt-color-363636 fs14 col-md-3">
                                Giới tính <span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8">
                                <div class="demo-list-green mr_24 sex-lable">
                                    <input tabindex="1" type="radio" name="sex" value="2" id="ml_0"
                                           @if ($candidate['sex'] == 2) checked @endif>
                                    <label for="ml_0" class="font14 fwn">Nữ</label>
                                </div>
                                <div class="demo-list-green  sex-lable">
                                    <input tabindex="1" type="radio" name="sex" value="1" id="ml_1"
                                           @if ($candidate['sex'] != 2) checked @endif>
                                    <label for="ml_1" class="font14 fwn">Nam</label>
                                </div>
                            </div>
                        </div>
                        <!-- input Địa chỉ của ứng viên -->
                        <div class="form-group">
                            <label for="address" class="control-label-info bold txt-color-363636 fs14 col-md-3">
                                Địa chỉ <span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-lg2 color-input" id="address" name="address"
                                       placeholder="Ví dụ: Tổ 10, Phường Yên Nghĩa, Quận Hà Đông, TP Hà Nội"
                                       required data-required-msg="Vui lòng nhập đầy đủ thông tin địa chỉ của bạn bằng tiếng Việt có dấu."
                                       value="{{ $candidate['address'] }}">
                            </div>
                        </div>
                        <!-- input Tình trạng hôn nhân -->
                        <div class="form-group">
                            <label class="control-label-checkbox bold txt-color-363636 fs14 col-md-3">
                                Tình trạng hôn nhân<span class="colorRed">*</span>
                            </label>
                            <div class="col-md-8 ">
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

                        <div class="form-group input-phone">
                            <label for="phone_number" class="control-label-info bold txt-color-363636 fs14 col-md-3">Số điện thoại <span class="colorRed">*</span></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-lg2 color-input" id="phone" name="phone_number" placeholder="Ví dụ: 0942465168"
                                       required data-required-msg="Vui lòng nhập vào Số điện thoại"
                                       value="{{ $candidate['phone_number'] }}">
                            </div>
                        </div>

                        <!-- input birthday -->
                        <div class="form-group">
                            <label for="birthday" class="control-label-info bold txt-color-363636 fs14 col-md-3">
                                Ngày sinh <span class="colorRed">*</span></label>
                            <div class="col-md-8 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                    <select name="birthday_day" class="select-style w128"
                                            required data-required-msg="Vui lòng chọn Ngày sinh">
                                        @include('front.common.day_options', array('selected' => $candidate['birthday_day']))
                                    </select>
                                </div>
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                    <select name="birthday_month" class="select-style w128"
                                            required data-required-msg="Vui lòng chọn Tháng sinh">
                                        @include('front.common.month_options', array('selected' => $candidate['birthday_month']))
                                    </select>
                                </div>
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                    <select name="birthday_year" class="select-style w128"
                                            required data-required-msg="Vui lòng chọn Năm sinh">
                                        @include('front.common.year_options', array('selected' => $candidate['birthday_year']))
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label for="c_chuc_vu"
                                   class="control-label-info bold txt-ghi fs14 col-md-3">Cấp
                                bậc hiện tại <span class="colorRed">*</span></label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="current_rank"
                                            class="select-style"
                                            required data-required-msg="Vui lòng chọn Cấp bậc hiện tại">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['current_rank'],
                                                'options' => $ranks,
                                                'defaultName' => '-- Chọn cấp bậc --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label for="c_chuc_vu"
                                   class="control-label-info bold txt-ghi fs14 col-md-3">Cấp
                                bậc mong muốn <span class="colorRed">*</span></label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="expect_rank" class="select-style"
                                            required data-required-msg="Vui lòng chọn Cấp bậc mong muốn">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['expect_rank'],
                                                'options' => $ranks,
                                                'defaultName' => '-- Chọn cấp bậc --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- input Ngành nghề quan tâm -->
                        <div class="form-group">
                            <label class="control-label-info bold txt-ghi fs14 col-md-3 lineheight_24">
                                Ngành nghề mong muốn <span class="colorRed">*</span><br>
                                <span class="note_title_form italic font12 text_grey3 mt_a6 pt_4">(tối đa 03 ngành nghề)</span>
                            </label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="job"
                                            class="select-style job-change">
                                        @include('front.common.options',
                                            array(
                                                'selected' => isset($candidate['job']) ? $candidate['job'] : '',
                                                'options' => $jobs,
                                                'defaultName' => '-- Chọn ngành nghề --'
                                                ))
                                    </select>
                                </div>
                                <div id="error_nganhnghe" class="has-error"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group  job-list" @if(count($expectJobs) == 0) style="display: none" @endif>
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-md-10">
                                <span class="dangchon-diadiem-lv floatLeft">Đang chọn: </span>
                                @if(count($expectJobs) > 0)
                                    @foreach($expectJobs as $expectJob)
                                        <div class="breaking-news">
                                            <span class="title">{{$expectJob['name']}}</span>
                                            <input class="job_input_{{$expectJob['job_id']}} display_none" name="expect_jobs[]"
                                                   type="text" value="{{$expectJob['job_id']}}">
                                            <span class="icon icon-xs icon-arrow-org"></span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label-info bold txt-ghi fs14 col-md-3 lineheight_24">
                                Tỉnh thành mong muốn <span class="colorRed">*</span><br>
                                <span class="note_title_form italic font12 text_grey3 mt_a6 pt_4">(tối đa 10 địa điểm)</span>
                            </label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="province_id"
                                            class="select-style address-change">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['province_id'],
                                                'options' => $provinces,
                                                'defaultName' => '-- Chọn tỉnh thành --'
                                                ))
                                    </select>
                                </div>
                                <div id="address-error" class="has-error"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group  address-list" @if(count($expectAddresses) == 0) style="display: none" @endif>
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-md-10">
                                <span class="dangchon-diadiem-lv floatLeft">Đang chọn: </span>
                                @if(count($expectAddresses) > 0)
                                    @foreach($expectAddresses as $expectAddress)
                                        <div class="breaking-news">
                                            <span class="title">{{$expectAddress['name']}}</span>
                                            <input class="job_input_{{$expectAddress['province_id']}} display_none" name="expect_addresses[]"
                                                   type="text" value="{{$expectAddress['province_id']}}">
                                            <span class="icon icon-xs icon-arrow-org"></span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label for="level" class="control-label-info bold txt-ghi fs14 col-md-3">Trình độ học vấn cao nhất<span
                                        class="colorRed">*</span></label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="level"
                                            class="select-style"
                                            required data-required-msg="Vui lòng chọn Trình độ học vấn">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['level'],
                                                'options' => $levels,
                                                'defaultName' => '-- Chọn trình độ học vấn cao nhất --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label for="experience_years" class="control-label-info bold txt-ghi fs14 col-md-3">Tổng số năm kinh nghiệm <span
                                        class="colorRed">*</span></label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="experience_years"
                                            class="select-style">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['experience_years'],
                                                'options' => $experienceYears,
                                                'defaultName' => '-- Chọn năm kinh nghiệm --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- input Hình thức làm việc -->
                        <div class="form-group">
                            <label for="employment_status" class="control-label-info bold txt-ghi fs14 col-md-3">
                                Hình thức làm việc <span class="colorRed">*</span>
                            </label>

                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="employment_status"
                                            class="select-style"
                                            required data-required-msg="Vui lòng chọn Hình thức làm việc">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['employment_status'],
                                                'options' => $employmentStatuses,
                                                'defaultName' => '-- Chọn hình thức làm việc --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- input Mức lương mong muốn -->

                        <div class="form-group">
                            <label for="expect_salary" class="control-label-info bold txt-ghi fs14 col-md-3">
                                Mức lương mong muốn <span class="colorRed">*</span>
                            </label>

                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="expect_salary"
                                            class="select-style"
                                            required data-required-msg="Vui lòng chọn Số lương mong muốn">
                                        @include('front.common.options',
                                            array(
                                                'selected' => $candidate['expect_salary'],
                                                'options' => $salaries,
                                                'defaultName' => '-- Chọn mức lương --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exigency"
                                   class="control-label-info bold txt-ghi fs14 col-md-3 lineheight_24">Nhu cầu công việc <span class="colorRed">*</span><span
                                        class="note_title_form italic text_grey3 mt_a6 pt_4"></span></label>
                            <div class="fr-input-wd333 select_style31 city_select mb_12">
                                <div class="filter_box style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                    <select name="exigency"
                                            class="select-style"
                                            required data-required-msg="Vui lòng chọn Nhu cầu công việc.">
                                        @include('front.common.options',
                                            array(
                                                'selected' => isset($candidate['exigency']) ? $candidate['exigency'] : '',
                                                'options' => $exigencies,
                                                'defaultName' => '-- Chọn nhu cầu làm việc --'
                                                ))
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <label for="job_goal"
                                   class="control-label-info bold txt-ghi fs14 col-md-3">
                                Mục tiêu nghề nghiệp <span class="colorRed">*</span>
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <textarea name="job_goal"
                                          placeholder="Gợi ý: Mục tiêu ngắn hạn của bạn trong một vài năm tới, Mục tiêu dài hạn trong 10-15 năm tới"
                                          class="inputTxtAreaTop form-control"
                                          required data-required-msg="Vui lòng chọn Mục tiêu nghề nghiệp"
                                          rows="5"
                                          value="{{ $candidate['job_goal'] }}">{{ $candidate['job_goal'] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="job_goal"
                                   class="control-label-info bold txt-ghi fs14 col-md-3">
                                Kỹ năng & Sở trường <span class="colorRed">*</span>
                            </label>
                            <div class="fr_ip_vtmm col-xs-8">
                                <textarea name="skill_forte"
                                          placeholder="Gợi ý: Kỹ năng và sở trường của mạnh nhất của bạn"
                                          required data-required-msg="Vui lòng nhập Kỹ năng và Sở trường"
                                          class="inputTxtAreaTop form-control"
                                          rows="5"
                                          value="{{ $candidate['skill_forte'] }}">{{ $candidate['skill_forte'] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label-info bold txt-ghi fs14 col-md-3">Tải lên CV đính kèm</label>
                            <div class="col-xs-8">
                                <input name="attach_cv" type="file" multiple class="file-loading btn red btn-outline btn-file"
                                       accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
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
                                    <a href="javascript:;" class="btn red fileinput-exists ml_10" data-dismiss="fileinput"> Hủy </a>
                                    <div class="mt10">
                                        <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png )
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>