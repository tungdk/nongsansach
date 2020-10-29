@extends('layouts.layout_admin')
@section('title', 'Cài đặt')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cài đặt
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.setting.index')}}">Cài đặt</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="btn-group float-right" >
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></button>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('admin.setting.create') . '?type=Text'}}">Text</a></li>
                            <li><a href="{{route('admin.setting.create') . '?type=Textarea'}}">Textarea</a></li>
                            <li><a href="{{route('admin.setting.create') . '?type=Ckeditor'}}">Ckeditor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 30%">Tên</th>
                                <th style="width: 30%">Giá trị</th>
                                <th style="width: 10%">Trạng thái</th>
                                <th style="width: 20%">Thao tác</th>
                            </tr>
                            @if(isset($settings))
                                @foreach($settings as $setting)
                                    <tr>

                                        <td>{{ $setting->id }}</td>
                                        <td>{{ $setting->config_key }}</td>
                                        <td>{{ $setting->config_value }}</td>
                                        <td>
                                            @if($setting->status == 1)
                                                <a href="{{route('admin.setting.active', $setting->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.setting.active', $setting->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.setting.edit', $setting->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.setting.delete', $setting->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
{{--                {!! $categories->links() !!}--}}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
