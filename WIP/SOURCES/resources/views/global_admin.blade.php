<!DOCTYPE html>
<html lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="vi" />
	
	<meta property="og:url" content="{{ URL::current() }}" />


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<title>@yield('title')</title>

	<!-- THANHLV START ADD 2016/05/11 -->

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="{{ asset('/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="{{ asset('/assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('/assets/layouts/layout2/css/custom.css') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('/assets/dist/summernote.css') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('/assets/default/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('/assets/default/kendoui/styles/kendo.common-material.min.css') }}" rel="stylesheet" property='stylesheet'
		  type='text/css' media='all'>
	<link href="{{ asset('/assets/default/kendoui/styles/kendo.material.min.css') }}" rel="stylesheet" property='stylesheet'
		  type='text/css' media='all'>
	<link href="{{ asset('/assets/default/css/kendo.custom.css') }}" rel="stylesheet" property='stylesheet'
		  type='text/css' media='all'>

	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico" /> </head>

	<!-- BEGIN CORE PLUGINS -->
	<script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ asset('/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>--}}
	{{--<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>--}}
	<script src="{{ asset('/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="{{ asset('/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script src="{{ asset('/assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/default/js/sweetalert.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/apps/scripts/sweet_alert_delete.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('/assets/default/js/mustache.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/apps/scripts/candidate/render_candidate_form.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/apps/scripts/candidate/validate_candidate_form.js') }}"></script>
	<script src="{{ asset('/resources/plugin/validation/jquery.validate.min.js') }}" ></script>
	<script src="{{ asset('/resources/plugin/validation/additional-methods.min.js') }}" ></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" ></script>
	<script src="{{ asset('/assets/pages/scripts/components-editors.min.js') }}" ></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" ></script>
	<script src="{{ asset('/assets/pages/scripts/table-datatables-ajax.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('/assets/default/kendoui/js/kendo.all.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/apps/scripts/employer/employer.js') }}"></script>
	<script>
	jQuery.extend(jQuery.validator.messages, {
		required: '@lang('validation.required', ['attribute' => ''])',
		remote: "Please fix this field.",
		email: jQuery.validator.format("@lang('validation.email')"),
		url: "Đường dẫn chưa chính xác.",
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
	<!-- END THEME LAYOUT SCRIPTS -->
	<!-- THANHLV END ADD 2016/05/11 -->
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

	@include('layout.header_admin')

	<div class="page-container">
		@include('layout.sidebar_admin')
		<div class="page-content-wrapper">
			<div class="page-content">
				@include('layout.pageheader_admin')
				@yield('content')
			</div>
		</div>
	</div>

	@include('layout.footer_admin')
	
	<div id="modal"></div>
	
</body>

</html>