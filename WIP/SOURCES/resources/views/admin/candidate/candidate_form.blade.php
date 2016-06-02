@extends('global_admin')

<title>Tạo hồ sơ ứng viên</title>

@section('content')
<link href="{{ asset('/assets/default/css/main_ntd.css') }}" rel="stylesheet" property='stylesheet'
	  type='text/css' media='all'>
<link href="{{ asset('/assets/default/css/main2.css') }}" rel="stylesheet" property='stylesheet'
	  type='text/css' media='all'>

@if (!empty($candidate['email_errors']))
	<div class="block-note-ths">
		<div class="pos-dang-ky-hotline">
			{{ $candidate['email_errors'] }}
			<div class="ln_hr"></div>
		</div>
	</div>
@endif

<div class="content_dangky">
	<div class="">
		<div class="w_50 floatLeft">
			<span class="title_nguoi-tim-viec-dky borderxanh"></span>
			<span class="uppercase bold fs16 text-xanh-nuocbien">Tạo hồ sơ tìm việc từng bước</span>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="mt8"></div>
	<form id="candidate-form" class="form-horizontal" role="form" method="POST" action="{{ route('admin.candidate.form') }}"
		  name="candidate_form"  enctype="multipart/form-data">
		<div class="block-content div-frm-hoso">
			<div class="mb8">
				<div class="center-p12p24 ">
					@include('admin.candidate.general_information')

					@include('admin.candidate.experience_skill')
					<div class="clearfix"></div>

					@include('admin.candidate.certificate')
				</div>
			</div>
			@include('admin.candidate.foreign_language')
			<div class="clearfix"></div>
		</div>

		@include('admin.candidate.information_technology')
		<div class="clearfix"></div>
		@include('admin.candidate.contact_person')
		@include('admin.candidate.save_btn')
	</form>
</div>

@include('admin.candidate.candidate_form_js')
@include('admin.candidate.template.experience_skill_template')
@include('admin.candidate.template.certificate_template')
@include('admin.candidate.template.language_template')
@include('admin.candidate.template.contact_person_template')

@endsection