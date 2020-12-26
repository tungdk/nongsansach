<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 3.3.7 -->
    {{--    <base href="{{asset('adminlte/')}}">--}}
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/style.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">
    <!-- Pace style -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/pace/pace.min.css')}}">

    <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('adminlte/js/sweetalert2.js')}}"></script>
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    {{--Thông báo--}}
    @if (session('toastr'))
        <script>
            var TYPE_MESSAGE = "{{ session('toastr.type') }}";
            var MESSAGE = "{{ session('toastr.message') }}";
        </script>
    @endif
    @yield('css')
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('admin.partials.header')
<!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
@include('admin.partials.sidebar')

<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- PACE -->
<script src="{{asset('adminlte/bower_components/PACE/pace.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- page script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
        integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function () {
        $('#example1').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Vietnamese.json"
            }
        })
    })
    // To make Pace works on Ajax calls
    if (typeof TYPE_MESSAGE != "undefined") {
        switch (TYPE_MESSAGE) {
            case 'success':
                toastr.success(MESSAGE);
                break;
            case 'error':
                toastr.error(MESSAGE);
                break;
            default:
                break;
        }
    }

    $(document).ajaxStart(function () {
        Pace.restart()
    })
    $('.ajax').click(function () {
        $.ajax({
            url: '#', success: function (result) {
                $('.ajax-content').html('<hr>Ajax Request Completed !')
            }
        })
    })
    $(function () {
        $(".js-upload").change(function () {
            let $this = $(this);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $this.parents('.block-images').find('img').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    toastr.options = {
        "debug": false,
        "positionClass": "toast-bottom-full-width",
        "onclick": null,
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "positionClass": "toast-top-right",
    }
</script>

@yield('js')
</body>
</html>
