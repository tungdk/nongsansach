@extends('layouts.layout_admin')
@section('title', 'Thêm mới slider')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật slider
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.slider.index')}}">Slider</a></li>
            <li class="active">Cập nhật</li>
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
                            <div class="form-group {{ $errors->first('title' ? 'has-danger' : '') }}">
                                <label for="name">Tiêu đề<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" value="{{$slider->title}}">
                                @if($errors->first('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('description' ? 'has-danger' : '') }}">
                                <label for="name">Mô tả <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="description" placeholder="Nhập mô tả" value="{{$slider->description}}">
                                @if($errors->first('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->first('thumbnail' ? 'has-danger' : '') }}">
                                <label for="name">Ảnh <span class="text-danger">(*)</span></label>
                                <input type="file" class="form-control" name="thumbnail" value="{{$slider->thumbnail}}">
                                @if($errors->first('thumbnail'))
                                    <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name" >Trạng thái <span class="text-danger"><i>(Tích để hiển thị)</i></span></label>
                                <input type="checkbox" name="status" @if(isset($slider->status) && $slider->status == 1) checked @endif>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.slider.index')}}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
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
