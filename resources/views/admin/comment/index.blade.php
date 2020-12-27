@extends('layouts.layout_admin')
@section('title', 'Bình luận')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý bình luận
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.comment.index')}}">Bình luận</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

            </div>

            <div class="overlay hidden" id="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- /.box-header -->
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
        let url_active = '{{ route('admin.comment.active') }}';
        let url_delete = '{{ route('admin.comment.delete') }}'
        $(function () {
            load_data('{{route('admin.comment.load_data')}}');
        })
        function change_show_home(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.comment.show_home') }}',
                data: {
                    'id': id
                },
                success:function (data){
                    toastr.success(data.message, 'Thành công')
                },
                error:function (data){
                    toastr.error("Có lỗi xảy ra, liên hệ quản trị viên", 'Thất bại')

                }
            });
        }
    </script>

@endsection
