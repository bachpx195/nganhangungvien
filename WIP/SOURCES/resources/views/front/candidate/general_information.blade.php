<div class="box-child-ths">

    <form id="general-infomation" class="form-horizontal" role="form" method="POST" action="{{ route('candidate.form') }}"
        name="general_information">

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
                                   name="cv_title" placeholder="Ví dụ: Nhân viên chăm sóc khách hàng - vận hành game">
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
                                   name="email" placeholder="Ví dụ: abc@gmail.com; abc@yahoo.com">
                        </div>
                        <div class="error_reg_mess clearfix italic validator-message display_none" data-name="email">
                            Vui lòng nhập địa chỉ email đúng để NTD liên hệ được với bạn</div>
                    </div>

                    <!-- input Họ và Tên * -->
                    <div class="form-group clearfix mb_16">
                        <label for="full_name" class="control-label-info bold txt-color-363636 fs14 w180">
                            Họ và Tên <span class="colorRed">*</span>
                        </label>
                        <div class="register_fr_input_wd583">
                            <input type="text" class="form-control input-lg2 color-input" id="full_name" name="full_name" placeholder="Ví dụ: Nguyễn Văn A , Trần Thị B.">
                        </div>
                        <div class="error_reg_mess clearfix italic validator-message display_none" data-name="full_name">
                            Vui lòng nhập đầy đủ thông tin họ và tên của bạn bằng tiếng Việt có dấu.</div>
                    </div>

                    <!-- input birthday -->
                    <div class="form-group mb_16">
                        <label for="birthday" class="control-label-info bold txt-color-363636 fs14 w180">
                            Ngày sinh <span class="colorRed">*</span></label>
                        <div class="register_fr_input_wd583 select_style31 city_select">
                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                <select id="birthday" name="birthday_day" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                    <option value="" selected="">Ngày</option>
                                    <option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                                            </select>
                            </div>
                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                <select id="thang_sinh" name="birthday_month" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                    <option value="" selected="">Tháng</option>
                                    <option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                            </select>
                            </div>
                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                <select id="nam_sinh" name="birthday_year" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                    <option value="" selected="">Năm</option>
                                    <option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option>                                            </select>
                            </div>
                        </div>
                        <div class="error_reg_mess clearfix italic validator-message display_none" data-name="birthday">
                            Vui lòng ngày, tháng, năm sinh.</div>
                    </div>

                    <div class="form-group mb1 input-phone">
                        <label for="phone_number" class="control-label-info bold txt-color-363636 fs14 w180">Số điện thoại <span class="colorRed">*</span></label>
                        <div class="fr-input-wd333">
                            <input type="text" class="form-control input-lg2 color-input" id="phone" name="phone_number" placeholder="Ví dụ: 0942465168" />
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
                                    <option value="">Chọn cấp bậc</option>
                                    @foreach($ranks as $index => $rank)
                                        <option value="{{$rank->id}}">{{$rank->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn cấp bậc</option>
                                    @foreach($ranks as $index => $rank)
                                        <option value="{{$rank->id}}">{{$rank->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn Ngành nghề</option>
                                    @foreach($jobs as $index => $job)
                                        <option value="{{$job->id}}">{{$job->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="error_reg_mess clearfix italic validator-message display_none" data-name="job">
                            Vui lòng chọn cấp bậc mong muốn.</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group mt_16">
                        <label class="control-label-info bold txt-ghi fs14 w180 lineheight_24">
                            Ngành nghề <span class="colorRed">*</span>
                        </label>
                        <div class="fr-input-wd333 select_style31 city_select">
                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                <select id="fk_tinh" name="province_id"
                                        class="reqCheckBoxTop diadiem_lv selectpicker box_select_filter_reg them_nganhnghe"
                                        tabindex="-1">
                                    <option value="">Chọn Tỉnh thành</option>
                                    @foreach($provinces as $index => $province)
                                        <option value="{{$province->id}}">{{$province->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn Trình độ học vấn
                                        cao nhất
                                    </option>
                                    @foreach($levels as $index => $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn Kinh nghiệm</option>
                                    @foreach($experienceYears as $index => $experienceYear)
                                        <option value="{{$experienceYear->id}}">{{$experienceYear->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn hình thức làm việc</option>
                                    @foreach($employmentStatuses as $index => $employmentStatus)
                                        <option value="{{$employmentStatus->id}}">{{$employmentStatus->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn Mức lương</option>
                                    @foreach($salaries as $index => $salary)
                                        <option value="{{$salary->id}}">{{$salary->name}}</option>
                                    @endforeach
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
                                    <option value="">Chọn nhu cầu làm việc</option>
                                    @foreach($exigencies as $index => $exigency)
                                        <option value="{{$exigency->id}}">{{$exigency->name}}</option>
                                    @endforeach
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
                                      rows="5"></textarea>
                        </div>
                        <div class="error_reg_mess clearfix italic validator-message display_none" data-name="job_goal">
                            Vui lòng chọn mục tiêu nghề nghiệp.</div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group mb1 input-phone">
                        <label class="control-label-info bold txt-ghi fs14 w180"></label>
                        <div class="fr-input-wd153">
                            <div class="fr-input-wd153 floatLeft">
                                <button type="submit" class="ml_15 mr_10 btn btnluu w153 fwb uppercase fs16">
                                    Lưu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
</div>