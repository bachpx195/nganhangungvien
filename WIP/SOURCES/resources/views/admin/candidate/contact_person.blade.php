<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_ntk"
           class="accordion">
            <span class="uppercase bold text-tim-nhat">NGƯỜI THAM KHẢO</span>
            <span class="required_l_n">(không bắt buộc)</span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in" id="coll_ntk" style="">
        <div class="corner_top" id="div-frm-thamkhao">
            <div id="contact-person-list" class="mb_22 pt_2">
                <?php $contactPersonCount = isset($candidate['contact_person_count']) ? $candidate['contact_person_count'] : 1;?>
                <input type="hidden" name="contact_person_count" id="contact-person-count" value="{{$contactPersonCount}}">
                @for ($i = 1; $i <= $contactPersonCount; $i++)
                        <input type="hidden" name="contact_person_id_{{$i}}" value="{{isset($candidate['contact_person_id_' . $i]) ? $candidate['contact_person_id_' . $i] : ''}}">
                    <div class="form-horizontal noboder addformthamkhao pt_16 pb_16">
                        <div class="form-group">
                            <label for="contact_person_full_name_{{$i}}" class="col-sm-2 control-label">
                                Họ và tên
                            </label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control"
                                       name="contact_person_full_name_{{$i}}"
                                       value="{{isset($candidate['contact_person_full_name_' . $i]) ? $candidate['contact_person_full_name_' . $i] : ''}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_person_company_{{$i}}" class="col-sm-2 control-label">
                                Công ty/Tổ chức
                            </label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control"
                                       name="contact_person_company_{{$i}}"
                                       value="{{isset($candidate['contact_person_company_' . $i]) ? $candidate['contact_person_company_' . $i] : ''}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Số điện thoại
                            </label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control"
                                       name="contact_person_phone_number_{{$i}}"
                                       value="{{isset($candidate['contact_person_phone_number_'. $i]) ? $candidate['contact_person_phone_number_'. $i] : ''}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_person_office_{{$i}}" class="col-sm-2 control-label">
                                Chức vụ
                            </label>
                            <div class="col-sm-10">
                                <input name="contact_person_office_{{$i}}" type="text"
                                       class="form-control"
                                      value="{{isset($candidate['contact_person_office_' . $i]) ? $candidate['contact_person_office_' . $i] : ''}}"/>
                            </div>
                            <div class="error_reg_mess clearfix fs14 italic invalid-msg display_none"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> &nbsp; </label>
                            <div class="col-sm-10 remove-addition-info-form"
                                 data-class="addformthamkhao" data-index="1" data-count-id="contact-person-count">
                                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA NGƯỜI THAM KHẢO</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="box-ngonngu2"></div>
    <div class="footer-box-child-ths" id="add-more-contact-person">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM NGƯỜI THAM KHẢO </a>
    </div>
</div>