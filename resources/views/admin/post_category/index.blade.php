@extends('layouts.layout_admin')
@section('title', 'Danh mục')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý danh mục bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.postcate.index')}}">Danh mục bài viết</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.postcate.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 30%">Tên danh mục</th>
                        <th style="width: 10%">Thời gian</th>
                        <th style="width: 10%">Trạng thái</th>
                        <th style="width: 20%">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($postcates))
                        @php $i=1; @endphp
                        @foreach($postcates as $postcate)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $postcate->name }}</td>
                                <td>{{ $postcate->created_at }}</td>
                                <td>
                                    @if($postcate->status == 1)
                                        <a href="{{route('admin.postcate.active', $postcate->id)}}"
                                           class="label label-info">Hiển thị</a>
                                    @else
                                        <a href="{{route('admin.postcate.active', $postcate->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.postcate.edit', $postcate->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                        Sửa</a>
                                    <a href="{{route('admin.postcate.delete', $postcate->id)}}"
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

