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
                    <li class="nav-item @if(request()->type === 'all') active @endif">
                        <a class="nav-link " href="{{route('admin.product.index') . '?type=all'}}">Tất cả</a>
                    </li>
                    <li class="nav-item @if(request()->type === 'active') active @endif">
                        <a class="nav-link" href="{{route('admin.product.index') . '?type=active'}}">Còn hàng</a>
                    </li>
                    <li class="nav-item @if(request()->type === 'soldout') active @endif">
                        <a class="nav-link" href="{{route('admin.product.index') . '?type=soldout'}}">Hết hàng</a>
                    </li>
                    <li class="nav-item @if(request()->type === 'unlisted') active @endif">
                        <a class="nav-link" href="{{route('admin.product.index') . '?type=unlisted'}}">Đã ẩn</a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>Sản phẩm</th>
{{--                                <th>Ảnh</th>--}}
                                <th>Giá</th>
                                <th>Giá sale</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                                <th>Nổi bật</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($products))
                                @foreach($products as $product)
                                    <tr @if($product->status == 0) style="background-color: #cecece" @endif>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="{{pare_url_file($product->avatar) }}"
                                                             style="width: 80px; height: 80px" alt="">
                                                    </div>
                                                    <div class="col-md-7" style="padding-left: 20px">
                                                        <div class="row">
                                                            <div class="col-md-12" style="padding-top: 7px">
                                                                <h4 style="color: #000000">{{ $product->name }}</h4>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <span>Xem: {{ $product->views }} | Bán: {{$product->buyed}} | Đánh giá: {{ $product->rating }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
{{--                                        <td>{{ $product->name }}</td>--}}
{{--                                        <td>--}}
{{--                                            <img src="{{pare_url_file($product->avatar) }}" style="width: 80px; height: 80px" alt="">--}}
{{--                                        </td>--}}
                                        <td>{{ number_format($product->price, 0,',','.') }} đ</td>
                                        <td>{{ number_format($product->sale, 0,',','.') }} đ</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            @if($product->status == 1)
                                                <a href="{{route('admin.product.active', $product->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.product.active', $product->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($product->hot == 1)
                                                <a href="{{route('admin.product.hot', $product->id)}}" class="label label-info">Nổi bật</a>
                                            @else
                                                <a href="{{route('admin.product.hot', $product->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.product.delete', $product->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
                @if(isset($products))
                    {{ $products->links('vendor/pagination/bootstrap-4') }}
                @endif
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
