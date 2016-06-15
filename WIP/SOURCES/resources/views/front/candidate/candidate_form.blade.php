@extends('front/global')

<title>Tạo hồ sơ ứng viên</title>

@section('content')
@if (!empty($candidate['email_errors']))
	<div class="block-note-ths">
		<div class="pos-dang-ky-hotline">
			{{ $candidate['email_errors'] }}
			<div class="ln_hr"></div>
		</div>
	</div>
@endif

<div class="candidate-front" id="frm-login-info">
	@include('front.candidate.send-cv-by-emaill')

	<div class="">
		<div class="w_50 floatLeft">
			<span class="title_nguoi-tim-viec-dky borderxanh"></span>
			<span class="uppercase bold fs16 text-xanh-nuocbien">Tạo hồ sơ tìm việc từng bước</span>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="mt8"></div>
	<form id="candidate-form" class="form-horizontal" role="form" method="POST" action="{{ route('candidate.form') }}"
		  name="candidate_form"  enctype="multipart/form-data">
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
		@include('front.candidate.contact_person')
		@include('front.candidate.save_btn')
	</form>
</div>

@include('front.candidate.candidate_form_js')
@include('front.candidate.template.experience_skill_template')
@include('front.candidate.template.certificate_template')
@include('front.candidate.template.language_template')
@include('front.candidate.template.contact_person_template')

@endsection