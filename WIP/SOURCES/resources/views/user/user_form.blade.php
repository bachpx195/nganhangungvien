@extends('global')

<title>@lang('messages.user.form')</title>

@section('content')

<h3 class="page-title">@lang('messages.user.form')</h3>

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

<form id="user" class="form-horizontal" role="form" method="POST" action="{{ route('user.form') }}">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" id="id" name="id" value="{{ $user->id }}" />
	<input type="hidden" name="_init" value="1">
	
	<div class="form-group">
		<label class="col-md-2 control-label">
			<strong class="text-red">*</strong>
			@lang('messages.user.model.username')
		</label>
		<div class="col-md-4">
			@if($user->id != null)
				<label class="control-label">{{ $user->username }}</label>
				<input type="hidden" class="form-control" name="username" value="{{ $user->username }}">
			@else
				<input type="text" class="form-control" name="username" value="{{ old('username') }}" data-rule-required="true">
			@endif
			
		</div>
	</div>
	
	@if($user->id != null)
		<div class="form-group">
			<label class="col-md-2 control-label">
				@lang('messages.user.model.password')
			</label>
			<div class="col-md-4">
				<input type="password" class="form-control" name="password">
			</div>
		</div>
	@else
		<div class="form-group">
			<label class="col-md-2 control-label">
				<strong class="text-red">*</strong>
				@lang('messages.user.model.password')
			</label>
			<div class="col-md-4">
				<input type="password" class="form-control" name="password" data-rule-required="true">
			</div>
		</div>
	@endif
	
	<div class="form-group">
		<label class="col-md-2 control-label">
			<strong class="text-red">*</strong>
			@lang('messages.user.model.full_name')
		</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="full_name" value="{{ old('full_name') != null ? old('full_name') : $user->full_name }}"
				data-rule-required="true">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label">
			<strong class="text-red">*</strong>
			@lang('messages.user.model.email')
		</label>
		<div class="col-md-4">
			<input type="email" class="form-control" name="email" value="{{ old('email') != null ? old('email') : $user->email }}"
				data-rule-required="true">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label">
			@lang('messages.user.model.phone')
		</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="phone" value="{{ old('phone') != null ? old('phone') : $user->phone }}">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-2 control-label">
			<strong class="text-red">*</strong>
			@lang('messages.user.model.role')
		</label>
		<div class="col-md-4">
			<select id="role_id" name="role_id" class="select2-me wid100" data-rule-required="true">
				<option value="">@lang('messages.form.global.selection')</option>
				@foreach($roleList as $role)
					@if($user->role_id == $role->id || old('role_id') == $role->id)
						<option value="{{ $role->id }}" selected="selected">{{ $role->name }}</option>
					@else
						<option value="{{ $role->id }}">{{ $role->name }}</option>
					@endif
				@endforeach
			</select>
		</div>
		<div class="col-md-4">
			<span id="loading" class="loading"></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-offset-2 col-md-9">
			<input type="submit" id="btn-save" class="btn btn-primary" value="@lang('messages.form.global.save')">
			<a class="btn" href="{{ route('user.list') }}" type="button">@lang('messages.form.global.cancel')</a>
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