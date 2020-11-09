<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        Nông sản sạch </title>
    <!-- ================= Page description ================== -->
    <meta name="description" content="Giới thiệu cửa hàng bán nông sản sạch tươi ngon giá tiết kiệm và nhanh chóng">
    <!-- ================= Meta ================== -->
    <meta name="keywords" content=""/>
    <link rel="canonical" href="index.html"/>
    <meta name='revisit-after' content='1 days'/>
    <meta name="robots" content="noodp,index,follow"/>
    <!-- ================= Favicon ================== -->

    <link rel="icon" href="uploads/images/caidat/favicon.png" type="image/x-icon"/>

    <!-- Facebook Open Graph meta tags -->

    <meta property="og:type" content="website">
    <meta property="og:title" content="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
    <meta property="og:image" content="uploads/images/caidat/logo-aznet_250.png">
    <meta property="og:image:secure_url" content="uploads/images/caidat/logo-aznet_250.png">

    <meta property="og:description" content="Giới thiệu cửa hàng bán sản phẩm giá tiết kiệm và nhanh chóng">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Cửa hàng bán hàng tiết kiệm và nhanh chóng">


    <!-- ================= Fonts ================== -->

    <link rel="stylesheet" href="{{asset('site/css/icon-font.min.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">
    <!-- Plugin CSS -->
    <link href="{{asset('site/css/plugin.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/lightslider.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/lightgallery.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Build Main CSS -->

    <link href="{{asset('site/css/base.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/module.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/responsive.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Main CSS -->
    <link href="{{asset('site/css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/style-theme-blue-strong.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('site/css/responsive-update.css')}}" rel="stylesheet" type="text/css"/>

    @yield('css')
    <!-- Header JS -->
    <script src="{{asset('site/js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
</head>

<body>
<!-- Main content -->

<!-- header.php -->
@include('site.partials.header')
<!-- end header.php -->

{{--<h1 class="hidden">Cửa hàng bán hàng tiết kiệm và nhanh chóng</h1>--}}

@yield('content')

<div class="container">
</div>

<!-- footer.php -->
@include('site.partials.footer')
<!-- Plugin JS -->
<script src="site/js/api.jquery.js" type="text/javascript"></script>
<script src="site/js/bootstrap.min.js"></script>
<script src="site/js/lightslider.min.js" type="text/javascript"></script>
<script src="site/js/lightgallery-all.min.js" type="text/javascript"></script>
<script src="site/js/owl.carousel.min.js" type="text/javascript"></script>

<!-- Main JS -->
<script src="site/js/appear.js"></script>
<script src="site/js/dl_main.js" type="text/javascript"></script>
<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

@yield('js')
</body>

<!-- Mirrored from shop1.jweb.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 07:31:55 GMT -->
</html>
