<script id="experience-template" type="x-tmpl-mustache">
    <div class="experience-skill-item">
        <div class="row">
            <div class="ln_hr_head"></div>
        </div>
        <!-- tên company_name -->
        <div class="form-group mt16">
            <label for="experience_company_name"
                   class="control-label-info bold txt-ghi fs14 w180">Tên
                Công ty/Tổ chức</label>
            <div class="fr_ip_vtmm col-xs-8">
                <input name="experience_company_name_@{{index}}" type="text"
                       class="inputTextKNEdit form-control input-lg2 color-input required"
                       id="experience_company_name_@{{index}}" value=""/>
            </div>
            <div id="error_c_cong_ty"
                 class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="clearfix"></div>
        <!-- Trường đào tạo cấp -->
        <div class="form-group mt16">
            <label for="experience_office_1"
                   class="control-label-info bold txt-ghi fs14 w180">Chức
                danh</label>
            <div class="fr_ip_vtmm col-xs-8">
                <input name="experience_office_@{{index}}" type="text"
                       class="inputTextKNEdit form-control input-lg2 color-input required"
                       id="experience_office_@{{index}}" value=""/>
            </div>
            <div id="error_c_chuc_danh"
                 class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
        </div>
        <div class="clearfix"></div>

        <!-- input birthday -->
        <div class="form-group">
            <label for="address"
                   class="control-label-info bold txt-ghi fs14 w180">Thời
                gian làm việc</label>
            <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                <span class="txt-color-757575 fs14 italic pr12 floatLeft lbl_from_bangcap">từ </span>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                    <select name="experience_day_in_month_@{{index}}" class="w128">
                        @include('front.common.month_options'))
                    </select>
                </div>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                    <select name="experience_day_in_year_@{{index}}" class="w128">
                        @include('front.common.year_options'))
                    </select>
                </div>
                <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none">
                    Hiện tại</p>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                    <select name="experience_day_out_month_@{{index}}" class="w128">
                        @include('front.common.month_options'))
                    </select>
                </div>
                <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                    <select name="experience_day_out_year_@{{index}}" class="w128">
                        @include('front.common.year_options'))
                    </select>
                </div>
                <div id="error_c_thoigian"
                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
            </div>

            <div class="clearfix"></div>
            <div class="form-group mt_16">
                <label for="experience_salary_@{{index}}"
                       class="control-label-info bold txt-ghi fs14 w180">
                    Mức lương
                </label>

                <div class="fr_ip_vtmm col-xs-8 city_select">
                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                        <select id="experience_salary" name="experience_salary_@{{index}}"
                                data-disS="1"
                                data-select-class="tinh_thanh_reg">
                            @include('front.common.options',
                                array(
                                    'options' => $salaries,
                                    'defaultName' => '-- Chọn Mức lương --'
                                    ))
                        </select>
                    </div>
                </div>
                <div class="error_reg_mess clearfix italic validator-message display_none" data-name="experience_salary_@{{index}}">
                    Vui lòng chọn mức lương.</div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group mt_16">
                <label class="control-label-checkbox bold txt-ghi fs14 w180">
                    Mô tả công việc
                </label>
                <div class="fr_ip_vtmm col-xs-8">
                <textarea name="experience_description_@{{index}}"
                          class="form-control pt4 pb4 pl_10 pr_10 inputTextAreaKNEdit required"
                          id="experience_description_@{{index}}" rows="5"></textarea>
                </div>
                <div id="error_c_mo_ta_cong_viec"
                     class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
            </div>
        </div>
        <!-- Remove experience -->
        <div class="form-group">
            <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
            {{--<div class="fr_ip_vtmm col-xs-8">--}}
            <div class="remove-addition-info-form"
                 data-class="experience-skill-item" data-index="1" data-count-id="experience-count">
                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA KINH NGHIỆM LÀM VIỆC</a>
            </div>
        </div>
    </div>
</script>