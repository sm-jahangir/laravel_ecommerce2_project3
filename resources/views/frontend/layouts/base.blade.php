<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab - eCommerce HTML5 Templatee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/custom.css">


    <!-- Modernizr JS -->
    <script src="{{asset('frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">

        {{View::make('/frontend/layouts/header')}}




        @section('MainContentFrontend')

        @show



        {{View::make('/frontend/layouts/footer')}}




    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{asset('frontend')}}/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('frontend')}}/js/plugins.js"></script>
    <script src="{{asset('frontend')}}/js/slick.min.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('frontend')}}/js/main.js"></script>

</body>

</html>
