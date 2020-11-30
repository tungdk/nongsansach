<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('adminlte/login/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Đăng nhập vào hệ thống
    </title>
    <style>
        .text-danger{
            color: orange;
        }
    </style>
</head>

<body>
<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
{{--            <div class="form-wrapper align-items-center">--}}
{{--                <div class="form sign-up">--}}
{{--                    <div class="input-group">--}}
{{--                        <i class='bx bxs-user'></i>--}}
{{--                        <input type="text" placeholder="Username">--}}
{{--                    </div>--}}
{{--                    <div class="input-group">--}}
{{--                        <i class='bx bx-mail-send'></i>--}}
{{--                        <input type="email" placeholder="Email">--}}
{{--                    </div>--}}
{{--                    <div class="input-group">--}}
{{--                        <i class='bx bxs-lock-alt'></i>--}}
{{--                        <input type="password" placeholder="Password">--}}
{{--                    </div>--}}
{{--                    <div class="input-group">--}}
{{--                        <i class='bx bxs-lock-alt'></i>--}}
{{--                        <input type="password" placeholder="Confirm password">--}}
{{--                    </div>--}}
{{--                    <button>--}}
{{--                        Sign up--}}
{{--                    </button>--}}
{{--                    <p>--}}
{{--							<span>--}}
{{--								Already have an account?--}}
{{--							</span>--}}
{{--                        <b onclick="toggle()" class="pointer">--}}
{{--                            Sign in here--}}
{{--                        </b>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-wrapper">--}}
{{--                <div class="social-list align-items-center sign-up">--}}
{{--                    <div class="align-items-center facebook-bg">--}}
{{--                        <i class='bx bxl-facebook'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center google-bg">--}}
{{--                        <i class='bx bxl-google'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center twitter-bg">--}}
{{--                        <i class='bx bxl-twitter'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center insta-bg">--}}
{{--                        <i class='bx bxl-instagram-alt'></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <form action="" method="POST">
                        @csrf
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Email" name="email" id="email" value="{{old('email')}}">
                            <p style="color:red; dislay:none;" class="error errorEmail"></p>
                        </div>
                        @if($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Mẩt khẩu" name="password" id="password" value="">
                        </div>
                        @if($errors->first('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        @if (session('error'))
                            <span class="text-danger">{{session('error')}}</span>
                        @endif
                        <p style="color:red; dislay:none;" class="error errorPassword"></p>
                        <p style="color:red; dislay:none" class="error errorLogin"></p>
                        <button type="button" id="submit_Login">
                            Đăng nhập
                        </button>
{{--                        <input class="btn btn-default btn-login" type="button" value="Đăng nhập"--}}
{{--                               id="submit_Login">--}}
                    </form>
{{--                    <p>--}}
{{--                        <b>--}}
{{--                            Forgot password?--}}
{{--                        </b>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--							<span>--}}
{{--								Don't have an account?--}}
{{--							</span>--}}
{{--                        <b onclick="toggle()" class="pointer">--}}
{{--                            Sign up here--}}
{{--                        </b>--}}
{{--                    </p>--}}
                </div>
            </div>
{{--            <div class="form-wrapper">--}}
{{--                <div class="social-list align-items-center sign-in">--}}
{{--                    <div class="align-items-center facebook-bg">--}}
{{--                        <i class='bx bxl-facebook'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center google-bg">--}}
{{--                        <i class='bx bxl-google'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center twitter-bg">--}}
{{--                        <i class='bx bxl-twitter'></i>--}}
{{--                    </div>--}}
{{--                    <div class="align-items-center insta-bg">--}}
{{--                        <i class='bx bxl-instagram-alt'></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- END SIGN IN -->
    </div>
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2>
                    Hệ thống quản trị nông sản sạch
                </h2>
                <p>
                    Chào mừng bạn đã quay trở lại.
                </p>
            </div>
            <div class="img sign-in">
                <img src="{{asset('adminlte/login/assets/undraw_different_love_a3rg.svg')}}" alt="welcome">
            </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="img sign-up">
                <img src="{{asset('adminlte/login/assets/undraw_creative_team_r90h.svg')}}" alt="welcome">
            </div>
            <div class="text sign-up">
                <h2>
                    Join with us
                </h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
                    molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
                    enim harum minima possimus dignissimos deserunt rem.
                </p>
            </div>
        </div>
        <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
</div>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="{{asset('adminlte/login/index.js')}}"></script>
<script src="{{asset('js/admin/login_admin.js')}}"></script>
</body>

</html>
