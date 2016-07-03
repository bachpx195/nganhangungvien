<div class="box-child-ths" id="block-thong-tin-ca-nhan">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#div-frm-kinhnghiem" class="accordion">
            <span class="uppercase bold text-tim-nhat">KINH NGHIỆM LÀM VIỆC</span>
            <span class="required_l kn_bb ">(bắt buộc)</span>
            <span class="required_l_n kn_kobb display_none">(Không bắt buộc)</span>
                                                <span class="required_r"><i
                                                            class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>

    <div id="experience-list">
        <div class="form-group">
            <div class="box-knlv">
                <p>- Liệt kê các kinh nghiệm công việc từ thời gian gần
                    nhất trở về trước.</p>
                <p>- Kinh nghiệm có thể trong công việc hoặc các hoạt
                    động đoàn thể.</p>
                <p>- Không yêu cầu nếu chưa có kinh nghiệm</p>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php $experienceCount = isset($candidate['experience_count']) ? $candidate['experience_count'] : 1;?>
        <input type="hidden" name="experience_count" id="experience-count" value="{{$experienceCount}}">
        @for ($i = 1; $i <= $experienceCount; $i++)
            <input type="hidden" name="experience_id_{{$i}}"
                   value="{{isset($candidate['experience_id_' . $i]) ? $candidate['experience_id_' . $i] : ''}}">
            <div class="experience-skill-item">
                <!-- tên company_name -->
                <div class="form-group">
                    <label for="experience_company_name_{{$i}}"
                           class="col-sm-2 control-label">Tên
                        Công ty/Tổ chức <span
                                class="colorRed">*</span></label>
                    <div class="col-sm-10 ">
                        <input name="experience_company_name_{{$i}}" type="text"
                               class="inputTextKNEdit form-control input-lg2 color-input required"
                               id="experience_company_name"
                               value="{{isset($candidate['experience_company_name_' . $i]) ? $candidate['experience_company_name_' . $i] : ''}}"/>
                    </div>
                    <div id="error_c_cong_ty"
                         class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <div class="clearfix"></div>
                <!-- Trường đào tạo cấp -->
                <div class="form-group">
                    <label for="experience_office_{{$i}}"
                           class="col-sm-2 control-label">Chức
                        danh <span class="colorRed">*</span></label>
                    <div class="col-sm-10 ">
                        <input name="experience_office_{{$i}}" type="text"
                               class="inputTextKNEdit form-control input-lg2 color-input required"
                               id="experience_office"
                               value="{{isset($candidate['experience_office_' . $i]) ? $candidate['experience_office_' . $i] : ''}}"/>
                    </div>
                    <div id="error_c_chuc_danh"
                         class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <div class="clearfix"></div>

                <!-- input birthday -->
                <div class="form-group mt_16">
                    <label for="address"
                           class="col-sm-2 control-label">Thời
                        gian làm việc <span
                                class="colorRed">*</span></label>
                    <div class="col-sm-10 ">
                        <span class="col-sm-1">từ </span>
                        <div class="col-sm-2">
                            <select name="experience_day_in_month_{{$i}}" class="form-control">
                                @include('admin.common.month_options',
                                array('selected' => isset($candidate['experience_day_in_month_' . $i]) ? $candidate['experience_day_in_month_' . $i] : ''))
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="experience_day_in_year_{{$i}}" class="form-control">
                                @include('admin.common.year_options',
                                array('selected' => isset($candidate['experience_day_in_year_' . $i]) ? $candidate['experience_day_in_year_' . $i] : ''))
                            </select>
                        </div>
                        <span class="col-sm-1">đến </span>
                        <div class="col-sm-2">
                            <select name="experience_day_out_month_{{$i}}" class="form-control">
                                @include('admin.common.month_options', array('selected' => isset($candidate['experience_day_out_month_' . $i]) ? $candidate['experience_day_out_month_' . $i] : ''))
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="experience_day_out_year_{{$i}}" class="form-control">
                                @include('admin.common.year_options',
                                array('selected' => isset($candidate['experience_day_out_year_' . $i]) ? $candidate['experience_day_out_year_' . $i] : ''))
                            </select>
                        </div>
                        <div id="error_c_thoigian"
                             class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>
                </div>

                <div class="form-group mt_16">
                    <label for="expect_salary"
                           class="col-sm-2 control-label">
                        Mức lương <span class="colorRed">*</span>
                    </label>

                    <div class="col-sm-10 ">
                        <select name="experience_salary_{{$i}}" class="form-control">
                            @include('admin.common.options',
                                     array(
                                         'selected' => isset($candidate['experience_salary_' . $i]) ? $candidate['experience_salary_' . $i] : '',
                                         'options' => $salaries,
                                         'defaultName' => 'Chọn Mức lương'
                                         ))
                        </select>
                    </div>
                </div>
                <div class="error_reg_mess clearfix italic validator-message display_none"
                     data-name="experience_salary_{{$i}}">
                    Vui lòng chọn mức lương.
                </div>

                <div class="clearfix"></div>

                <div class="form-group clearfix mt_16">
                    <label class="col-sm-2 control-label">
                        Mô tả công việc <span class="colorRed">*</span>
                    </label>
                    <div class="col-sm-10 ">
                            <textarea name="experience_description_{{$i}}" class="form-control"
                                      id="experience_description"
                                      rows="5">{{isset($candidate['experience_description_' . $i]) ? $candidate['experience_description_' . $i] : ''}}</textarea>
                    </div>
                    <div id="error_c_mo_ta_cong_viec"
                         class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group clearfix mt_16">
                    <label class="col-sm-2 control-label"> &nbsp; </label>
                    <div class="remove-addition-info-form col-sm-10"
                         data-class="experience-skill-item" data-index="1" data-count-id="experience-count">
                        <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA KINH NGHIỆM LÀM VIỆC</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <div class="footer-box-child-ths" id="add-more-experience">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM KINH NGHIỆM LÀM VIỆC</a>
    </div>
</div>