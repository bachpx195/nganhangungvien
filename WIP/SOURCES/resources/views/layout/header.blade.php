<div class="container">
	<a href="{{ url('/') }}" id="brand"></a>
	
	<ul class='main-nav'>
		@if (!Auth::guest())

		@endif
	</ul>
	
	<div class="user">
		<ul class="icon-nav" style="display:none">
			<li class="language-select">
				@if (!Session::has('locale') || Session::get('locale') == 'vi')
					<a data-toggle="dropdown" class="language-toggle" href="#en" data-language="en">
						<i class="fa fa-globe fa-lg fa-fw"></i>
						<span>@lang('messages.lang.en')</span>
					</a>
				@else
					<a data-toggle="dropdown" class="language-toggle" href="#vi" data-language="vi">
						<i class="fa fa-globe fa-lg fa-fw"></i>
						<span>@lang('messages.lang.vi')</span>
					</a>
				@endif
			</li>
		</ul>
		@if (Auth::guest())
			<ul class="icon-nav">
				<li>
					<a href="{{ url('/auth/login') }}" >
						<span>@lang('messages.menu.signin')</span>
					</a>
				</li>
			</ul>
		@else
			<div class="dropdown">
				<a href="" class='dropdown-toggle' data-toggle="dropdown">
					<i class="fa fa-user" style="line-height: 26px"></i>
					{{ Auth::user()->username }}
				</a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="{{ url('/auth/logout') }}">@lang('messages.menu.signout')</a>
					</li>
				</ul>
			</div>
		@endif
		
	</div>
</div>