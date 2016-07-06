<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_tdbc" class="accordion">
            <span class="uppercase bold text-tim-nhat">TRÌNH ĐỘ & BẰNG CẤP</span>
            <span class="required_l_n">(không bắt buộc)</span>
        </a>
    </div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>

    <div id="certificate-list" class="row">
        <div class="form-group "></div>
        <?php $certificateCount = isset($candidate['certificate_count']) ? $candidate['certificate_count'] : 1;?>
        <input type="hidden" name="certificate_count" id="certificate-count" value="{{$certificateCount}}">
        @for ($i = 1; $i <= $certificateCount; $i++)
        <!-- input Tên Bằng cấp/Chứng chỉ -->
            <div class="certificate-item">
                <input type="hidden" name="certificate_id_{{$i}}"
                       value="{{isset($candidate['certificate_id_' . $i]) ? $candidate['certificate_id_' . $i] : ''}}">
                <div class="form-group ">
                    <label for="certificate_name_{{$i}}"
                           class="col-sm-2 control-label">
                        Tên Bằng cấp/Chứng chỉ
                    </label>
                    <div class="col-sm-10">
                        <input placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT..."
                               type="text"
                               class="form-control input-lg2 color-input inputTextEdit required"
                               name="certificate_name_{{$i}}"
                               value="{{isset($candidate['certificate_name_' . $i]) ? $candidate['certificate_name_' . $i] : ''}}"/>
                    </div>
                    <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <!-- input Trường/Đơn vị đào tạo -->
                <div class="form-group ">
                    <label for="training_unit_{{$i}}"
                           class="col-sm-2 control-label">Trường/Đơn vị đào tạo</label>
                    <div class="col-sm-10">
                        <input type="text"
                               class="form-control input-lg2 color-input inputTextEdit required"
                               name="training_unit_{{$i}}"
                               value="{{isset($candidate['training_unit_' . $i]) ? $candidate['training_unit_' . $i] : ''}}"/>
                    </div>
                    <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                </div>

                <div class="form-group ">
                    <label class="col-sm-2 control-label">Thời gian</label>
                    <div class="col-sm-10">
                        <span class="col-sm-1">từ </span>
                        <div class="col-sm-2">
                            <select name="started_at_month_{{$i}}" class="form-control">
                                @include('admin.common.month_options',
                                array('selected' => isset($candidate['started_at_month_' . $i]) ? $candidate['started_at_month_' . $i] : ''))
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="started_at_year_{{$i}}" class="form-control">
                                @include('admin.common.year_options',
                                array('selected' => isset($candidate['started_at_year_' . $i]) ? $candidate['started_at_year_' . $i] : ''))
                            </select>
                        </div>
                        <span class="col-sm-1">đến </span>
                        <div class="col-sm-2">
                            <select name="ended_at_month_{{$i}}" class="form-control">
                                @include('admin.common.month_options', array('selected' => isset($candidate['ended_at_month_' . $i]) ? $candidate['ended_at_month_' . $i] : ''))
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="ended_at_year_{{$i}}" class="form-control">
                                @include('admin.common.year_options',
                                array('selected' => isset($candidate['ended_at_year_' . $i]) ? $candidate['ended_at_year_' . $i] : ''))
                            </select>
                        </div>
                        <div id="error_c_thoigian"
                             class="clearfix error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                    </div>
                    <div id="error_c_thoigian_bc"
                         class="clearfix error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                </div>

                <!-- input Chuyên ngành -->
                <div class="form-group ">
                    <label for="specialize_{{$i}}"
                           class="col-sm-2 control-label">Chuyên ngành</label>
                    <div class="col-sm-10">
                        <input type="text"
                               class="form-control input-lg2 color-input "
                               name="specialize_{{$i}}"
                               value="{{isset($candidate['specialize_' . $i]) ? $candidate['specialize_' . $i] : ''}}"/>
                    </div>
                    <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <!-- input Loại tốt nghiệp -->
                <div class="form-group ">
                    <label for="graduation_type_{{$i}}"
                           class="col-sm-2 control-label">
                        Loại tốt nghiệp
                    </label>
                    <div class="col-sm-10">
                        <div class="">
                            <select name="graduation_type_{{$i}}" class="form-control">
                                @include('admin.common.options',
                                    array(
                                        'selected' => isset($candidate['graduation_type_' . $i]) ? $candidate['graduation_type_' . $i] : '',
                                        'options' => $graduationTypes,
                                        'defaultName' => 'Chọn loại tốt nghiệp'
                                        ))
                            </select>
                        </div>
                    </div>
                    <div class="error_reg_mess pl_202 clearfix fs14 italic invalid-msg display_none"></div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> &nbsp; </label>
                    <div class="col-sm-10 remove-addition-info-form"
                         data-class="certificate-item" data-index="1" data-count-id="certificate-count">
                        <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA BẰNG CẤP CHỨNG CHỈ</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <div class="footer-box-child-ths" id="add-more-certificate">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM BẰNG CẤP CHỨNG CHỈ</a>
    </div>
</div>