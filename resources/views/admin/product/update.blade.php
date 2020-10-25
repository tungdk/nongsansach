@extends('layouts.layout_admin')
@section('title', 'Cập nhật sản phẩm')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.product.index')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.product.index')}}">Sản phẩm</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            @include('admin.product.form')
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
