@extends('layouts.layout_admin')
@section('title', 'Cập nhật bài viết')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.post.index')}}">Bài viết</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="row">
            @include('admin.post.form')
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
