@extends('layouts.layout_admin')
@section('title', 'Tài khoản')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tài khoản
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li class="active">Tài khoản</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Đổi mật khẩu</b></h3>
                                </div>
                                <div class="box-body">
                                    <style>
                                        .error {
                                            color: red;
                                        }
                                    </style>
                                    <form action="" id="form_change_password">
                                        <label for="name">Mật khẩu cũ</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_old"
                                                   id="password_old" required>
                                            <span class="error" id="error_password_old"></span>
                                        </div>
                                        <label for="name">Mật khẩu mới</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_new"
                                                   id="password_new" required>
                                            <span class="error" id="error_password_new"></span>
                                        </div>
                                        <label for="name">Xác nhận mật khẩu mới</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm_password"
                                                   id="confirm_password" required>
                                            <span class="error" id="error_confirm_password"></span>
                                        </div>

                                        <button type="button" class="btn btn-block btn-primary"
                                                onclick="change_password()">Đổi mật khẩu
                                        </button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('js')
    <script>
        function change_password() {
            $('.error').text("");
            $('#form_change_password').validate({
                errorClass: 'error',
                rules: {
                    password_old: {
                        required: true,
                        minlength: 6
                    },
                    password_new: {
                        required: true,
                        minlength: 6

                    },
                    confirm_password: {
                        required: true,
                        equalTo: '#password_new'
                    }
                },
                messages: {
                    password_old: {
                        required: 'Vui lòng nhập mật khẩu hiện tại',
                        minlength: 'Độ dài tối thiểu 6 kí tự'
                    },
                    password_new: {
                        required: 'Vui lòng nhập mật khẩu mới',
                        minlength: 'Độ dài tối thiểu 6 kí tự'

                    },
                    confirm_password: {
                        required: 'Vui lòng nhập xác nhận mật khẩu mới',
                        equalTo: 'Không trùng khớp với mật khẩu mới'
                    }
                }
            });
            if ($('#form_change_password').valid() == false) {
                return false;
            }
            let password_old = $('#password_old').val().trim();
            let password_new = $('#password_new').val().trim();
            let confirm_password = $('#confirm_password').val().trim();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.account.change_password') }}',
                data: {
                    'password_old': password_old,
                    'password_new': password_new,
                    'confirm_password': confirm_password
                },
                success: function (data) {
                    $('#password_old').text("");
                    $('#password_new').text("");
                    $('#confirm_password').text("");
                    toastr.success('Đổi mật khẩu thành công', 'Thành công');
                },
                error: function (data) {
                    if (data.status == 404) {
                        $('#error_password_old').text('Mật khẩu hiện tại không đúng');
                    } else {
                        toastr.error('Thông tin dữ liệu không hợp lệ', 'Thất bại')
                    }
                }
            });
        }
    </script>
@endsection
