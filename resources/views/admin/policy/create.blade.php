@extends('layouts.layout_admin')
@section('title', 'Thêm mới chính sách')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới chính sách
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.policy.index')}}">Chính sách</a></li>
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
                        <div class="col-md-8">
                            <div class="form-group {{ $errors->first('name' ? 'has-danger' : '') }}">
                                <label for="name">Tên chính sách<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên chính sách"
                                       value="{{old('name')}}">
                                @if($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Chi tiết chính sách</label>
                                <textarea name="content" id="content" cols="5" rows="2"
                                          class="form-control">{{ $product->content ?? '' }}</textarea>
                                @if ($errors->first('content'))
                                    <span class="text-danger">{{ $errors->first('content') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-sm-4">
{{--                            <div class="box box-warning">--}}
{{--                                <div class="box-header with-border">--}}
{{--                                    <h3 class="box-title">Trạng thái hiển thị sản phẩm</h3>--}}
{{--                                </div>--}}
{{--                                <div class="box-body">--}}
                                    <div class="form-group" >
                                        <label for="name">Trạng thái hiển thị<span class="text-danger">(*)</span></label>

                                        <label>
                                            <input type="radio" class="radio" value="1" name="status" checked/>Hiển thị</label>
                                        <label>
                                            <input type="radio" class="radio" value="0" name="status"
                                                   @if(isset($product->status) && $product->status == 0) checked @endif/>Ẩn</label>
                                    </div>
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.coupon.index')}}" class="btn btn-danger"><i
                                        class="fa fa-undo"></i> Quay lại</a>
                                <button type="submit" class="btn btn-success">Lưu dữ liệu <i class="fa fa-save"></i>
                                </button>
                            </div>
                        </div>

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
@section('js')
    <script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('content', options);
    </script>
@endsection
