@extends('global')

<title>@lang('messages.candidate.form')</title>

@section('content')

<h3 class="page-title">@lang('messages.candidate.form')</h3>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		@lang('messages.form.global.error')<br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form id="candidate" class="form-horizontal" role="form" method="POST" action="{{ route('candidate.form') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_init" value="1">
	<input type="hidden" name="full_name" value="AB" />
	<input type="hidden" name="email" value="ab@a.com" />

	<div class="form-group">
		<div class="col-md-offset-2 col-md-9">
			<input type="submit" id="btn-save" class="btn btn-primary" value="@lang('messages.form.global.save')">
		</div>
	</div>
</form>

<!-- select2 -->
<script src="{{ asset('/resources/plugin/select2/select2.min.js') }}"></script>

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