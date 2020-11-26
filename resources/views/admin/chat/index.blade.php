@extends('layouts.layout_admin')
@section('title', 'Chat')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chat với khách hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.chat.index')}}">Chat</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

            </div>
            <div class="box-body">
                <h1>Chat với khách hàng</h1>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
{{--                {{ $contacts->links('vendor/pagination/bootstrap-4') }}--}}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
