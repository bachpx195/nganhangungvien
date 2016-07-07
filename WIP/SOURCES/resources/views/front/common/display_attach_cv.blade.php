<?php
    use \App\Libs\Constants as Constants;
?>
@if(file_exists( public_path() . '/candidate/cv/' . $candidateAttachCv ) && $candidateAttachCv)
    <div class="job_detail box_tab bg_white box_shadow pt_16 pl_14 pr_14 pb_16 text_grey2 ml_12 mr_12 mt_16">
        <div class="box-ho-so pb_12">
            <div class="row">
                <div class="col-xs-12 pl_0 pr_0">
                    <div class="font16 bolder">
                        CV của ứng viên
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 pl_0 pr_0 mt16">
                    <iframe name="2" width="99%" height="800px"
                            src='{{Constants::GOOGLE_DOC_PATH}}?url={{URL::to('/') . '/candidate/cv/' . $candidateAttachCv}}&embedded=true' frameborder='0'></iframe>

                </div>
            </div>
        </div>
    </div>
@endif