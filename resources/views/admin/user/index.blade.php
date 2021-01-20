@extends('layouts.layout_admin')
@section('title', 'Khách hàng')
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
                <h3 class="box-title"><a href="{{route('admin.slider.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Trang thái</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($users))
                        @php $i = 1; @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    @if($user->active == 1)
                                        <a href="{{route('admin.user.active', $user->id)}}" class="label label-info">Hiển
                                            thị</a>
                                    @else
                                        <a href="{{route('admin.user.active', $user->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.user.show', $user->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-eye"></i>
                                    </a>
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
