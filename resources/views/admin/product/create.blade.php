@extends('layouts.layout_admin')
@section('title', 'Thêm mới sản phẩm')
@section('css')
    <link rel="stylesheet" href="{{asset('adminlte/css/bootstrap-tagsinput.css')}}">
@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.product.index')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.product.index')}}">Sản phẩm</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="row">
            @include('admin.product.form')
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script src="{{asset('adminlte/js/bootstrap-tagsinput.min.js')}}"></script>
@endsection
