<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <base href="{{ asset('') }}">

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="clientAssets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="clientAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="clientAssets/css/animate.css" rel="stylesheet">
        <link href="clientAssets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="clientAssets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <link href="clientAssets/css/myStyle.css" rel="stylesheet">
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        @include('client.layout.header')
        <!--========== END HEADER ==========-->

        <!--========== PAGE LAYOUT ==========-->
		@yield('content')
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        @include('client.layout.footer')
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="clientAssets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="clientAssets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="clientAssets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="clientAssets/js/layout.min.js" type="text/javascript"></script>
        <script src="clientAssets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="clientAssets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="clientAssets/js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>