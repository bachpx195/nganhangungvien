<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_tdth"
           class="accordion">
            <span class="uppercase bold text-tim-nhat">TRÌNH ĐỘ TIN HỌC</span>
            <span class="required_l_n">(không bắt buộc)</span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in pb16" id="coll_tdth" style="">
        <div id="div-frm-tinhoc" class="mt0" id="listnews-bc">
            <div class="form-horizontal addformngonngu noboder pb_0">
                <div class="form-group clearfix">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        Tin học văn phòng
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
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        MS Word </label>
                    <div class="fr_ip_vtmm floatLeft pl_40">
                        @include('front.common.radios',
                            array(
                                'selected' => isset($candidate['word']) ? $candidate['word'] : '',
                                'radios' => $scales,
                                'radioName' => 'word'
                                ))
                    </div>
                </div>
                <div class="form-group clearfix mb_16">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        MS Excel </label>
                    <div class="fr_ip_vtmm floatLeft pl_40">
                        @include('front.common.radios',
                            array(
                                'selected' => isset($candidate['excel']) ? $candidate['excel'] : '',
                                'radios' => $scales,
                                'radioName' => 'excel'
                                ))
                    </div>
                </div>
                <div class="form-group clearfix mb_16">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        MS Power Point </label>
                    <div class="fr_ip_vtmm floatLeft pl_40">
                        @include('front.common.radios',
                            array(
                                'selected' => isset($candidate['power_point']) ? $candidate['power_point'] : '',
                                'radios' => $scales,
                                'radioName' => 'power_point'
                                ))
                    </div>
                </div>
                <div class="form-group clearfix mb_16">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        MS Outlook </label>
                    <div class="fr_ip_vtmm floatLeft pl_40">
                        @include('front.common.radios',
                            array(
                                'selected' => isset($candidate['out_look']) ? $candidate['out_look'] : '',
                                'radios' => $scales,
                                'radioName' => 'out_look'
                                ))
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- End -->
    </div>
</div>