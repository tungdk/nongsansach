@extends('layouts.layout_admin')
@section('title', 'Đơn hàng')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.order.index')}}">Đơn hàng</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <h1>Danh sách đonư hàng</h1>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.order.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Thông tin</th>
                                <th>Số tiền</th>
                                <th>Ngày tạo</th>
                                <th>Trang thái</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($orders))
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>
                                            <ul>
                                                <li>Tên: {{ $order->name }}</li>
                                                <li>Sđt: {{ $order->phone }}</li>
                                                <li>Đ/c: {{ $order->address }}</li>
                                            </ul>
                                        </td>
                                        <td><span style="color: red">{{ number_format($order->total_money, 0, ',', '.') }} đ</span>
                                        </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            <span class="label label-{{ $order->getStatus($order->status)['class'] }}">
                                                {{ $order->getStatus($order->status)['name'] }}
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-xs btn-default" onclick="view_order({{$order->id}})">
                                                <i class="fa fa-eye"></i> Xem
                                            </button>
                                            <a href="{{route('admin.partner.edit', $order->id)}}"
                                               class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Sửa</a>
                                            <a href="{{route('admin.partner.delete', $order->id)}}"
                                               class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
                {{ $orders->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <div class="modal fade fade" id="modal-view-order">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Chi tiết đơn hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="content-modal">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        function view_order(order_id) {
            $('#modal-view-order').modal({
                show: true
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.order.view') }}',
                data: {
                    'order_id': order_id
                },
                success: function (data) {
                    $('.content-modal').empty();
                    $('.content-modal').append(data.view);
                },
                error: function (data) {

                }

            });

        }
    </script>
@endsection
