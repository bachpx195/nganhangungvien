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
                <div class="form-group">
                    <label for="cv_title" class="col-sm-2 control-label">
                        Tiêu đề hồ sơ <span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cv_title"
                               name="cv_title" placeholder="Ví dụ: Nhân viên chăm sóc khách hàng - vận hành game"
                                value="{{$candidate['cv_title']}}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none"
                         data-name="cv_title">
                        Vui lòng nhập tiêu đề hồ sơ đúng để NTD liên hệ được với bạn
                    </div>
                </div>


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        Email <span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email"
                               name="email" placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com"
                               value="{{$candidate['email']}}">
                    </div>
                    @include('admin.common.form_error', array('fieldName' => 'email'))
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="email">
                        Vui lòng nhập địa chỉ email đúng để NTD liên hệ được với bạn</div>
                </div>

                <!-- input Họ và Tên * -->
                <div class="form-group">
                    <label for="full_name" class="col-sm-2 control-label">
                        Họ và Tên <span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="full_name" name="full_name"
                               placeholder="Ví dụ: Nguyễn Văn A , Trần Thị B."
                               value="{{ $candidate['full_name'] }}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="full_name">
                        Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu.</div>
                </div>

                <!-- input Giới tính -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Giới tính <span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10">
                        <label class="radio-inline radio-styled">
                            <input type="radio" name="sex" value="2"
                                   @if ($candidate['sex'] != 1) checked @endif><span>Nữ</span>
                        </label>
                        <label class="radio-inline radio-styled">
                            <input type="radio" name="sex" value="1"
                                   @if ($candidate['sex'] == 1) checked @endif><span>Nam</span>
                        </label>
                    </div>
                </div>
                <!-- input Tình trạng hôn nhân -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Tình trạng hôn nhân<span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10 ">
                        <label class="radio-inline radio-styled">
                            <input type="radio" name="is_married" value="0"
                                   @if ($candidate['is_married'] != 1) checked @endif><span>Độc thân</span>
                        </label>
                        <label class="radio-inline radio-styled">
                            <input type="radio" name="is_married" value="1"
                                   @if ($candidate['is_married'] == 1) checked @endif><span>Lập gia đình</span>
                        </label>
                    </div>
                </div>

                <!-- input birthday -->
                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">
                        Ngày sinh <span class="has-error">*</span></label>
                    <div class="col-sm-10">
                        <div class="col-sm-4">
                            <select name="birthday_day" class="form-control">
                                @include('admin.common.day_options', array('selected' => $candidate['birthday_day']))
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="birthday_month" class="form-control">
                                @include('admin.common.month_options', array('selected' => $candidate['birthday_month']))
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select name="birthday_year" class="form-control">
                                @include('admin.common.year_options', array('selected' => $candidate['birthday_year']))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="birthday">
                        Vui lòng ngày, tháng, năm sinh.</div>
                </div>

                <div class="form-group">
                    <label for="phone_number" class="col-sm-2 control-label">Số điện thoại <span class="has-error">*</span></label>
                    <div class="fr-input-wd333">
                        <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Ví dụ: 0942465168"
                               value="{{ $candidate['phone_number'] }}">
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="phone_number">
                        Vui lòng nhập vào số điện thoại.</div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <label for="c_chuc_vu"
                           class="col-sm-2 control-label">Cấp
                        bậc hiện tại <span class="has-error">*</span></label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="current_rank" class="form-control">
                                @include('admin.common.options',
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
                <div class="form-group">
                    <label for="c_chuc_vu"
                           class="col-sm-2 control-label">Cấp
                        bậc mong muốn <span class="has-error">*</span></label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="expect_rank" class="form-control">
                                @include('admin.common.options',
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
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Ngành nghề <span class="has-error">*</span>
                    </label>
                    <div class="col-md-10">
                        <div class="">
                            <select name="job" class="form-control">
                                @include('admin.common.options',
                                    array(
                                        'selected' => $candidate['job'],
                                        'options' => $jobs,
                                        'defaultName' => 'Chọn nghề nghiệp'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="job">
                        Vui lòng chọn cấp bậc mong muốn.</div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Tỉnh thành <span class="has-error">*</span>
                    </label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="province_id" class="form-control">
                                @include('admin.common.options',
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
                <div class="form-group">
                    <label for="level"
                           class="col-sm-2 control-label">Trình
                        độ học vấn cao nhất<span
                                class="has-error">*</span></label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="level" class="form-control">
                                @include('admin.common.options',
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
                           class="col-sm-2 control-label">Tổng
                        số năm kinh nghiệm <span
                                class="has-error">*</span></label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="experience_years" class="form-control">
                                @include('admin.common.options',
                                    array(
                                        'selected' => $candidate['experience_years'],
                                        'options' => $experienceYears,
                                        'defaultName' => 'Chọn Kinh nghiệm'
                                        )))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess clearfix italic validator-message display_none" data-name="experience_years">
                        Vui lòng chọn số năm kinh nghiệm.</div>
                </div>

                <!-- input Hình thức làm việc -->
                <div class="form-group mt_16">
                    <label for="employment_status"
                           class="col-sm-2 control-label">
                        Hình thức làm việc <span class="has-error">*</span>
                    </label>

                    <div class="col-sm-10">
                        <div class="">
                            <select name="employment_status" class="form-control">
                                @include('admin.common.options',
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
                           class="col-sm-2 control-label">
                        Mức lương mong muốn <span class="has-error">*</span>
                    </label>

                    <div class="col-sm-10">
                        <div class="">
                            <select name="expect_salary" class="form-control">
                                @include('admin.common.options',
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
                           class="col-sm-2 control-label lineheight_24">Nhu cầu công việc <span class="has-error">*</span><span
                                class="note_title_form italic font12 text_grey3 mt_a6 pt_4"></span></label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="exigency" class="form-control">
                                @include('admin.common.options',
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
                           class="col-sm-2 control-label">
                        Mục tiêu nghề nghiệp <span class="has-error">*</span>
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
                           class="col-sm-2 control-label">
                        Kỹ năng & Sở trường <span class="has-error">*</span>
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