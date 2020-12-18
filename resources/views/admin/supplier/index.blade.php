@extends('layouts.layout_admin')
@section('title', 'Nhà cung cấp')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý nhà cung cấp
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.supplier.index')}}">Nhà cung cấp</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.supplier.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Ngày tạo</th>
                        <th>Trang thái</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($suppliers))
                        @foreach($suppliers as $supplier)
                            <tr>

                                <td>{{ $supplier->id }}</td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->logo }}</td>
                                <td>{{ $supplier->created_at }}</td>
                                <td>
                                    @if($supplier->status == 1)
                                        <a href="{{route('admin.supplier.active', $supplier->id)}}"
                                           class="label label-info">Hiển thị</a>
                                    @else
                                        <a href="{{route('admin.supplier.active', $supplier->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.supplier.edit', $supplier->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                        Sửa</a>
                                    <a href="{{route('admin.supplier.delete', $supplier->id)}}"
                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
