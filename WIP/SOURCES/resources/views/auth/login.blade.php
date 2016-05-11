@extends('global')
<title>@lang('messages.auth.login')</title>

@section('content')
<style>
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
		<div class="page-heading">@lang('messages.auth.login')</div>
		<div class="page-body">
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

						<input name="_token" type="hidden" value="{!! csrf_token() !!}" />

						<div class="form-group">
							<label class="col-md-3 control-label">@lang('messages.auth.form.email')</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" data-rule-required="true">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">@lang('messages.auth.form.password')</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" data-rule-required="true">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" checked="checked"> @lang('messages.auth.form.remember')
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" class="btn btn-primary">@lang('messages.auth.login')</button>

								<a class="btn-link" href="{{ url('/password/email') }}">@lang('messages.auth.form.forgetpassword')</a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-9 col-md-offset-3 text-red">
								@if (count($errors) > 0)
									@foreach ($errors->all() as $error)
										{{ $error }}
									@endforeach
								@endif
							</div>

							<div class="col-md-9 col-md-offset-3" style="display: none">
								<hr style="margin: 5px 0px 10px" />
								@lang('messages.auth.login.register')
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$('input[name=email]').focus();

	jQuery("body")
	.on("click", "button[type=submit]", function(){

		$e = $(this);
		$form = $e.closest('form');

		var validator = $form.validate({
			ignore		: "",
			errorClass	: 'help-block has-error'
		});
	    if(validator.form()) {
	    	$e.closest('form').submit();
	    }

	    return false;
	});
});
</script>
@endsection
