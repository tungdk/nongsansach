@extends('layouts.layout_admin')
@section('title', 'Slider')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý khách hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.user.index')}}">Khách hàng</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.slider.create')}}" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Trang thái</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($users))
                                @foreach($users as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            @if($user->status == 1)
                                                <a href="{{route('admin.slider.active', $user->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.slider.active', $user->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slider.edit', $user->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.slider.delete', $user->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{ $users->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
