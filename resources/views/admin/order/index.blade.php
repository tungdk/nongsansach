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
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                {{-- <h3 class="box-title"><a href="{{route('admin.order.create')}}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a></h3> --}}
                <form class="form-inline">

                    <input type="text" name="id" value="{{ Request::get('id')}}" placeholder="ID" class="form-control">
                    <input type="text" name="phone" value="{{ Request::get('phone')}}" placeholder="Số điện thoại"
                           class="form-control">
                    <select name="status" id="" class="form-control">
                        <option value="-1" selected>Trạng thái</option>
                        <option value="1" {{ Request::get('status')==1 ? "selected" : ""}}>Chờ xử lý</option>
                        <option value="2" {{ Request::get('status')==2 ? "selected" : ""}}>Xác nhận</option>
                        <option value="3" {{ Request::get('status')==3 ? "selected" : ""}}>Đang vận chuyển</option>
                        <option value="4" {{ Request::get('status')==4 ? "selected" : ""}}>Đã giao hàng</option>
                        <option value="0" {{ Request::get('status')==0 ? "selected" : ""}} >Hủy bỏ</option>
                    </select>
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"> Tìm kiếm</i></button>
                </form>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th>Thông tin</th>
                        <th>Số tiền</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($orders))
                        @php $i=1; @endphp
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <ul>
                                        <li>Tên: {{ $order->name }}</li>
                                        <li>Sđt: {{ $order->phone }}</li>
                                        <li>Đ/c: {{ $order->address }}</li>
                                    </ul>
                                </td>
                                <td><span
                                        style="color: red">{{ number_format($order->total_money, 0, ',', '.') }} đ</span>
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <span class="label label-{{ $order->getStatus($order->status)['class'] }}">
                                        {{ $order->getStatus($order->status)['name'] }}
                                    </span>
                                </td>
                                <td>
                                    <button onclick="view_order({{$order->id}})"
                                            class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Xem
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-xs">Thao tác</button>
                                        <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Xác nhận</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{route('admin.order.action', ['confirm', $order->id])}}"><i
                                                        class="fa fa-clipboard"></i> Xác nhận</a></li>
                                            <li>
                                                <a href="{{route('admin.order.action', ['transport', $order->id])}}"><i
                                                        class="fa fa-truck"></i> Đang vận chuyển</a></li>
                                            <li>
                                                <a href="{{route('admin.order.action', ['delivered', $order->id])}}"><i
                                                        class="fa fa-check"></i> Đã giao hàng</a></li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{{route('admin.order.action', ['cancel', $order->id])}}">Huỷ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- /.box-body -->
            </div>

            <div class="overlay" hidden>
                <i class="fa fa-refresh fa-spin"></i>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <div class="modal fade fade" id="modal-view-order">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Chi tiết đơn hàng #<span class="order-id"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="content-modal" id="content-modal">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" onclick="print_order()"><i class="fa fa-print"></i> In
                        đơn hàng
                    </button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Xác nhận</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Huỷ đơn hàng</button>
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
            $('.overlay').show();
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
                complete: function () {
                    $('.overlay').hide();
                },
                success: function (data) {
                    if (data.status == true) {
                        $('.content-modal').empty();
                        $('.content-modal').append(data.view);

                        $('.order-id').html(order_id);
                        $('#modal-view-order').modal({
                            show: true
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message,
                        })
                    }
                },
                error: function (data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Có lỗi xảy ra',
                    })
                }

            });

        }

        function print_order() {
            var divToPrint = document.getElementById('content-modal');

            var newWin = window.open('', 'Print-Window');

            newWin.document.open();

            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

            newWin.document.close();
            //
            // setTimeout(function(){newWin.close();},10);
        }
    </script>
@endsection
