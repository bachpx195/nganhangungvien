@extends('front.global')

<title>@lang('messages.site.title')</title>
@section('content')
<style>
	.title {
		font-size: 18px;
		margin: 40px 0px;
	}
	 @if (Auth::check() && Auth::user()->user_type == 'employer')
	.content_cols{
		min-height: 600px;
	}
	@else
	.content_cols{
		min-height: 310px;
	}
	 @endif
</style>
<div class="text-center">
	<div class="title">@lang('messages.error.404', ['homepage' => route('home')])</div>
</div>
@endsection