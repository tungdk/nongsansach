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
                                        </div>
                                        <label for="name">Số điện thoại</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}"
                                                   id="phone" required>
                                        </div>
                                        <label for="name">Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="{{ $setting->email }}"
                                                   id="email" required>
                                        </div>

                                        <label for="name">Thời gian mở cửa</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="time_work" value="{{ $setting->time_work }}"
                                                   id="time_work" required>
                                        </div>

                                        <label for="name">Khẩu hiệu</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="slogan" value="{{ $setting->slogan }}"
                                                   id="slogan" required>
                                        </div>

                                        <label for="name">Địa chỉ</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}"
                                                   id="address" required>
                                        </div>

                                        <label for="name">Fanpage facebook</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fanpage" value="{{ $setting->fanpage }}"
                                                   id="fanpage" required>
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
                                                class="form-control" required>{{ $setting->about_us ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h3 class="box-title">
                                    <button type="button" class="btn btn-block btn-success"
                                            onclick="change_setting()" id="btn-save-setting">
                                        Lưu thay đổi
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
        let about_us = CKEDITOR.replace('about_us');

        function change_setting() {
            $('.error').text("");
            $('#form_change_setting').validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50
                    },
                    phone: {
                        required: true,
                        maxlength: 15
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    address: {
                        required: true,
                    },
                    map: {
                        required: true,
                    },
                    time_work: {
                        required: true,
                    },
                    fanpage: {
                        required: true,
                    },
                    slogan: {
                        required: true,
                    },
                    about_us: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Vui lòng điền tên cửa hàng",
                        maxlength: "Tên cửa hàng tối da 50 kí tự"
                    },
                    phone: {
                        required: "Vui lòng nhập số điện thoại",
                        maxlength: "Số điện thoại tối da 15 kí tự"
                    },
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Email không đúng định dạng"
                    },
                    address: {
                        required: "Vui lòng nhập địa chỉ cửa hàng",
                    },
                    map: {
                        required: "Vui lòng nhập bản đồ cửa hàng",
                    },
                    time_work: {
                        required: "Vui lòng nhập thời gian mở cưa",
                    },
                    fanpage: {
                        required: "Vui lòng nhập đường dẫn trang facebook",
                    },
                    slogan: {
                        required: "Vui lòng nhập khẩu hiểu",
                    },
                    about_us: {
                        required: "Vui lòng nhập thông tin giới thiệu về cửa hàng",
                    }
                }
            });
            if ($('#form_change_setting').valid() == false) {
                return false;
            }
            $('#btn-save-setting').prop('disabled', true);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.setting.update') }}',
                data: {
                    'name' : $('#name').val().trim(),
                    'phone' : $('#phone').val().trim(),
                    'email' : $('#email').val().trim(),
                    'address' : $('#address').val().trim(),
                    'map' : $('#map').val().trim(),
                    'time_work' : $('#time_work').val().trim(),
                    'fanpage' : $('#fanpage').val().trim(),
                    'slogan' : $('#slogan').val().trim(),
                    'about_us' : about_us.getData().trim(),
                },
                success: function (data) {
                    toastr.success("Cập nhật thông tin thành công", 'Thành công');
                    $('#btn-save-setting').prop('disabled', false);
                },
                error: function (data) {
                    if (data.status == 404) {
                        $('#error_password_old').text('Mật khẩu hiện tại không đúng');
                    } else {
                        toastr.error('Thông tin dữ liệu không hợp lệ', 'Thất bại')
                    }
                    $('#btn-save-setting').prop('disabled', false);
                }
            });
        }
    </script>
@endsection
