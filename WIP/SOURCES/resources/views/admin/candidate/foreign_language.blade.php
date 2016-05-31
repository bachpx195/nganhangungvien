<div class="box-child-ths">
    <div class="head-box-child-ths">
        <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion"
           href="#coll_nn" class="accordion">
            <span class="uppercase bold text-tim-nhat">NGOẠI NGỮ</span>
            <span class="required_l_n">(không bắt buộc)</span>
            <span class="required_r"><i class="icn-main-menu icn-arr-down"></i></span>
        </a>
    </div>

    <?php $languageCount = isset($candidate['language_count']) ? $candidate['language_count'] : 1;?>
    <input type="hidden" name="language_count" id="language-count" value="{{$languageCount}}">
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>

    <div id="language-list" class="row">
        <div class="form-group "> </div>
        @for ($i = 1; $i <= $languageCount; $i++)
            <div class="form-horizontal">
                <!-- input Ngoại ngữ -->
                <div class="form-group" id="div_slt_ngoaingu">
                    <label for="language_id_{{$i}}"
                           class="col-sm-2 control-label">
                        Ngoại ngữ
                    </label>
                    <div class="col-sm-10 ">
                        <select name="language_id_{{$i}}" class="form-control">
                            @include('admin.common.options',
                                array(
                                    'selected' => isset($candidate['language_id_' . $i]) ? $candidate['language_id_' . $i] : '',
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
                            @include('admin.common.radios',
                                array(
                                    'selected' => isset($candidate['listen_' . $i]) ? $candidate['listen_' . $i] : '',
                                    'radios' => $scales,
                                    'radioName' => 'listen_' . $i
                                    ))
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nói</label>
                        <div class="col-sm-10 ">
                            @include('admin.common.radios',
                                array(
                                    'selected' => isset($candidate['speak_' . $i]) ? $candidate['speak_' . $i] : '',
                                    'radios' => $scales,
                                    'radioName' => 'speak_' . $i
                                    ))
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Đọc</label>
                        <div class="col-sm-10 ">
                            @include('admin.common.radios',
                                array(
                                    'selected' => isset($candidate['read_' . $i]) ? $candidate['read_' . $i] : '',
                                    'radios' => $scales,
                                    'radioName' => 'read_' . $i
                                    ))
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Viết</label>
                        <div class="col-sm-10 ">
                            @include('admin.common.radios',
                                array(
                                    'selected' => isset($candidate['write_' . $i]) ? $candidate['write_' . $i] : '',
                                    'radios' => $scales,
                                    'radioName' => 'write_' . $i
                                    ))
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="footer-box-child-ths" id="add-more-languages">
        <a href="javascript:void(0)"><i class="icn-main-menu icn-add-ths"></i>THÊM NGOẠI NGỮ</a>
    </div>
</div>