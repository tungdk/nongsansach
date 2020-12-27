@extends('layouts.layout_admin')
@section('title', 'Thêm mới chính sách')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới chính sách
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.policy.index')}}">Chính sách</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <form role="form" action="" method="POST" id="form_create">
                        @csrf
                        <div class="col-md-8">
                            <div class="form-group {{ $errors->first('name' ? 'has-danger' : '') }}">
                                <label for="name">Tên chính sách<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên chính sách">
                                <span class="error" id="error_name"></span>

                            </div>

                            <div class="form-group">
                                <label for="name">Trạng thái hiển thị<span class="text-danger">(*)</span></label>
                                <input type="checkbox" value="1" name="status" id="status" style="width: 1.4em; height: 1.4em;" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Chi tiết chính sách</label>
                                <textarea name="policy_content" id="policy_content" cols="5" rows="2"
                                          class="form-control" required></textarea>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.policy.index')}}" class="btn btn-danger"><i
                                        class="fa fa-undo"></i> Quay lại</a>
                                <button type="button" class="btn btn-success" id="btn_save_create" onclick="save_create()">Lưu dữ liệu <i class="fa fa-save"></i>
                                </button>
                            </div>
                        </div>
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
    <script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
    <script>
        let policy_content = CKEDITOR.replace('policy_content');
        function save_create() {
            $('.error').text("");
            $('#form_create').validate({
                rules: {
                    name: {
                        required: true
                    },
                    policy_content: {
                        required: true
                    },
                },
                messages: {
                    name: "Tên chính sách không được bỏ trống",
                    policy_content: "Nội dung không được bỏ trống"
                }
            });
            if($('#form_create').valid() == false){
                return false;
            }
            $('#btn_save_create').prop('disabled', true);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let status;
            if ($("#status").is(":checked")) {
                status = 1;
            } else {
                status = 0;
            }
            $.ajax({
                type: 'post',
                url: '{{ route('admin.policy.store') }}',
                data: {
                    'name': $('#name').val(),
                    'policy_content': policy_content.getData().trim(),
                    'status': status,
                },
                success: function () {
                    toastr.success('Thêm mới thành công', 'Thông báo');
                    $('#btn_save_create').prop('disabled', false);
                },
                error: function (response) {
                    let data = response.responseJSON['messages'];
                    if (data.name && data.name[0] == 86) {
                        $('#error_name').text("Tên chính sách đã tồn tại");
                    } else {
                        toastr.error('Có lỗi xảy ra, vui lòng kiểm tra lại dữ liệu đầu vào hoặc liên hệ với quản trị viên', 'Thông báo');
                    }
                    $('#btn_save_create').prop('disabled', false);
                }
            });
        }

    </script>
@endsection
