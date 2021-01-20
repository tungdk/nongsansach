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
                <div class="box-header">
{{--                    <form class="form-inline">--}}
{{--                        <input type="text" name="id" value="{{ Request::get('id')}}" placeholder="ID"--}}
{{--                               class="form-control">--}}
{{--                        <input type="text" name="name" value="{{ Request::get('name')}}" placeholder="Name..."--}}
{{--                               class="form-control">--}}
{{--                        <select name="type" id="" class="form-control">--}}
{{--                            <option value="">Danh mục</option>--}}
{{--                            <option value="2" {{ Request::get('type')==2 ? "selected='selected'" : ""}}>Khách</option>--}}
{{--                            <option value="1" {{ Request::get('type')==1 ? "selected='selected'" : ""}}>Thành viên--}}
{{--                            </option>--}}
{{--                        </select>--}}
{{--                        <select name="status" id="" class="form-control">--}}
{{--                            <option value="0">Trạng thái</option>--}}
{{--                            <option value="1" {{ Request::get('status')==1 ? "selected='selected'" : ""}}>Tiếp nhận--}}
{{--                            </option>--}}
{{--                            <option value="2" {{ Request::get('status')==2 ? "selected='selected'" : ""}}>Đang vận--}}
{{--                                chuyển--}}
{{--                            </option>--}}
{{--                            <option value="3" {{ Request::get('status')==3 ? "selected='selected'" : ""}}>Đã bàn giao--}}
{{--                            </option>--}}
{{--                            <option value="-1" {{ Request::get('status')==-1 ? "selected='selected'" : ""}} >Hủy bỏ--}}
{{--                            </option>--}}
{{--                        </select>--}}
{{--                        <button type="submit" class="btn btn-info"><i class="fa fa-search"> Tìm kiếm</i></button>--}}
{{--                    </form>--}}
                </div>
                <h3 class="box-title pull-right">
                    <a href="{{route('admin.product.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
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
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 45%">Sản phẩm</th>
                        {{--                                <th>Ảnh</th>--}}
                        <th style="width: 10%">Giá</th>
                        <th style="width: 10%">Số lượng</th>
                        {{--                                <th>Trạng thái</th>--}}
                        <th style="width: 10%">Nổi bật</th>
                        <th style="width: 5%">Gửi mail</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($products))
                        <?php $i=1; ?>
                        @foreach($products as $product)
                            <tr @if($product->status == 0) style="background-color: #cecece" @endif>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{ asset('uploads/products/'. $product->avatar) }}"
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
                                <td>
                                    <del>{{ number_format($product->price_old, 0,',','.') }} đ</del>
                                    <br>
                                    <span
                                        style="color: red">{{ number_format($product->price_new, 0,',','.') }} đ</span>
                                </td>
                                <td>{{ $product->quantity }}</td>
                                {{--                                        <td>--}}
                                {{--                                            @if($product->status == 1)--}}
                                {{--                                                <a href="{{route('admin.product.active', $product->id)}}" class="label label-info">Hiển thị</a>--}}
                                {{--                                            @else--}}
                                {{--                                                <a href="{{route('admin.product.active', $product->id)}}" class="label label-default">Ẩn</a>--}}
                                {{--                                            @endif--}}
                                {{--                                        </td>--}}
                                <td>
                                    @if($product->hot == 1)
                                        <a href="{{route('admin.product.hot', $product->id)}}" class="label label-info">Nổi
                                            bật</a>
                                    @else
                                        <a href="{{route('admin.product.hot', $product->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td style="text-align: center">
                                    <input type="checkbox"
                                           {{$product->send_mail == 1 ? 'checked' : ''}} id="checkbox_{{$product->id}}"
                                           onclick="return false;">
                                </td>
                                <td>
                                    <a href="{{route('admin.product.edit', $product->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                        Sửa</a>
                                    <a href="{{route('admin.product.delete', $product->id)}}"
                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                    @if($product->status == 1)
                                        <button class="btn btn-xs btn-default" onclick="send_mail({{$product->id}})"><i
                                                class="fa fa-mail-forward"></i> Gửi mail
                                        </button>
                                    @endif
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
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        function send_mail(id) {
            const token = "{{ @csrf_token() }}";
            send_mail_information(id, token);
        }
    </script>
    <script src="{{ asset("js/admin/send_mail.js") }}"></script>
@endsection
