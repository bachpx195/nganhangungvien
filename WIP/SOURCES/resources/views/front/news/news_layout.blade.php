<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml"
   xmlns:og="http://ogp.me/ns#"
   xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>NGAN HANG UNG VIEN</title>
    <!-- news css -->




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





    
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/owl.theme.min.css') }}" property='stylesheet' >
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/header-footer.min.css') }}" property='stylesheet'>
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/font-awesome.min.css') }}" property='stylesheet' >
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/style-kv2.min.css') }}" property='stylesheet' >
        
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/StoriesSuccess.min.css') }}" property='stylesheet' >
        <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/StoriesSuccess.min.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/css/featured.min.css') }}" property='stylesheet' >
        <link rel="stylesheet" href="{{ asset('/assets/pages/news/reponsive.min.css') }}" property='stylesheet' >
        <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
        </style>
<!--     <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/owl.theme.min.css" type="text/css" rel="stylesheet" />

 -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets/pages/news/owl.theme.min.css') }}" property='stylesheet' > -->

<!--     <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/header-footer.min.css" type="text/css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="{{ asset('/assets/pages/news/header-footer.min.css') }}" property='stylesheet'> -->
<!--     <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/font/css/font-awesome.min.css" type="text/css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="{{ asset('/assets/pages/news/font-awesome.min.css') }}" property='stylesheet' > -->
    <!-- <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/styles.min.css" type="text/css" rel="stylesheet"/> -->
<!--     <link href="https://www.kiotviet.vn/wp-content/themes/kiotviet/css/StoriesSuccess.min.css" type="text/css" rel="stylesheet"/> -->
<!-- <link rel="stylesheet" href="{{ asset('/assets/pages/news/StoriesSuccess.min.css') }}" property='stylesheet' > -->

    <!--[if IE]>
    <script defer src="https://www.kiotviet.vn/wp-content/themes/kiotviet/js/html5.min.js" type="text/javascript"></script>
    <![endif]-->

    <!-- end news css -->
    <!-- css all -->

        <link rel="stylesheet" href="{{ asset('/assets/pages/news/styles.min.css') }}" property='stylesheet' >


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset('/assets/default/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        function addListener(obj, eventName, listener) {
            if (obj.addEventListener) {
                obj.addEventListener(eventName, listener, false);
            } else {
                obj.attachEvent("on" + eventName, listener);form
            }
        }
    </script>
</head>
<body class="page_on_load s21_home" id="s22_chi_tiet_ho_so">
    <div class="container-fluid nopadding">
        @include('front.layout.header')

        <div class="show-content w_100 box_right">
            <div id="cols-right" class="bg_grey">
                <div class="content_cols pt_16 pb_24">
                    @yield('content')
                </div>

                @include('front.layout.footer')
            </div>
        </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- menu aim -->
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

    <!-- news css -->
     <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0&appId=1630263617258818";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
     </script>
     <div class="over-lay-mb hidden-lg hidden-md"></div>
      <!--End-wrapper-p-->
      <a href="javascript:void(0)" title="Lên đầu trang" onclick="jQuery('html,body').animate({scrollTop: 0},1000);" class="go_top" style="">
      <i class="fa fa-chevron-up"></i>
      <noscript>
         <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/973124180/?value=0&amp;guid=ON&amp;script=0"/>
         </div>
      </noscript>

</body>

</html>