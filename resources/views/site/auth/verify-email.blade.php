@extends('layouts.layout_site')
@section('title', 'Xác thực tài khoản')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="padding-left: 100px">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="log_wrap">
                    @if(request()->is('register'))
                        <h4>Đăng ký thành công</h4>
                        <div class="login-form">
                            <div class="alert alert-success" style="line-height: 35px;">
                                Xin chào bạn, <br>
                                Chúc mừng bạn đã đăng ký tài khoản thành công.
                                <br> Chúng tôi đã gửi đến bạn một <strong>Link xác thực</strong> tài khoản. Link này sẽ hết hạn trong vòng 60 phút. Vui lòng kiểm tra email của bạn
                                <button onclick="send_email_verify()">Gửi lại liên kết</button>
                            </div>
                        </div>
                    @else
                        <h4>Tài khoản của bạn chưa xác thực</h4>
                        <div class="login-form">
                            <div class="alert alert-success" style="line-height: 35px;">
                                Xin chào bạn, <br>
                                Tài khoản của bạn bị tạm dừng do chưa xác thực.
                                <br>Bạn có thể yêu cầu gửi lại link xác thực
                                <button id="click_send_email" onclick="send_email_verify()">
                                    TẠI ĐÂY
                                </button>
                                <div id="success_send_email" hidden>
                                    <br>Chúng tôi sẽ gửi đến bạn một <strong>Link xác thực</strong> tài khoản. Link này sẽ hết hạn trong vòng 60 phút. Vui lòng kiểm tra email của bạn
                                </div>

                                </div>
                                <div id="error_send_email" style="color: red" hidden>
                                    Có lỗi xảy ra vui lòng liên hệ với chúng tôi qua emai: nongsansach@gmail.com
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
@endsection
@section('js')
    <script>
        function send_email_verify(){
            // e.preventDefault();
            var email = "{{ $email }}";
            const token = "{{ @csrf_token() }}";
            $.ajax({
                type: 'POST',
                url: '{{route('site.resend.email')}}',
                data: {
                    '_token' : token,
                    'email': email
                },
                success: function (data) {
                    $('#success_send_email').show();
                },
                error: function (data) {
                    $('#error_send_email').show();
                }
            });
        }
    </script>
@endsection
