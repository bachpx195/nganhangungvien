@extends('front/global')

<title>Thêm tin tức</title>

@section('content')
<!-- @if (!empty($candidate['email_errors']))
	<div class="block-note-ths">
		<div class="pos-dang-ky-hotline">
			{{ $candidate['email_errors'] }}
			<div class="ln_hr"></div>
		</div>
	</div>
@endif -->

<div class="content_dangky" id="frm-login-info">
	<div class="">
		<div class="w_50 floatLeft">
			<span class="title_nguoi-tim-viec-dky borderxanh"></span>
			<span class="uppercase bold fs16 text-xanh-nuocbien">Thêm tin tức</span>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="mt8"></div>

	<div class="box-child-ths">
    <div class="head-box-child-ths">
        <span class="uppercase bold text-tim-nhat">TIN TỨC</span>
        <span class="required_r">(<label>*</label>)Thông tin bắt buộc nhập</span>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="ln_hr_head"></div>
    </div>
    <div class="clearfix"></div>
    <div aria-expanded="true" class="body-box-child-ths collapse in pb16" id="coll_knst" style="">
        <div class="mt_8" id="div-frm-new">
            <form id="frmnew" name="frmThamkhaoNew" role="form" method="POST" action="{{ route('new.form') }}" enctype="multipart/form-data">
               	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="clearfix"></div>

                <div class="form-group clearfix mb_16">
                    <label for="cv_title" class="control-label-info bold txt-color-363636 fs14 w180">
                        Tiêu đề tin tức <span class="colorRed">*</span>
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <input type="text" class="form-control input-lg2 color-input" id="new_title" value="{{ $new->title }}"
                               name="tieu_de" placeholder=""
                                />
                    </div>
                    @if ($errors->has('tieu_de'))
                        <span class="">
                            {{ $errors->first('tieu_de') }}
                        </span>
                    @endif
                </div>

                <div class="form-group clearfix mb_16">
                	 <div class="fr_ip_vtmm col-xs-12">
                        <textarea id="summernote" class="form-control" rows="3"
                                                  name="noi_dung"></textarea>
                    </div>
                    <div class="error_reg_mess clearfix err_congty display_none"></div>
                </div>


                <div class="form-group clearfix mb_16">
                    <label class="control-label-checkbox bold txt-ghi fs14 w180">
                        Miểu tả ngắn <span class="colorRed">*</span>
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <textarea id="summernote_1" class="form-control" rows="3" name="mieu_ta"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="form-group mb_20">
                    <label class="control-label-info bold txt-color-363636 fs14 w181">Hình ảnh</label>
                    <div class="fr_input_bangcap_chungchi">
                        <div class="display_block btn-big plr6 pos_relactive w208 floatLeft">
                            <input type="file" name="news_image_"
                                   id="dinhkembangcap"
                                   class="bt_input pos_absolute"
                                   onchange="fileOnchange2(this)">
                            <span class='icon_upload_file'></span>Tải
                            ảnh (nếu có)
                        </div>
                        <span id="note_select_file_news_image_" class="select_file_note floatLeft txt-color-363636">(Bạn chưa chọn file nào)</span>
                        <div class="note_size_photo clearfix font12 italic">
                            (Dạng file ảnh .jpg, .gif, .png, dung
                            lượng <=300KB)
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>

                <div class="form-group clearfix mb_16">
                    <label for="link"
                        class="control-label-info bold txt-color-363636 fs14 w180">Link 
                    </label>
                    <div class="fr_ip_vtmm col-xs-8">
                        <input type="text"
                            class="form-control input-lg2 color-input" id="password"
                            name="link"/>
                    </div>
                </div>

                <div class="form-group clearfix mb_16">
					<label for="txt_password"
						class="control-label-info bold txt-color-363636 fs14 w180">Mật
						khẩu 
					</label>
					<div class="fr_ip_vtmm col-xs-8">
						<input type="password"
							class="form-control input-lg2 color-input" id="password"
							name="mat_khau"/>
					</div>
				</div>

                <div class="form-group mb1 input-phone">
                    <label class="control-label-info bold txt-ghi fs14 w180"></label>
                    <div class="fr-input-wd153">
                        <div class="fr-input-wd153 floatLeft">
                            <button type="submit"
                                    class="mr_10 ml_10 btn btnluu w153 fwb uppercase fs16">Đăng tin
                            </button>
                        </div>
                        <div class="fr-input-wd153 floatLeft">
                            <button type="button" class="btn btnhuy w153 fwb uppercase fs16">Hủy
                            </button>
                        </div>
                    </div>
                </div>
                <!-- start block message -->
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<!-- select2 -->
<script src="{{ asset('/resources/plugin/select2/select2.min.js') }}"></script>
@include('front.candidate.candidate_form_js')

<script>
$(function() {
	jQuery("body")
	.on("click", "#btn-save", function(){

		$form = $(this).closest('form');

		var validator = $form.validate({
			ignore		: "",
			errorClass	: 'help-block has-error'
		});
	    if(validator.form()) {
	    	$form.submit();
	    } else {
	    }
	});
});
$(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')     }
    });

    $('#summernote').summernote({
	  height: 600,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,             // set maximum height of editor
	  focus: true,                  // set focus to editable area after initializing
	   toolbar: [
	    ['style', ['style']],
	    ['font', ['bold', 'italic', 'underline', 'clear']],
	    ['fontname', ['fontname']],
	    ['color', ['color']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['height', ['height']],
	    ['table', ['table']],
	    ['insert', ['link', 'picture', 'hr']],
	    ['view', ['fullscreen', 'codeview']],
	    ['help', ['help']]
	  ],
    });
    $('#summernote_1').summernote({
	  height: 100,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,             // set maximum height of editor
	  focus: false,                  // set focus to editable area after initializing summernote
	  toolbar: [
	    ['style', ['style']],
	    ['font', ['bold', 'italic', 'underline', 'clear']],
	    ['fontname', ['fontname']],
	    ['color', ['color']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['height', ['height']],
	    ['help', ['help']]
	  ],
	});
});
</script>
@endsection