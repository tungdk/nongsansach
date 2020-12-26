@extends('layouts.layout_admin')
@section('title', 'Cài đặt')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cài đặt
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li class="active">Cài đặt</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border float-right">

            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <div class="row">
                        <form action="" id="form_change_setting">

                            <div class="col-sm-6">
                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><b>Thông tin cửa hàng</b></h3>
                                    </div>
                                    <div class="box-body">
                                        <style>
                                            .error {
                                                color: red;
                                            }
                                        </style>
                                        <label for="name">Tên cửa hàng</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                   value="{{ $setting->name }}"
                                                   name="name"
                                                   id="name" required>
                                            <span class="error" id="error_name"></span>
                                        </div>
                                        <label for="name">Số điện thoại</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}"
                                                   id="phone" required>
                                            <span class="error" id="error_phone"></span>
                                        </div>
                                        <label for="name">Email</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" value="{{ $setting->email }}"
                                                   id="email" required>
                                            <span class="error" id="error_email"></span>
                                        </div>

                                        <label for="name">Thời gian mở cửa</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="time_work" value="{{ $setting->time_work }}"
                                                   id="time_work" required>
                                            <span class="error" id="error_time_work"></span>
                                        </div>

                                        <label for="name">Khẩu hiệu</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="slogan" value="{{ $setting->slogan }}"
                                                   id="slogan" required>
                                            <span class="error" id="error_slogan"></span>
                                        </div>

                                        <label for="name">Địa chỉ</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}"
                                                   id="address" required>
                                            <span class="error" id="error_address"></span>
                                        </div>

                                        <label for="name">Fanpage facebook</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fanpage" value="{{ $setting->fanpage }}"
                                                   id="fanpage" required>
                                            <span class="error" id="error_fanpage"></span>
                                        </div>

                                        <label for="name">Bản đồ</label>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" id="map" name="map" rows="8" required>{{ $setting->map }}</textarea>
                                            <span class="error" id="error_map"></span>
                                        </div>


                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-6">
                                <label for="name">Trang giới thiệu</label>
                                <div class="form-group">
                                        <textarea name="about_us" id="about_us" cols="5" rows="2"
                                                class="form-control">{{ $setting->about_us ?? '' }}</textarea>
                                    <span class="error" id="error_about_us"></span>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h3 class="box-title">
                                    <button type="button" class="btn btn-block btn-success"
                                            onclick="change_setting()">Lưu thay đổi
                                    </button>
                                </h3>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('js')
    <script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('about_us');


        function change_setting() {
            $('.error').text("");
            // $('#form_change_setting').validate({
            //     errorClass: 'error',
            //     rules: {
            //         password_old: {
            //             required: true,
            //             minlength: 6
            //         },
            //         password_new: {
            //             required: true,
            //             minlength: 6
            //
            //         },
            //         confirm_password: {
            //             required: true,
            //             equalTo: '#password_new'
            //         }
            //     },
            //     messages: {
            //         password_old: {
            //             required: 'Vui lòng nhập mật khẩu hiện tại',
            //             minlength: 'Độ dài tối thiểu 6 kí tự'
            //         },
            //         password_new: {
            //             required: 'Vui lòng nhập mật khẩu mới',
            //             minlength: 'Độ dài tối thiểu 6 kí tự'
            //
            //         },
            //         confirm_password: {
            //             required: 'Vui lòng nhập xác nhận mật khẩu mới',
            //             equalTo: 'Không trùng khớp với mật khẩu mới'
            //         }
            //     }
            // });
            // if ($('#form_change_password').valid() == false) {
            //     return false;
            // }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.setting.update') }}',
                data: {
                    'name' : $('#name').val(),
                    'phone' : $('#phone').val(),
                    'email' : $('#email').val(),
                    'address' : $('#address').val(),
                    'map' : $('#map').val(),
                    'time_work' : $('#time_work').val(),
                    'fanpage' : $('#fanpage').val(),
                    'slogan' : $('#slogan').val(),
                    'about_us' : $('#about_us').val(),
                },
                success: function (data) {
                    toastr.success("Cập nhật thông tin thành công", 'Thành công');
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
