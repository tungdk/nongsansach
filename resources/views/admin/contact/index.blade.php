@extends('layouts.layout_admin')
@section('title', 'Phản hồi từ khách hàng')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý phản hồi từ khách hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li class="active">Phản hồi</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            </div>

            <!-- /.box-header -->
            <div class="overlay hidden" id="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <div class="box-body" id="table-list">

            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script src="{{ asset('js/admin/crud.js') }}"></script>

    <script>
        $(function () {
            load_data('{{ route('admin.contact.load_data') }}');
        })

        function change_status_contact(id, status) {
            $.ajax({
                type: 'post',
                url: '{{ route('admin.contact.status') }}',
                data: {
                    'id': id,
                    'status': status
                },
                success: function (data) {
                    toastr.success('Cập nhật thành công', 'Thành công');
                    $('#table-list').empty();
                    $('#table-list').append(data.view);
                },
                error: function (data) {
                    toastr.error('Có lỗi xảy ra, vui lòng liên hệ quản trị viên', 'Thông báo');
                }
            });
        }
    </script>
@endsection
