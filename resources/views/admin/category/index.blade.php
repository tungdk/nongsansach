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
                    <a href="{{route('admin.category.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i>
                    </a>
                </h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
{{--                        <th style="width: 5%">Mã</th>--}}
                        <th style="width: 30%">Tên danh mục</th>
                        <th style="width: 30%">Ngày tạo</th>
                        <th style="width: 10%">Trạng thái</th>
                        <th style="width: 20%">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($categories))
                        @php $i = 1;@endphp
                        @foreach($categories as $cate)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $cate->name }}</td>
                                <td>{{ $cate->created_at }}</td>
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
    </section>
    <!-- /.content -->
@endsection

