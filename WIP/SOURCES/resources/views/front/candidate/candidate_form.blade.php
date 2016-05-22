@extends('front/global')

<title>Tạo hồ sơ ứng viên</title>

@section('content')
<div class="content_dangky" id="frm-login-info">
	<div class="">
		<div class="w_50 floatLeft">
			<span class="title_nguoi-tim-viec-dky borderxanh"></span>
			<span class="uppercase bold fs16 text-xanh-nuocbien">Tạo hồ sơ tìm việc từng bước</span>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="mt8"></div>

	<div class="block-content div-frm-hoso" id="frm-login-info">
		<div class="mb8">
			<div class="center-p12p24 ">
				@include('front.candidate.general_information')

				@include('front.candidate.experience_skill')
				<div class="clearfix"></div>

				@include('front.candidate.certificate')
			</div>
		</div>
		@include('front.candidate.foreign_language')
		<div class="clearfix"></div>
	</div>

	@include('front.candidate.information_technology')
	<div class="clearfix"></div>

	@include('front.candidate.skill_forte')
	<div class="clearfix"></div>
	@include('front.candidate.contact_person')
</div>

@include('front.candidate.candidate_form_js')
<!-- select2 -->
<script src="{{ asset('/resources/plugin/select2/select2.min.js') }}"></script>
@include('front.candidate.validator.general_information_js')

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
</script>
@endsection