@extends('layouts.layout_admin')
@section('title', 'Đơn hàng')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hướng dẫn sử dụng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li class="active">Hướng dẫn sử dụng</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h4>Chi tiết hướng dẫn sử dụng </h4>
            </div>
            <div class="box-body">
                <h2>Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi</h2>
                <h4>Sau đây là hướng dẫn sử dụng của chương trình</h4>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.instruction.download') }}" class="btn btn-success" target="_blank"><i class="fa fa-download"></i> Tải xuống</a>

            </div>
        </div>
    </section>

@endsection
