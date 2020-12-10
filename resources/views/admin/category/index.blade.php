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
                <h3 class="box-title"><a href="{{route('admin.category.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 30%">Tên danh mục</th>
                        <th style="width: 30%">Danh mục cha</th>
                        <th style="width: 10%">Trạng thái</th>
                        <th style="width: 20%">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($categories))
                        @foreach($categories as $cate)
                            <tr>
                                <td>{{ $cate->id }}</td>
                                <td>{{ $cate->name }}</td>
                                <td>{{ $cate->parent_id == 0 ? '' : $cate->parent_cate()->name }}</td>
                                <td>
                                    @if($cate->status == 1)
                                        <a href="{{route('admin.category.active', $cate->id)}}"
                                           class="label label-info">Hiển thị</a>
                                    @else
                                        <a href="{{route('admin.category.active', $cate->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.category.edit', $cate->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                        Sửa</a>
                                    <a href="{{route('admin.category.delete', $cate->id)}}"
                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                </td>

                            </tr>
                        @endforeach
                    @endif

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- /.box-body -->
{{--        <div class="box-body">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="box">--}}
{{--                    <table class="table table-hover">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <th style="width: 5%">#</th>--}}
{{--                            <th style="width: 30%">Tên danh mục</th>--}}
{{--                            <th style="width: 30%">Danh mục cha</th>--}}
{{--                            <th style="width: 10%">Trạng thái</th>--}}
{{--                            <th style="width: 20%">Thao tác</th>--}}
{{--                        </tr>--}}
{{--                        @if(isset($categories))--}}
{{--                            @foreach($categories as $cate)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $cate->id }}</td>--}}
{{--                                    <td>{{ $cate->name }}</td>--}}
{{--                                    <td>{{ $cate->parent_id == 0 ? '' : $cate->parent_cate()->name }}</td>--}}
{{--                                    <td>--}}
{{--                                        @if($cate->status == 1)--}}
{{--                                            <a href="{{route('admin.category.active', $cate->id)}}"--}}
{{--                                               class="label label-info">Hiển thị</a>--}}
{{--                                        @else--}}
{{--                                            <a href="{{route('admin.category.active', $cate->id)}}"--}}
{{--                                               class="label label-default">Ẩn</a>--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{route('admin.category.edit', $cate->id)}}"--}}
{{--                                           class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>--}}
{{--                                            Sửa</a>--}}
{{--                                        <a href="{{route('admin.category.delete', $cate->id)}}"--}}
{{--                                           class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>--}}
{{--                                    </td>--}}

{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    <!-- /.box-body -->--}}
{{--                </div>--}}
{{--                <!-- /.box -->--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- /.box-body -->
{{--        <div class="box-footer">--}}
{{--            {{ $categories->links('vendor/pagination/bootstrap-4') }}--}}
{{--        </div>--}}
{{--        </div>--}}
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <!-- DataTables -->
    <script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
