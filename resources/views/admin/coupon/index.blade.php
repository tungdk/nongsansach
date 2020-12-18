@extends('layouts.layout_admin')
@section('title', 'Mã giảm giá')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý mã giảm giá
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.coupon.index')}}">Mã giảm giá</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.coupon.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th>Tên mã giảm giá</th>
                        <th>Mã code</th>
                        <th>Giảm giá (%)</th>
                        <th>Lượt sử dụng</th>
                        <th>Bắt đầu <i class="fa fa-check"></i></th>
                        <th>Kết thúc <i class="fa fa-times"></i></th>
                        <th>Trạng thái</th>
                        <th>Gửi mail</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($coupons))
                        @php $i = 1; @endphp
                        @foreach($coupons as $coupon)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $coupon->name }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->sale }}</td>
                                <td>{{ $coupon->count }}</td>
                                <td>{{ $coupon->start_time }}</td>
                                <td>{{ $coupon->end_time }}</td>
                                <td>
                                    @if($coupon->status == 1)
                                        <a href="{{route('admin.coupon.active', $coupon->id)}}"
                                           class="label label-info">Hiển thị</a>
                                    @else
                                        <a href="{{route('admin.coupon.active', $coupon->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
                                <td style="text-align: center">
                                    <input type="checkbox"
                                           {{$coupon->send_mail == 1 ? 'checked' : ''}} id="checkbox_{{$coupon->id}}"
                                           onclick="return false;">
                                </td>
                                <td>
                                    <a href="{{route('admin.coupon.edit', $coupon->id)}}"
                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                        Sửa</a>
                                    <a href="{{route('admin.coupon.delete', $coupon->id)}}"
                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                    @if($coupon->status == 1 && $coupon->count > 0)
                                        <button class="btn btn-xs btn-default" onclick="send_mail({{$coupon->id}})"><i
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
