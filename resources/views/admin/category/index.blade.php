@extends('layouts.layout_admin')
@section('title', 'Danh mục')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý danh mục sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.category.index')}}">Danh mục sản phẩm</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create">
                        Thêm mới <i class="fa fa-plus-circle"></i>
                    </button>
                </h3>
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
    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Thêm mới danh mục</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mời nhập tên danh mục">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" onclick="save_create()"><i class="fa fa-check"></i> Lưu</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
{{--    <div class="modal fade" id="modal-update">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span></button>--}}
{{--                    <h4 class="modal-title">Cập nhật danh mục</h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="form-control">--}}
{{--                        <input type="text" name="name" id="name">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>--}}
{{--                    <button type="button" class="btn btn-primary" onclick="save_create()">Lưu</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.modal-content -->--}}
{{--        </div>--}}
{{--        <!-- /.modal-dialog -->--}}
{{--    </div>--}}
@endsection
@section('js')
    <script>
        $(function () {
            load_data();
            // $('#example1').DataTable({
            //     "language": {
            //         "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Vietnamese.json"
            //     }
            // })
        })

        function load_data() {
            $('#overlay').removeClass('hidden');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'get',
                url: '{{ route('admin.category.load_data') }}',
                success: function (data) {
                    $('#overlay').addClass('hidden');
                    $('#table-list').empty();
                    $('#table-list').append(data.view);
                },
            });
        }

        function save_create() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '{{ route('admin.category.create') }}',
                data: {
                    'name': $('#name').val(),
                },
                success: function (data) {
                    $('#modal-create').modal('toggle');
                    load_data();
                    toastr.success('Thêm mới thành công', 'Thành công')
                },
                error: function () {
                    toastr.error('Thêm mới thất bại', 'Thất bại')
                }
            });
        }

    </script>
@endsection
