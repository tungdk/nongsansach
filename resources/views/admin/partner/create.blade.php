@extends('layouts.layout_admin')
@section('title', 'Thêm mới đối tác')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới đối tác
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.partner.index')}}">Đối tác</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <form role="form" action="" method="POST" enctype="multipart/form-data" id="form_create">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tên đối tác<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" id="name" required>
                                <span class="error text-danger" id="error_name"></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Trạng thái <span class="text-danger"><i>(Tích để hiển thị)</i></span></label>
                                <input type="checkbox" name="status" id="status" style="height: 1.4em; width: 1.4em">
                            </div>
                            <div class="form-group">
                                <label for="name">Ảnh nền <span class="text-danger">(*)</span></label><br>
                                <img src="{{ asset('images/no-image.jpg') }}" alt="" id="image-logo" style="width: 300px">
                                <input type="file" class="form-control" name="logo" id="logo" required>
                                <span class="error text-danger" id="error_logo"></span>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.partner.index')}}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
                                <button type="button" class="btn btn-success" onclick="save_create()" id="btn_save_create">Lưu dữ liệu <i class="fa fa-save"></i></button>
                            </div>
                        </div>

                        <!-- /.box-body -->

                    </form>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image-logo').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo").change(function () {
            readURL(this);
        });

        function getData() {
            var submit_form = new FormData();
            let status;
            if ($("#status").is(":checked")) {
                status = 1;
            } else {
                status = 0;
            }

            submit_form.append('name', $('#name').val());
            submit_form.append('status', status);
            submit_form.append('logo', $('#logo')[0].files[0]);

            return submit_form;
        }

        function save_create() {
            $('.error').text("");
            $('#form_create').validate({
                rules: {
                    name: {
                        required: true
                    },
                    logo: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: 'Tên đối tác không được trống'
                    },
                    logo: {
                        required: 'Logo đối tác không được trống'
                    },
                }
            });
            if($('#form_create').valid() == false){
                return false;
            }
            var submit_data = getData();
            console.log(submit_data);
            $('#btn_save_create').prop('disabled', true);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'post',
                url: '{{ route('admin.partner.store') }}',
                data: submit_data,
                contentType:false,
                processData:false,
                success: function () {
                    toastr.success('Thêm mới thành công', 'Thông báo');
                    $('#btn_save_create').prop('disabled', false);
                },
                error: function (response) {
                    let data = response.responseJSON['messages'];
                    if (data.name && data.name[0] == 86) {
                        $('#error_name').text("Tên chính sách đã tồn tại");
                    } else if(data.logo && data.logo[0] == 38){
                        $('#error_logo').text("Logo không phải là định dạng ảnh");
                    }
                    else {
                        toastr.error('Có lỗi xảy ra, vui lòng kiểm tra lại dữ liệu đầu vào hoặc liên hệ với quản trị viên', 'Thông báo');

                    }
                    $('#btn_save_create').prop('disabled', false);
                }
            });
        }

    </script>

@endsection
