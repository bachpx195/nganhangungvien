<div id="language-template" style="display: none;">
    <div class="language-item">
        <div class="row">
            <div class="ln_hr_head"></div>
        </div>
        <div id="div-frm-ngoaingu" class="">
            <div class="box-edit form display_block">
                <div class="box-ngonngu">

                    <div class="form-horizontal addformngonngu mt0 noboder">
                        <!-- input Ngoại ngữ -->
                        <div class="form-group mb8" id="div_slt_ngoaingu">
                            <label for="language_id_@{{index}}"
                                   class="control-label-info bold txt-color-363636 fs14 w181">
                                Ngoại ngữ
                            </label>
                            <div class=" col-xs-8">
                                <div class="ngoai_ngu w224 pl_10 col-xs-4 pr_2 mr_24 select_style31 city_select">
                                    <div class="filter_box font12 style-flat reg_box_tinhthanh box_tinhthanh_reg">
                                        <select name="language_id_@{{index}}">
                                            @include('front.common.options',
                                                array(
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
                                            'radios' => $scales,
                                            'radioName' => 'listen_@{{index}}'
                                            ))
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Nói</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    @include('front.common.radios',
                                        array(
                                            'radios' => $scales,
                                            'radioName' => 'speak_@{{index}}'
                                            ))
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Đọc</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    @include('front.common.radios',
                                        array(
                                            'radios' => $scales,
                                            'radioName' => 'read_@{{index}}'
                                            ))
                                </div>
                            </div>
                            <div class="form-group clearfix mb_16">
                                <label class="control-label-checkbox bold txt-ghi fs14 w180">Viết</label>
                                <div class="fr_ip_vtmm floatLeft pl_40">
                                    @include('front.common.radios',
                                        array(
                                            'radios' => $scales,
                                            'radioName' => 'write_@{{index}}'
                                            ))
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>