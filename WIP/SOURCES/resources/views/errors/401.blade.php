@extends('global')

<title>@lang('messages.site.title')</title>
@section('content')
<style>
	.title {
		font-size: 18px;
		margin: 40px 0px;
	}
</style>
<div class="text-center">
	<div class="title">@lang('messages.error.401', ['homepage' => route('index')])</div>
</div>
@endsection