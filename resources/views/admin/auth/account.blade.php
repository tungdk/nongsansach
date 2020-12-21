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
                                    <h3 class="box-title">Ảnh đại diện</h3>
                                </div>
                                <div class="box-body block-images">
                                    <div style="margin-bottom: 10px">
                                        <img src="/images/no-image.jpg" class="img-thumbnail"
                                             onerror="this.onerror=null;this.src='images/no-image.jpg'" alt=""
                                             style="width:200px; height:200px">
                                    </div>
                                    <div style="position: relative;">
                                        <a href="javascript:;" class="btn btn-primary">Choose File....
                                            <input type="file"
                                                   style="position:absolute;z-index:2;top:0;left:0;opacity:0;background-color:transparent"
                                                   name="avatar" size="40" class="js-upload">
                                        </a>
                                        &nbsp;
                                        <span class="label label-info" id="upload-file-info"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>Đổi mật khẩu</b></h3>
                                </div>
                                <div class="box-body">
                                    <label for="name">Mật khẩu cũ</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password_old" id="password_old" required>
                                    </div>
                                    <label for="name">Mật khẩu mới</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password_new" id="password_new" required>
                                    </div>
                                    <label for="name">Xác nhận mật khẩu mới</label>
                                    <div class="form-group">
                                        <input type="text"  class="form-control" name="confirm_password" id="confirm_password" required>
                                    </div>

                                    <button type="button" class="btn btn-block btn-primary" onclick="change_password()">Đổi mật khẩu</button>
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
        function change_password(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
               type: 'post',
               url: '{{ route('admin.account.change_password') }}',
                data: {
                   'password_old': $('#password_old').val(),
                    'password_new': $('#password_new').val(),
                    'confirm_password': $('#confirm_password').val()
                },
                success: function (data){
                    toastr.success('Đổi mật khẩu thành công', 'Thành công')
                },
                error: function (){
                    toastr.error('Mật khẩu cũ không đúng', 'Thất bại')
                }
            });
        }
    </script>
@endsection
