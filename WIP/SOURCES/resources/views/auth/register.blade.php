@extends('global')
<title>@lang('messages.menu.register')</title>

@section('content')
<style>
#main {
    width: 80%;
    margin: 0 auto !important;
    padding-top: 15px;
}

.page-heading {
    background: none repeat scroll 0 0 #ea1e30;
    border-left: 1px solid #dd1e30;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    height: 36px;
    line-height: 36px;
    margin-left: -20px;
    padding: 0 15px;
}

.page-body {
	margin-top: 30px
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="page-heading">@lang('messages.auth.register')</div>
		<div class="page-body">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_init" value="1">

				<div class="form-group">
					<label class="col-md-3 control-label">
						@lang('messages.auth.form.name')
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" data-rule-required="true">
						<span id="name-suggest" class="help-block has-error valid" style="display:none">
							@lang('messages.form.profile.name.suggest')
							<a href="#"></a>
						</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">
						@lang('messages.auth.form.email')
					</label>
					<div class="col-md-8">
						<input type="email" class="form-control" name="email" value="{{ old('email') }}" data-rule-required="true">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">
						@lang('messages.auth.form.password')
					</label>
					<div class="col-md-8">
						<input type="password" class="form-control" name="password" data-rule-required="true">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">
						@lang('messages.auth.form.confirmpassword')
					</label>
					<div class="col-md-8">
						<input type="password" class="form-control" name="password_confirmation" data-rule-required="true">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-8 col-md-offset-3">
						<input type="checkbox" name="receive_email" value="1" @if(old('_init') != 1 || old('receive_email') == 1) checked="checked" @endif>
						@lang('messages.auth.register.receive')
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-8 col-md-offset-3">
						<button id="btn-submit" type="submit" class="btn btn-primary">
							@lang('messages.auth.register')
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
jQuery.extend(jQuery.validator.messages, {
	required: '@lang('validation.filled', ['attribute' => ''])'
});

jQuery("body")
.on("click", "#btn-submit", function(){
	
	$form = $(this).closest('form');
	
	var validator = $form.validate({
		ignore		: "", 
		errorClass	: 'help-block has-error'
	});
    if(validator.form()) {
    	$form.submit();
    } else {
    }
})
.on("change", "form #name", function (e) {
	
	var name = $(this).val()
	var name_upper = upperFirstCharacter(name);
	if (name != name_upper) {
		$("#name-suggest a").html(name_upper);
		$("#name-suggest").show();
	} else {
		$("#name-suggest").hide();
	}
})
.on("click", "form #name-suggest a", function (e) {
	e.preventDefault();
	$("#name").val($(this).text());
	$("#name-suggest").hide();
});
</script>
@endsection
