<div class="card card-signin my-5">
    <div class="card-body">
        <h5 class="card-title text-center">Đăng nhập</h5>
        <form class="form-signin" method="POST" action="{{route('site.login.post')}}">
            @csrf
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Nhập địa chỉ email" required autofocus>
            </div>

            <div class="form-group">
                <label for="inputPassword">Mật khẩu</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
            </div>

            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Nhớ đăng nhập</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="login()">Đăng nhập</button>
            <hr class="my-4">
            <a href="{{ URL::to('/auth/redirect/facebook') }}" class="btn btn-lg btn-facebook btn-block text-uppercase" type="button"><i class="fa fa-facebook mr-2"></i>  Đăng nhập với Facebook</a>
            <a href="{{ URL::to('/auth/redirect/google') }}" class="btn btn-lg btn-google btn-block text-uppercase" type="button"><i class="fa fa-google-plus mr-2"></i> Đăng nhập với Google</a>
            <p style="text-align: center; padding-top: 15px">Bạn chưa có tài khoản? <a href="{{ route('site.register') }}" style="color: orangered">Đăng ký</a></p>
        </form>
    </div>
</div>
