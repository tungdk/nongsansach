@extends('layouts.layout_site')
@section('css')
    <link href="{{asset('site/css/login.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Đăng nhập</h5>
                        <form class="form-signin" method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Nhập địa chỉ email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword">Mật khẩu</label>
                                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
                            </div>

{{--                            <div class="custom-control custom-checkbox mb-3">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                <label class="custom-control-label" for="customCheck1">Nhớ đăng nhập</label>--}}
{{--                            </div>--}}
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                            <hr class="my-4">
                            <a href="{{url('login/social/facebook')}}" class="btn btn-lg btn-facebook btn-block text-uppercase" type="button"><i class="fab fa-facebook mr-2"></i>  Đăng nhập với Facebook</a>
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-lg btn-google btn-block text-uppercase" type="button"><i class="fab fa-google mr-2"></i> Đăng nhập với Google</a>
                            <div class="form-wrapper">
                                <div class="social-list align-items-center sign-up">
                                    <div class="align-items-center facebook-bg">
                                        <i class='bx bxl-facebook'></i>
                                    </div>
                                    <div class="align-items-center google-bg">
                                        <i class='bx bxl-google'></i>
                                    </div>
                                    <div class="align-items-center twitter-bg">
                                        <i class='bx bxl-twitter'></i>
                                    </div>
                                    <div class="align-items-center insta-bg">
                                        <i class='bx bxl-instagram-alt'></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
