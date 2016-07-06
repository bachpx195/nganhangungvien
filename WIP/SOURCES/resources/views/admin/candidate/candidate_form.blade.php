@extends('global_admin')

@section('content')
<link href="{{ asset('/assets/default/css/main_ntd.css') }}" rel="stylesheet" property='stylesheet'
	  type='text/css' media='all'>
<link href="{{ asset('/assets/default/css/main2.css') }}" rel="stylesheet" property='stylesheet'
	  type='text/css' media='all'>

<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light ">
	<div class="portlet-title">
		<div class="caption font-dark">
			<i class="icon-settings font-dark"></i>
			<span class="caption-subject bold uppercase"> {{$pageTitle}}</span>
		</div>
		<div class="actions">
			<div class="btn-group">
				<span class="required_r">(<label>*</label>)Thông tin bắt buộc nhập</span>
			</div>
		</div>
	</div>
	<div class="portlet-body">

		@if (!empty($candidate['email_errors']))
			<div class="block-note-ths">
				<div class="pos-dang-ky-hotline">
					{{ $candidate['email_errors'] }}
					<div class="ln_hr"></div>
				</div>
			</div>
		@endif

		<div class="content_dangky">
			<div class="clearfix"></div>
			<div class="mt8"></div>
			<form id="candidate-form" class="form-horizontal" role="form" method="POST" action="{{$action}}"
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
				@include('admin.common.display_attach_cv', array('candidateAttachCv' => isset($candidate['attach_cv']) ? $candidate['attach_cv'] : ''))
				@include('admin.candidate.save_btn')
			</form>
		</div>

		@include('admin.candidate.candidate_form_js')
		@include('admin.candidate.template.experience_skill_template')
		@include('admin.candidate.template.certificate_template')
		@include('admin.candidate.template.language_template')
		@include('admin.candidate.template.contact_person_template')
	</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->


@endsection