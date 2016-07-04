<script id="language-template" type="x-tmpl-mustache">
    <div class="language-item">
        <div class="form-group ">
            <div class="ln_hr_head"></div>
        </div>
        <!-- input Ngoại ngữ -->
        <div class="form-group" id="div_slt_ngoaingu">
            <label for="language_id_@{{index}}"
                   class="col-sm-2 control-label">
                Ngoại ngữ
            </label>
            <div class="col-sm-10 ">
                <select name="language_id_@{{index}}" class="form-control">
                    @include('front.common.options',
                        array(
                            'options' => $foreignLanguages,
                            'defaultName' => 'Chọn ngoại ngữ'
                            ))
                </select>
            </div>
        </div>
        <div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Trình độ
                </label>
                <div class="col-sm-10 ">
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
                <label class="col-sm-2 control-label">Nghe</label>
                <div class="col-sm-10 ">
                    @include('front.common.radios',
                        array(
                            'radios' => $scales,
                            'radioName' => 'listen_@{{index}}'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nói</label>
                <div class="col-sm-10 ">
                    @include('front.common.radios',
                        array(
                            'radios' => $scales,
                            'radioName' => 'speak_@{{index}}'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Đọc</label>
                <div class="col-sm-10 ">
                    @include('front.common.radios',
                        array(
                            'radios' => $scales,
                            'radioName' => 'read_@{{index}}'
                            ))
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Viết</label>
                <div class="col-sm-10 ">
                    @include('front.common.radios',
                        array(
                            'radios' => $scales,
                            'radioName' => 'write_@{{index}}'
                            ))
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"> &nbsp; </label>
            <div class="col-sm-10 remove-addition-info-form"
                 data-class="language-item" data-index="1" data-count-id="language-count">
                <a href="javascript:void(0)"><i class="fa fa-trash-o"></i> XÓA NGOẠI NGỮ</a>
            </div>
        </div>
    </div>
</script>