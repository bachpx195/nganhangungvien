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
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" style="">
        <div id="div-frm-kinhnghiem">
            <div class="box-knlv mb_10">
                <p>- Liệt kê các kinh nghiệm công việc từ thời gian gần
                    nhất trở về trước. Kinh nghiệm có thể trong công việc hoặc các hoạt
                    động đoàn thể. Không yêu cầu nếu chưa có kinh nghiệm</p>
            </div>
            <div class="clearfix"></div>
            <?php $experienceCount = isset($candidate['experience_count']) ? $candidate['experience_count'] : 1;?>
            <input type="hidden" name="experience_count" id="experience-count" value="{{$experienceCount}}">
            <div class="box-edit form display_block" id="experience-list">
                @for ($i = 1; $i <= $experienceCount; $i++)
                    <div class="experience-skill-item">
                        <div class="form-group">
                            <div class="ln_hr_head"></div>
                        </div>
                        <!-- tên company_name -->
                        <div class="form-group">
                            <label for="experience_company_name_{{$i}}"
                                   class="control-label-info bold txt-ghi fs14 w180">Tên
                                Công ty/Tổ chức <span
                                        class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm col-xs-8">
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
                                   class="control-label-info bold txt-ghi fs14 w180">Chức
                                danh <span class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm col-xs-8">
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
                        <div class="form-group">
                            <label for="address"
                                   class="control-label-info bold txt-ghi fs14 w180">Thời
                                gian làm việc <span
                                        class="colorRed">*</span></label>
                            <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                                <span class="txt-color-757575 fs14 italic pr12 floatLeft lbl_from_bangcap">từ </span>
                                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                    <select name="experience_day_in_month_{{$i}}" class="select-style w60" data-disS="1">
                                        @include('front.common.month_options',
                                        array('selected' => isset($candidate['experience_day_in_month_' . $i]) ? $candidate['experience_day_in_month_' . $i] : ''))
                                    </select>
                                </div>
                                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                    <select name="experience_day_in_year_{{$i}}" class="select-style w60" data-disS="1">
                                        @include('front.common.year_options',
                                        array('selected' => isset($candidate['experience_day_in_year_' . $i]) ? $candidate['experience_day_in_year_' . $i] : ''))
                                    </select>
                                </div>
                                <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                                <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none">
                                    Hiện tại</p>
                                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                    <select name="experience_day_out_month_{{$i}}" class="select-style w60" data-disS="1">
                                        @include('front.common.month_options', array('selected' => isset($candidate['experience_day_out_month_' . $i]) ? $candidate['experience_day_out_month_' . $i] : ''))
                                    </select>
                                </div>
                                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                    <select name="experience_day_out_year_{{$i}}" class="select-style w60" data-disS="1">
                                        @include('front.common.year_options',
                                        array('selected' => isset($candidate['experience_day_out_year_' . $i]) ? $candidate['experience_day_out_year_' . $i] : ''))
                                    </select>
                                </div>
                                <div id="error_c_thoigian"
                                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                            </div>
                        </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label for="expect_salary"
                                       class="control-label-info bold txt-ghi fs14 w180">
                                    Mức lương <span class="colorRed">*</span>
                                </label>

                                <div class="fr-input-wd333 select_style31 city_select">
                                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                        <select id="experience_salary" name="experience_salary_{{$i}}"
                                                class="select-style"
                                                data-disS="1"
                                                data-select-class="tinh_thanh_reg">
                                            @include('front.common.options',
                                                array(
                                                    'selected' => isset($candidate['experience_salary_' . $i]) ? $candidate['experience_salary_' . $i] : '',
                                                    'options' => $salaries,
                                                    'defaultName' => '-- Chọn Mức lương --'
                                                    ))
                                        </select>
                                    </div>
                                </div>
                                <div class="error_reg_mess clearfix italic validator-message display_none"
                                     data-name="experience_salary_{{$i}}">
                                    Vui lòng chọn mức lương.</div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="form-group">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">
                                    Mô tả công việc <span class="colorRed">*</span>
                                </label>
                                <div class="fr_ip_vtmm col-xs-8">
                            <textarea name="experience_description_{{$i}}"
                                      class="form-control pt4 pb4 pl_10 pr_10 inputTextAreaKNEdit required"
                                      id="experience_description" rows="5"
                                    value="{{isset($candidate['experience_description_' . $i]) ? $candidate['experience_description_' . $i] : ''}}"></textarea>
                                </div>
                                <div id="error_c_mo_ta_cong_viec"
                                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- Remove experience -->
                            <div class="form-group">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
                                <div class="fr_ip_vtmm col-xs-8 remove-addition-info-form"
                                     data-class="experience-skill-item" data-index="1" data-count-id="experience-count">
                                    <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA KINH NGHIỆM LÀM VIỆC</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="footer-box-child-ths" id="add-more-experience">
            <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM KINH NGHIỆM LÀM VIỆC</a>
        </div>
    </div>
</div>