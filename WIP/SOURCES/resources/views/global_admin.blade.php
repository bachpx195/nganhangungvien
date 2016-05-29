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
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="{{ asset('/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="{{ asset('/assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('/assets/layouts/layout2/css/custom.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/default/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
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
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
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