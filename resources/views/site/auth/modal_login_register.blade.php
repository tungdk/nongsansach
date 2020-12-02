<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="closemodal">&times;</button>
                <h4 class="modal-title">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        {{--                        <h2 class="text-center"><img src="{{asset('images/logo.png')}}" height="150px"--}}
                        {{--                                                     width="120px"></h2>--}}
                        <div class="form loginBox">
                            <form method="POST" accept-charset="UTF-8">
                                @csrf
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <p style="color:red; dislay:none;" class="error errorEmail"></p>
                                <label for="password">Mật khẩu</label>
                                <input id="password" class="form-control" type="password" placeholder="Mật khẩu"
                                       name="password">
                                <p style="color:red; dislay:none;" class="error errorPassword"></p>
                                <p style="color:red; dislay:none" class="error errorLogin"></p>
                                @if(session('msg'))
                                    <div class="msg alert alert-danger">
                                        <p style="color:red; dislay:none">{{session('msg')}}</p>
                                    </div>
                                @endif
                                <input class="btn btn-default btn-login" type="button" value="Đăng nhập"
                                       id="submit_Login">
                                <a href="{{URL::to('/password/email')}}" class="forgot-password">Quên mật khẩu?</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="POST" html="{:multipart=>true}" data-remote="true" action=""
                                  accept-charset="UTF-8">
                                <input id="regis-name" class="form-control" type="text" placeholder="Tên"
                                       name="regis-name">
                                <p style="color:red; dislay:none;" class="error errorName"></p>
                                <input id="regis-email" class="form-control" type="text" placeholder="Email"
                                       name="regis-email">
                                <p style="color:red; dislay:none;" class="error errorEmail"></p>
                                <input id="regis-password" class="form-control" type="password" placeholder="Mật khẩu"
                                       name="regis-password">
                                <p style="color:red; dislay:none;" class="error errorPassword"></p>
                                <input id="regis-password_confirmation" class="form-control" type="password"
                                       placeholder="Nhập lại mật khẩu" name="regis-password_confirmation">
                                <p style="color:red; dislay:none;" class="error errorPasswordConfirm"></p>
                                <input class="btn btn-default btn-register" type="button" value="Tạo tài khoản"
                                       name="commit" id="submit_Register">
                                <p style="color:red; dislay:none" class="error errorRegister"></p>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="{{ URL::to('/auth/redirect/facebook')}}" class="btn btn-lg btn-facebook btn-block text-uppercase"
                   type="button" style="color: white; background-color: #3b5998"><i class="fa fa-facebook mr-2"></i> Đăng nhập với Facebook</a>
                <a href="{{ URL::to('/auth/redirect/google') }}" class="btn btn-lg btn-google btn-block text-uppercase"
                   type="button" style="color: white; background-color: #ea4335"><i class="fa fa-google-plus mr-2"></i> Đăng nhập với Google</a>

            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>Bạn chưa có tài khoản?
                          <a href="javascript: showRegisterForm();">Đăng ký</a>
                    </span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Bạn đã có tài khoản?</span>
                    <a href="javascript: showLoginForm();">Đăng nhập</a>
                </div>
            </div>

        </div>
    </div>
</div>
