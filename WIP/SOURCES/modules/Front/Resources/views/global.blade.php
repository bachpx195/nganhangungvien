<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>NGAN HANG UNG VIEN</title>

    <!-- css all -->
    <link rel="stylesheet" href="{{ asset('/assets/default/css/normalize.min.css') }}" property='stylesheet'
          type='text/css' media='all'>
    <link rel="stylesheet" href="{{ asset('/assets/default/css/ionicons.min.css') }}" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/fonts.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/bootstrap.min.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/select2.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/sliding_menu.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/checkbox/all.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/mfb.css') }}" rel="stylesheet" property='stylesheet' type='text/css'
          media='all'>
    <link href="{{ asset('/assets/default/css/style_menu.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/styles.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/default_ntd.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/main_ntd.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <link href="{{ asset('/assets/default/css/main2.css') }}" rel="stylesheet" property='stylesheet'
          type='text/css' media='all'>
    <script type="text/javascript">
        function addListener(obj, eventName, listener) {
            if (obj.addEventListener) {
                obj.addEventListener(eventName, listener, false);
            } else {
                obj.attachEvent("on" + eventName, listener);
            }
        }
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/jquery.mobile.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/mbExtruder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/jquery.menu-aim.js') }}"></script>
    <!-- menu aim -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/modernizr.js') }}"></script>
    <!-- Modernizr -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/enscroll-0.6.1.min.js') }}"></script>
    <!-- scroll bar -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/sliding_menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/style_menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/common_ntd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/main_ntd_new.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/default/js/main2.js') }}"></script>
</head>

<body class="no_scroll page_on_load s21_home" id="s22_chi_tiet_ho_so">
    <div class="container-fluid nopadding">
        @include('layout.header')

        <div class="show-content w_100 box_right">
            <div id="cols-right" class="bg_grey">
                <div class="content_cols-right pt_16 pl_24 pb_24">
                    @yield('content')
                </div>

                @include('layout.footer')
            </div>
        </div>
    </div>
</body>

</html>