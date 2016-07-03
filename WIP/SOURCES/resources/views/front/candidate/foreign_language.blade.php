<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_nn" class="accordion">
            <span class="uppercase bold text-tim-nhat">NGOẠI NGỮ</span>
            <span class="required_l_n">(không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <?php $languageCount = isset($candidate['language_count']) ? $candidate['language_count'] : 1;?>
    <input type="hidden" name="language_count" id="language-count" value="{{$languageCount}}">
    <div id="language-list">
        @for ($i = 1; $i <= $languageCount; $i++)
            <div aria-expanded="true" class="body-box-child-ths collapse in language-item">
                <div class="form-group">
                    <div class="ln_hr_head"></div>
                </div>
                <div id="div-frm-ngoaingu" class="">
                    <div class="box-edit form display_block">
                        <div class="box-ngonngu">
                            <div class="form-horizontal addformngonngu mt0 noboder">
                                <!-- input Ngoại ngữ -->
                                <div class="form-group mb8" id="div_slt_ngoaingu">
                                    <label for="language_id_{{$i}}"
                                           class="control-label-info bold txt-color-363636 fs14 w181">
                                        Ngoại ngữ
                                    </label>
                                    <div class=" col-xs-8">
                                        <div class="ngoai_ngu w224 pl_10 col-xs-4 pr_2 mr_24 select_style31 city_select">
                                            <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                                <select name="language_id_{{$i}}"
                                                        class="select-style"
                                                        data-disS="1"
                                                        data-select-class="select_language">
                                                    @include('front.common.options',
                                                        array(
                                                            'selected' => $candidate['language_id_' . $i],
                                                            'options' => $foreignLanguages,
                                                            'defaultName' => '-- Chọn ngoại ngữ --'
                                                            ))
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="clearfix"></div>
                                    <div class="form-group clearfix mt16">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180">
                                            Trình độ
                                        </label>
                                        <div class="fr_ip_vtmm floatLeft pl_40">
                                            <div class="demo-list sex-lable khanang">
                                                Tốt
                                            </div>
                                            <div class="demo-list sex-lable khanang mr_10">
                                                Khá
                                            </div>
                                            <div class="demo-list sex-lable khanang mr_10">
                                                Trung bình
                                            </div>
                                            <div class="demo-list sex-lable khanang">
                                                Kém
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix mb_16">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180">Nghe</label>
                                        <div class="fr_ip_vtmm floatLeft pl_40">
                                            @include('front.common.radios',
                                                array(
                                                    'selected' => $candidate['listen_' . $i],
                                                    'radios' => $scales,
                                                    'radioName' => 'listen_' . $i
                                                    ))
                                        </div>
                                    </div>
                                    <div class="form-group clearfix mb_16">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180">Nói</label>
                                        <div class="fr_ip_vtmm floatLeft pl_40">
                                            @include('front.common.radios',
                                                array(
                                                    'selected' => $candidate['speak_' . $i],
                                                    'radios' => $scales,
                                                    'radioName' => 'speak_' . $i
                                                    ))
                                        </div>
                                    </div>
                                    <div class="form-group clearfix mb_16">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180">Đọc</label>
                                        <div class="fr_ip_vtmm floatLeft pl_40">
                                            @include('front.common.radios',
                                                array(
                                                    'selected' => $candidate['read_' . $i],
                                                    'radios' => $scales,
                                                    'radioName' => 'read_' . $i
                                                    ))
                                        </div>
                                    </div>
                                    <div class="form-group clearfix mb_16">
                                        <label class="control-label-checkbox bold txt-ghi fs14 w180">Viết</label>
                                        <div class="fr_ip_vtmm floatLeft pl_40">
                                            @include('front.common.radios',
                                                array(
                                                    'selected' => $candidate['write_' . $i],
                                                    'radios' => $scales,
                                                    'radioName' => 'write_' . $i
                                                    ))
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Remove experience -->
                <div class="form-group">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180"> &nbsp; </label>
                    <div class="fr_ip_vtmm col-xs-8 remove-addition-info-form"
                         data-class="language-item" data-index="1" data-count-id="language-count">
                        <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA NGOẠI NGỮ</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        @endfor
    </div>

    <div class="box-ngonngu2"></div>
    <div class="footer-box-child-ths" id="add-more-languages">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM NGOẠI NGỮ</a>
    </div>
</div>