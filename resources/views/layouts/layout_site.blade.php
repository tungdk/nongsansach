<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('pageTitle') Nông sản sạch</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="icon" href="site/uploads/images/caidat/favicon.png" type="image/x-icon"/>--}}
{{-- <link rel="shortcut icon" type="image/png" href="/images/logo.png"/> --}}

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

    <!-- chat -->
{{--    <link href="{{asset('site/css/chat.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link href="{{asset('site/css/responsive-update.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('css/modal_login_register.css')}}" rel="stylesheet"/>

    <!-- Header JS -->
    <script src="{{asset('site/js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
    @yield('css')
    <script>
        @if(\Auth::check())
        $(window).on('load', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('site.count.cart') }}',
                success: function (data) {
                    $('.cartCount').text(data);
                    $('.cartCount2').text(data);
                    // var element = document.getElementById('count_cart');
                    // element.innerHTML = data;
                },
                error: function () {

                }
            })
        })
        @endif
    </script>
</head>

<body class="body-show">
<div class="shopNS">
    {{--<div class="load">--}}
    {{--    <img src="{{ asset('site/images/loading.gif') }}" alt="">--}}
    {{--</div>--}}
    @include('site.partials.header')
    <div class="body">
        @yield('content')
    </div>
    @include('site.partials.footer')
</div>

@include('site.auth.modal_login_register')

<!-- Plugin JS -->
<script src="{{asset('site/js/api.jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/lightslider.min.js')}}" type="text/javascript"></script>
<script src="{{asset('site/js/lightgallery-all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}" type="text/javascript"></script>


<script src="{{asset('js/cart.js')}}"></script>
<script src="{{asset('js/favourite.js')}}"></script>
<script src="{{asset('js/subscribe.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('site/js/appear.js')}}"></script>
<script src="{{asset('site/js/dl_main.js')}}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('js/modal_login_register.js')}}" type="text/javascript"></script>
@yield('js')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fc9acee920fc91564cd4b2a/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
</body>
</html>
