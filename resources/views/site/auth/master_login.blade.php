@extends('layouts.layout_site')
@section('css')
    <link href="{{asset('site/css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5" style="text-align: center">
                <h1>Cửa hàng nông sản trực tuyến</h1>
                <img src="images/image-login.jpg" alt="">
            </div>
            <div class="col-sm-3 col-md-5 col-lg-5" style="float: right">
                @if(request()->is('register'))
                    @include('site.auth.register')
                @else
                    @include('site.auth.login')
                @endif
            </div>
        </div>
    </div>
@endsection
