<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_tdbc" class="accordion">
            <span class="uppercase bold text-tim-nhat">TRÌNH ĐỘ & BẰNG CẤP</span>
            <span class="required_l_n">(không bắt buộc)</span>
        </a>
    </div>
    <div class="clearfix"></div>
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
                                    <div class="form-group">
                                        <div class="ln_hr_head"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="certificate_name_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">
                                            Tên Bằng cấp/Chứng chỉ
                                        </label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT..."
                                                   type="text"
                                                   class="form-control input-lg2 color-input inputTextEdit required"
                                                   name="certificate_name_{{$i}}"
                                                   value="{{isset($candidate['certificate_name_' . $i]) ? $candidate['certificate_name_' . $i] : ''}}"/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <!-- input Trường/Đơn vị đào tạo -->
                                    <div class="form-group">
                                        <label for="training_unit_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">Trường/Đơn vị đào tạo</label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input type="text"
                                                   class="form-control input-lg2 color-input inputTextEdit required"
                                                   name="training_unit_{{$i}}"
                                                   value="{{isset($candidate['training_unit_' . $i]) ? $candidate['training_unit_' . $i] : ''}}"/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label-info bold txt-color-363636 fs14 w181">Thời gian</label>
                                        <div class="fr_ip_vtmm pl_18 select_style31 city_select">
                                            <span class="txt-color-757575 fs14 italic pr12 floatLeft lbl_from_bangcap">từ </span>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                                <select name="started_at_month_{{$i}}" class="select-style w128">
                                                    @include('front.common.month_options',
                                                    array('selected' => isset($candidate['started_at_month_' . $i]) ? $candidate['started_at_month_' . $i] : ''))
                                                </select>
                                            </div>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                                <select name="started_at_year_{{$i}}" class="select-style w128">
                                                    @include('front.common.year_options',
                                                    array('selected' => isset($candidate['started_at_year_' . $i]) ? $candidate['started_at_year_' . $i] : ''))
                                                </select>
                                            </div>
                                            <span class="txt-color-757575 fs14 italic pl_16 pr12 floatLeft lbl_from_bangcap">đến</span>
                                            <p class="kn_denhientai text-tim-nhat text-lowercase fs14  pr12 floatLeft lbl_from_bangcap display_none">
                                                Hiện tại</p>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft mr_10">
                                                <select name="ended_at_month_{{$i}}" class="select-style w128">
                                                    @include('front.common.month_options',
                                                    array('selected' => isset($candidate['ended_at_month_' . $i]) ? $candidate['ended_at_month_' . $i] : ''))
                                                </select>
                                            </div>
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg floatLeft">
                                                <select name="ended_at_year_{{$i}}" class="select-style w128">
                                                    @include('front.common.year_options',
                                                    array('selected' => isset($candidate['ended_at_year_' . $i]) ? $candidate['ended_at_year_' . $i] : ''))
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- input Chuyên ngành -->
                                    <div class="form-group">
                                        <label for="specialize_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">Chuyên
                                            ngành</label>
                                        <div class="fr_ip_vtmm col-xs-8">
                                            <input type="text"
                                                   class="form-control input-lg2 color-input "
                                                   name="specialize_{{$i}}"
                                                   value="{{isset($candidate['specialize_' . $i]) ? $candidate['specialize_' . $i] : ''}}"/>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <!-- input Loại tốt nghiệp -->
                                    <div class="form-group">
                                        <label for="graduation_type_{{$i}}"
                                               class="control-label-info bold txt-color-363636 fs14 w181">
                                            Loại tốt nghiệp
                                        </label>
                                        <div class="fr-input-wd333 select_style31 city_select">
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                <select name="graduation_type_{{$i}}"
                                                        class="select-style required"
                                                        data-disS="1">
                                                    @include('front.common.options',
                                                        array(
                                                            'selected' => $candidate['graduation_type_' . $i],
                                                            'options' => $graduationTypes,
                                                            'defaultName' => '-- Chọn loại tốt nghiệp --'
                                                            ))
                                                </select>
                                            </div>
                                        </div>
                                        <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- Remove experience -->
                                    <div class="form-group">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
                                        <div class="fr_ip_vtmm col-xs-8 remove-addition-info-form"
                                             data-class="certificate-item" data-index="1" data-count-id="certificate-count">
                                            <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA BẰNG CẤP CHỨNG CHỈ</a>
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