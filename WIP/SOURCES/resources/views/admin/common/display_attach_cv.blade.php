<?php
    use \App\Libs\Constants as Constants;
?>
@if(file_exists( public_path() . '/candidate/cv/' . $candidateAttachCv ) && $candidateAttachCv)
    <div class="box-child-ths">
        <div class="head-box-child-ths">
            <a aria-expanded="true" data-toggle="collapse" data-parent="#accordion" href="#coll_tdth"
               class="accordion">
                <span class="uppercase bold text-tim-nhat">CV của ứng viên</span>
                <span class="required_l_n"></span>
            </a>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <div style="text-align: center;">
                    <iframe name="2" width="99%" height="800px"
                            src='{{Constants::GOOGLE_DOC_PATH}}?url={{URL::to('/') . '/candidate/cv/' . $candidateAttachCv}}&embedded=true' frameborder='0'></iframe>
                </div>
            </div>
            <div class="form-group"></div>
        </div>
    </div>
@endif