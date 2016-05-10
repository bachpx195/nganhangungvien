<!DOCTYPE html>
<html lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="vi" />
	
	<meta property="og:url" content="{{ URL::current() }}" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<meta property="fb:admins" content="100001875340414"/>
	<meta property="fb:app_id" content="1120749501272981"/>
	
	<title>@yield('title')</title>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('/resources/js/bootstrap/bootstrap.min.css') }}">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="{{ asset('/resources/js/jquery-ui/jquery-ui.min.css') }}">
	<!-- select2 -->
	<link rel="stylesheet" href="{{ asset('/resources/plugin/select2/select2.css') }}" />
	
	<!-- KendoUI CSS -->
	<link rel="stylesheet" href="{{ asset('/resources/kendoui/styles/kendo.common-material.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/resources/kendoui/styles/kendo.material.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('/resources/toastr/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/resources/nprogress/nprogress.css') }}">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('/resources/css/style.css') }}">
	<!-- Color CSS -->
	<link rel="stylesheet" href="{{ asset('/resources/css/themes.css') }}">
	
	<link rel="stylesheet" href="{{ asset('/resources/css/font-awesome.min.css') }}">

	<!-- jQuery -->
	<script src="{{ asset('/resources/js/jquery/jquery.min.js') }}"></script>
	<!-- Nice Scroll -->
	<script src="{{ asset('/resources/plugin/jquery/jquery.nicescroll.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('/resources/js/jquery-ui/jquery-ui.js') }}"></script>
	<!-- slimScroll -->
	<script src="{{ asset('/resources/plugin/jquery/jquery.slimscroll.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('/resources/js/bootstrap/bootstrap.min.js') }}"></script>
	<!-- Form -->
	<script src="{{ asset('/resources/plugin/jquery/jquery.form.min.js') }}"></script>

	<!-- Theme framework -->
	<script src="{{ asset('/resources/js/eakroko.min.js') }}"></script>
	<!-- Theme scripts -->
	<script src="{{ asset('/resources/js/application.min.js') }}"></script>
	
	<!-- Kendo UI -->
	<script src="{{ asset('/resources/kendoui/js/kendo.all.min.js') }}"></script>
	
	<script src="{{ asset('/resources/toastr/toastr.min.js') }}"></script>
	<script src="{{ asset('/resources/nprogress/nprogress.js') }}"></script>

	<!--[if lte IE 9]>
		<script src="{{ asset('/resources/plugin/jquery/jquery.placeholder.min.js') }}"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	
	<!-- Validation -->
	<script src="{{ asset('/resources/plugin/validation/jquery.validate.min.js') }}" ></script>
	<script src="{{ asset('/resources/plugin/validation/additional-methods.min.js') }}" ></script>
	
	<script>
	jQuery.extend(jQuery.validator.messages, {
		required: '@lang('validation.required', ['attribute' => ''])',
		remote: "Please fix this field.",
		email: jQuery.validator.format("@lang('validation.email')"),
		url: "Please enter a valid URL.",
		date: "@lang('validation.date', ['format' => 'dd/mm/YYYY'])",
		dateISO: "Please enter a valid date (ISO).",
		number: jQuery.validator.format("@lang('validation.numeric')"),
		digits: jQuery.validator.format("@lang('validation.digits')"),
		creditcard: "Please enter a valid credit card number.",
		equalTo: '@lang('validation.equal_password')',
		accept: "Please enter a value with a valid extension.",
		maxlength: jQuery.validator.format("@lang('validation.max.string', ['attribute' => '', 'max' => '{0}'])"),
		minlength: jQuery.validator.format("@lang('validation.min.string', ['attribute' => '', 'min' => '{0}'])"),
		rangelength: jQuery.validator.format("@lang('validation.between.string', ['min' => '{0}', 'max' => '{1}'])"),
		range: jQuery.validator.format("Please enter a value between {0} and {1}."),
		max: jQuery.validator.format("@lang('validation.max.numeric')"),
		min: jQuery.validator.format("@lang('validation.min.numeric')")
	});
	</script>
</head>

<body data-layout="fixed" no-sidebar="true">
	
	<div id="navigation">
		@include('layout.header')
	</div>
	
	<div id="container-page" class="container nav-hidden">
		<div id="page-header" style="height: 30px;"></div>
		<div id="main" style="margin-left: 0px;">
			<div class="container-fluid">
				@yield('header')
				@yield('content')
			</div>
		</div>
		<div id="page-footer">
			@yield('footer')
		</div>
	</div>
	
	<div id="footer">
		@include('layout.footer')
	</div>
	
	<div id="modal"></div>
	
</body>

</html>