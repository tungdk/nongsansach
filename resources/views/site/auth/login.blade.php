@extends('layouts.layout_site')
@section('css')
    <link href="{{asset('site/css/login.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        /* .login-left {
            margin: 50px auto;
            display: flex;
        }

        .login-left h1 {
            width: 100%;
            height: 100%;
        } */
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5" style="text-align: center">
                    <h1>Cửa hàng nông sản trực tuyến</h1>
                    <img src="images/image-login.jpg" alt="">
                </div>
                <div class="col-sm-3 col-md-5 col-lg-5" style="float: right">
{{--                    <div class="card card-signin my-5" style="{{ request()->is('login') ? 'display: none' : '' }} ">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title text-center">Đăng nhập</h5>--}}
{{--                            <form class="form-signin" method="POST" action="{{route('site.auth.login')}}">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="inputEmail">Email</label>--}}
{{--                                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Nhập địa chỉ email" required autofocus>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="inputPassword">Mật khẩu</label>--}}
{{--                                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Nhập mật khẩu" required>--}}
{{--                                </div>--}}

{{--                                --}}{{--                            <div class="custom-control custom-checkbox mb-3">--}}
{{--                                --}}{{--                                <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                --}}{{--                                <label class="custom-control-label" for="customCheck1">Nhớ đăng nhập</label>--}}
{{--                                --}}{{--                            </div>--}}
{{--                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>--}}
{{--                                <hr class="my-4">--}}
{{--                                <a href="{{url('login/social/facebook')}}" class="btn btn-lg btn-facebook btn-block text-uppercase" type="button"><i class="fa fa-facebook mr-2"></i>  Đăng nhập với Facebook</a>--}}
{{--                                <a href="{{ url('/auth/redirect/google') }}" class="btn btn-lg btn-google btn-block text-uppercase" type="button"><i class="fa fa-google-plus mr-2"></i> Đăng nhập với Google</a>--}}
{{--                                <p style="text-align: center; padding-top: 15px">Bạn chưa có tài khoản? <a href="{{ route('site.register') }}" style="color: orangered">Đăng ký</a></p>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card card-signin my-5 " style="{{ request()->is('register') ? 'display: hidden' : '' }} ">
                        <div class="card-body">
                            <h5 class="card-title text-center">Đăng ký</h5>
                            <form class="form-signin" method="POST" action="{{route('site.auth.register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="inputEmail">Họ và tên <span class="text-danger">(*)</span></label>
                                    <input type="text" id="inputName" class="form-control" name="name" placeholder="Nhập họ và tên" required autofocus>
                                    @if($errors->first('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">Email <span class="text-danger">(*)</span></label>
                                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Nhập địa chỉ email" required autofocus>
                                    @if($errors->first('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword">Mật khẩu <span class="text-danger">(*)</span></label>
                                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
                                    @if($errors->first('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Nhập lại mật khẩu <span class="text-danger">(*)</span></label>
                                    <input type="password" id="inputConfirmPassword" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
                                    @if($errors->first('confirm_password'))
                                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-4 col-md-6">
                                        <div class="g-recaptcha" data-sitekey="6LdPSOoZAAAAAIp2pPjnybfOGkPJOKXkxi8i4mbe" data-callback="YourOnSubmitFn"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Số điện thoại</label>
                                    <input type="password" id="inputConfirmPassword" class="form-control" name="phone" placeholder="Nhập lại mật khẩu" required>
                                </div>

                                {{--                            <div class="custom-control custom-checkbox mb-3">--}}
                                {{--                                <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                {{--                                <label class="custom-control-label" for="customCheck1">Nhớ đăng nhập</label>--}}
                                {{--                            </div>--}}
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                                <hr class="my-4">
                                <a href="{{url('login/social/facebook')}}" class="btn btn-lg btn-facebook btn-block text-uppercase" type="button"><i class="fa fa-facebook mr-2"></i>  Đăng nhập với Facebook</a>
                                <a href="{{ url('/auth/redirect/google') }}" class="btn btn-lg btn-google btn-block text-uppercase" type="button"><i class="fa fa-google-plus mr-2"></i> Đăng nhập với Google</a>
                                <p style="text-align: center; padding-top: 15px">Bạn đã có tài khoản? <a href="{{ route('site.login') }}" style="color: orangered">Đăng nhập</a></p>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
