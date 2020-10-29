@extends('layouts.layout_admin')
@section('title', 'Thêm mới mã giảm giá')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới danh mục sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.coupon.index')}}">Mã giảm giá</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

                <div class="box-body">
                    <form role="form" action="" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->first('name' ? 'has-danger' : '') }}">
                                <label for="name">Tên mã giảm giá <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên mã giảm giá">
                                @if($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('code' ? 'has-danger' : '') }}">
                                <label for="name">Mã code <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="code" placeholder="Nhập mã code">
                                @if($errors->first('code'))
                                    <span class="text-danger">{{ $errors->first('code') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('sale' ? 'has-danger' : '') }}">
                                <label for="name">Phần trăm giảm giá <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="sale" placeholder="Nhập phần trăm giảm giá">
                                @if($errors->first('sale'))
                                    <span class="text-danger">{{ $errors->first('sale') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('count' ? 'has-danger' : '') }}">
                                <label for="name">Số lượt sử dụng <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="count" placeholder="Nhập số lưọt sử dụng">
                                @if($errors->first('count'))
                                    <span class="text-danger">{{ $errors->first('count') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.coupon.index')}}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
                                <button type="submit" class="btn btn-success">Lưu dữ liệu <i class="fa fa-save"></i></button>
                            </div>
                        </div>

                        <!-- /.box-body -->

                    </form>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
