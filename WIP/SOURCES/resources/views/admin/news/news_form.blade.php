@extends('global_admin')
<title>@lang('messages.site.title')</title>
@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Quản lý tin tức </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ route('admin.news.form') }}" class="form-horizontal form-row-seperated" role="form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="id" name="id" value="{{ $news->id }}" />
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-2">Tiêu đề <span class="colorRed">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control input-lg2 color-input" id="new_title" value="{{ old('tieu_de') != null ? old('tieu_de') : $news->title }}" name="tieu_de" placeholder="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Miêu tả ngắn</label>
                    <div class="col-md-10">
						<textarea id="mieu_ta" class="form-control" rows="3" name="mieu_ta"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Nội dung</label>
                    <div class="col-md-10">
						<textarea id="noi_dung" class="form-control" rows="3"
                                                  name="noi_dung"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Upload Hình ảnh</label>
                    <div class="col-md-10">
						<div class="col-md-9">
						    <div class="fileinput fileinput-new" data-provides="fileinput">
						        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
						        <div>
						            <span class="btn red btn-outline btn-file">
						                <span class="fileinput-new"> Chọn hình ảnh </span>
						                <span class="fileinput-exists"> Thay đổi </span>
						                <input  type="file" name=""> </span>
						            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Hủy </a>
						        </div>
						    </div>
						    <div class="clearfix margin-top-10">
						        <span class="label label-success">LƯU Ý!</span> (Dạng file ảnh .jpg, .gif, .png ) </div>
						</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Đường dẫn URL </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control input-lg2 color-input" id="link" value="{{ old('link') != null ? old('link') : $news->link }}" name="link" placeholder="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Mật khẩu </label>
                    <div class="col-md-5">
                        <input type="password" class="form-control input-lg2 color-input" id="password" name="mat_khau" value="{{ old('mat_khau') != null ? old('mat_khau') : $news->password }}"/>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" id="btn-save" class="btn btn-circle green" value="Cập nhật">
                        <button type="button" class="btn btn-circle grey-salsa btn-outline" onClick="window.location='{{ route('admin.news.list') }}'">Hủy</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
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

    $('#noi_dung').summernote({
	  height: 300,                 // set editor height
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
    $('#mieu_ta').summernote({
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