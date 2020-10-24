@extends('layouts.layout_admin')
@section('title', 'Sửa danh mục sản phẩm')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật danh mục sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.category.index')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.category.index')}}">Danh mục sản phẩm</a></li>
            <li class="active">Sửa</li>
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
                                <label for="name">Tên danh mục <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Nhập tên danh mục" >
                                @if($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="custom-select form-control" name="parent_id" >
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
                                <a href="{{route('admin.category.index')}}" class="btn btn-primary">Quay lại</a>

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
