<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_tdbc" class="accordion">
            <span class="uppercase bold text-tim-nhat">TRÌNH ĐỘ & BẰNG CẤP</span>
            <span class="required_l bc_bb ">(bắt buộc)</span>
            <span class="required_l_n bc_kobb display_none">(Không bắt buộc)</span>
                                                <span class="required_r"><i
                                                            class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" id="coll_tdbc"
         style="">
        <div id="div-frm-bangcap" class="">
            <div class="box-edit form display_block">
                <div class="block-content" id="frm-login-info">
                    <div class="pt_12">
                        <div id="certificate-list" class="mb_22 pt_2">
                            <?php $certificateCount = isset($candidate['certificate_count']) ? $candidate['certificate_count'] : 1;?>
                            <input type="hidden" name="certificate_count" id="certificate-count" value="{{$certificateCount}}">
                            @for ($i = 1; $i <= $certificateCount; $i++)
                                    <!-- input Tên Bằng cấp/Chứng chỉ -->
                                <div class="certificate-item">
                                    <div class="form-group clearfix mb_12">
                                        <label for="certificate_name_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">
                                            Tên Bằng cấp/Chứng chỉ <span
                                                    class="colorRed">*</span>
                                        </label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT..."
                                                   type="text"
                                                   class="form-control input-lg2 color-input inputTextEdit required"
                                                   name="certificate_name_{{$i}}" value=""/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <!-- input Trường/Đơn vị đào tạo -->
                                    <div class="form-group mb_12">
                                        <label for="training_unit_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">Trường/Đơn
                                            vị đào tạo <span
                                                    class="colorRed">*</span></label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input type="text"
                                                   class="form-control input-lg2 color-input inputTextEdit required"
                                                   name="training_unit_{{$i}}" value=""/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>

                                    <div class="form-group mb_12">
                                        <label class="control-label-info bold txt-color-363636 fs14 w181">Thời
                                            gian <span class="colorRed">*</span></label>
                                        <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                                            <span class="txt-color-757575 fs14 italic pr12 floatLeft lbl_from_bangcap">từ </span>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                                <select name="started_at_month_{{$i}}" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                                    @include('front.common.month_options',
                                                    array('selected' => isset($candidate['started_at_month_' . $i]) ? $candidate['started_at_month_' . $i] : ''))
                                                </select>
                                            </div>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                                <select name="started_at_year_{{$i}}" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                                    @include('front.common.year_options',
                                                    array('selected' => isset($candidate['started_at_year_' . $i]) ? $candidate['started_at_year_' . $i] : ''))
                                                </select>
                                            </div>
                                            <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                                            <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none">
                                                Hiện tại</p>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                                <select name="ended_at_month_{{$i}}" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                                    @include('front.common.month_options',
                                                    array('selected' => isset($candidate['ended_at_month_' . $i]) ? $candidate['ended_at_month_' . $i] : ''))
                                                </select>
                                            </div>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                                <select name="ended_at_year_{{$i}}" class="selectpicker checkCombobox box_select_filter_reg pos_relative select-style w128" data-disS="1">
                                                    @include('front.common.year_options',
                                                    array('selected' => isset($candidate['ended_at_month_' . $i]) ? $candidate['ended_at_month_' . $i] : ''))
                                                </select>
                                            </div>
                                            <div id="error_c_thoigian"
                                                 class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                                        </div>
                                        <div id="error_c_thoigian_bc"
                                             class="clearfix error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>

                                    <!-- input Chuyên ngành -->
                                    <div class="form-group mb_12">
                                        <label for="specialize_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">Chuyên
                                            ngành</label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input type="text"
                                                   class="form-control input-lg2 color-input "
                                                   name="specialize_{{$i}}" value=""/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <!-- input Loại tốt nghiệp -->
                                    <div class="form-group mb_12">
                                        <label for="graduation_type_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">
                                            Loại tốt nghiệp <span
                                                    class="colorRed">*</span>
                                        </label>
                                        <div class="fr-input-wd333 select_style31 city_select">
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                <select name="graduation_type_{{$i}}"
                                                        class="reqCheckBoxEdit tinh_thanh_reg selectpicker box_select_filter_reg pos_relative select-style select_box2 required"
                                                        data-disS="1">
                                                    @include('front.common.options',
                                                        array(
                                                            'selected' => $candidate['graduation_type_' . $i],
                                                            'options' => $graduationTypes,
                                                            'defaultName' => 'Chọn loại tốt nghiệp'
                                                            ))
                                                </select>
                                            </div>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <!-- input logo_company -->
                                    <div class="form-group mb_20">
                                        <label class="control-label-info bold txt-color-363636 fs14 w181"></label>
                                        <div class="fr_input_bangcap_chungchi">
                                            <div class="display_block btn-big plr6 pos_relactive w208 floatLeft">
                                                <input type="file" name="certificate_image_{{$i}}"
                                                       id="dinhkembangcap"
                                                       class="bt_input pos_absolute"
                                                       onchange="fileOnchange2(this)">
                                                <span class='icon_upload_file'></span>Tải
                                                ảnh bằng cấp (nếu có)
                                            </div>
                                            <span id="note_select_file_certificate_image_{{$i}}" class="select_file_note floatLeft txt-color-363636">(Bạn chưa chọn file nào)</span>
                                            <div class="note_size_photo clearfix font12 italic">
                                                (Dạng file ảnh .jpg, .gif, .png, dung
                                                lượng <=300KB)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-box-child-ths" id="add-more-certificate">
            <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM BẰNG CẤP CHỨNG CHỈ</a>
        </div>
    </div>
</div>