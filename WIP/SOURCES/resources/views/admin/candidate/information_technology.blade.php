<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_tdth"
           class="accordion">
            <span class="uppercase bold text-tim-nhat">TRÌNH ĐỘ TIN HỌC</span>
            <span class="required_l_n">(không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>

    <div id="div-frm-tinhoc" class="mt0" id="listnews-bc">
        <div class="form-horizontal addformngonngu noboder pb_0">
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Tin học văn phòng
                </label>
                <div class="col-sm-10">
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

            <div class="form-group">
                <label class="col-sm-2 control-label">
                    MS Word </label>
                <div class="col-sm-10">
                    @include('front.common.radios',
                        array(
                            'selected' => isset($candidate['word']) ? $candidate['word'] : '',
                            'radios' => $scales,
                            'radioName' => 'word'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    MS Excel </label>
                <div class="col-sm-10">
                    @include('front.common.radios',
                        array(
                            'selected' => isset($candidate['excel']) ? $candidate['excel'] : '',
                            'radios' => $scales,
                            'radioName' => 'excel'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    MS Power Point </label>
                <div class="col-sm-10">
                    @include('front.common.radios',
                        array(
                            'selected' => isset($candidate['power_point']) ? $candidate['power_point'] : '',
                            'radios' => $scales,
                            'radioName' => 'power_point'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    MS Outlook </label>
                <div class="col-sm-10">
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
</div>