@extends('layouts.layout_admin')
@section('title', 'Cập nhật cài đặt')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật cài đăt
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.setting.index')}}">Cài đặt</a></li>
            <li class="active">Cập nhật</li>
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
                            <div class="form-group {{ $errors->first('config_key' ? 'has-danger' : '') }}">
                                <label for="name">Tên cài đặt <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="config_key" placeholder="Nhập tên cài đặt" value="{{$setting->config_key}}">
                                @if($errors->first('config_key'))
                                    <span class="text-danger">{{ $errors->first('config_key') }}</span>
                                @endif
                            </div>

{{--                            @if($setting->type === 'Text')--}}
{{--                                <input type="hidden" name="type" value="text">--}}
{{--                            @elseif($setting->type === 'Textarea')--}}
{{--                                <input type="hidden" name="type" value="textarea">--}}
{{--                            @elseif($setting->type === 'Ckeditor')--}}
{{--                                <input type="hidden" name="type" value="ckeditor">--}}
{{--                            @endif--}}

                            <div class="form-group {{ $errors->first('config_value' ? 'has-danger' : '') }}">
                                <label for="name">Giá trị <span class="text-danger">(*)</span></label>
                                @if($setting->type == 'text')
                                    <input type="text" class="form-control" name="config_value" placeholder="Nhập giá trị" value="{{$setting->config_value}}">
                                @elseif($setting->type == 'textarea')
                                    <textarea class="form-control" name="config_value" placeholder="Nhập giá trị" rows="5">{{$setting->config_value}}</textarea>
                                @elseif($setting->type == 'ckeditor')
                                    <textarea class="form-control" id="config_value_setting" name="config_value" placeholder="Nhập giá trị">{{$setting->config_value}}</textarea>
                                @endif
                                @if($errors->first('config_value'))
                                    <span class="text-danger">{{ $errors->first('config_value') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer text-center">
                                <a href="{{route('admin.setting.index')}}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
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
@section('js')
    <script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('config_value_setting');
    </script>
@endsection
