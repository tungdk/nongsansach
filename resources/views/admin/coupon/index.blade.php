@extends('layouts.layout_admin')
@section('title', 'Mã giảm giá')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý mã giảm giá
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.coupon.index')}}">Mã giảm giá</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.coupon.create')}}" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Tên mã giảm giá</th>
                                <th>Mã code</th>
                                <th>Giảm giá (%)</th>
                                <th>Lượt sử dụng</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($coupons))
                                @foreach($coupons as $coupon)
                                    <tr>

                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->name }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->sale }}</td>
                                        <td>{{ $coupon->count }}</td>
                                        <td>
                                            @if($coupon->status == 1)
                                                <a href="{{route('admin.coupon.active', $coupon->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.coupon.active', $coupon->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.coupon.edit', $coupon->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.coupon.delete', $coupon->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
                {{ $coupons->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
