@extends('layouts.layout_admin')
@section('title', 'Sản phẩm')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.product.index')}}">Sản phẩm</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title pull-right"><a href="{{route('admin.product.create')}}" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></a>
                </h3>
                <ul class="nav nav-tabs">
                    <li class="nav-item @if(request()->type === 'website' || request()->type === '') active @endif">
                        <a class="nav-link " href="{{route('admin.setting.index') . '?type=website'}}">Cài đặt website</a>
                    </li>
                    <li class="nav-item @if(request()->type === 'social') active @endif">
                        <a class="nav-link" href="{{route('admin.setting.index') . '?type=social'}}">Cài đặt mạng xã hội</a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="form-group {{ $errors->first('config_key' ? 'has-danger' : '') }}">
                        <label for="name">Tên cài đặt <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="config_key" placeholder="Nhập tên cài đặt" value="{{$name->config_value}}">
                        @if($errors->first('config_key'))
                            <span class="text-danger">{{ $errors->first('config_key') }}</span>
                        @endif
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{--                                {!! $categories->links() !!}--}}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
