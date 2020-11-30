@extends('layouts.layout_admin')
@section('title', 'Thêm mới đối tác')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới đối tác
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.partner.index')}}">Đối tác</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->first('name' ? 'has-danger' : '') }}">
                                <label for="name">Tên<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên" value="{{old('name')}}">
                                @if($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('logo' ? 'has-danger' : '') }}">
                                <label for="name">Ảnh nền <span class="text-danger">(*)</span></label>
                                <input type="file" class="form-control" name="logo" placeholder="Nhập ảnh" value="{{old('avatar')}}">
                                @if($errors->first('logo'))
                                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Trạng thái <span class="text-danger"><i>(Tích để hiển thị)</i></span></label>
                                <input type="checkbox" name="status" {{ old('status') == 'on' ? 'checked' : ''}} >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.partner.index')}}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
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
