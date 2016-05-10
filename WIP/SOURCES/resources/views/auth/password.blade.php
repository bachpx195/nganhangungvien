@extends('global')
<title>@lang('messages.auth.reset.title')</title>

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
		<div class="page-heading">@lang('messages.auth.reset.title')</div>
		<div class="page-body">
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

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

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">@lang('messages.auth.reset.email')</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							@lang('messages.auth.reset.send_password')
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
