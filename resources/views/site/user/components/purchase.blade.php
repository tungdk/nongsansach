@if(isset($order_detail))
    <div class="account-title">
        <h4>Lịch sử mua hàng</h4>
        <hr>
    </div>
    <div class="account-body">
        <div class="row">
            @foreach ($order_detail as $key => $order)
                <div class="col-md-12 box" style="padding-bottom: 20px">
                    <div class="col-md-12 order card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <span style="color: orange">Mã đơn hàng: {{ $key }}</span>
                            </div>
                            <div class="col-md-4">
                                <span>Ngày đặt: {{ $order['created_at'] }} </span>
                            </div>
                            <div class="col-md-4">
        											<span class='float-right' style='color: orangered'>Tình trạng:
        												@if ($order['status'] == 1)
                                                            Chờ xử lý <a
                                                                href='' onclick="cancel_order('{{$order['id']}}'); return false;"
                                                                class='btn btn-warning'>Huỷ</a>
                                                        @elseif ($order['status'] == 2)
                                                            Chờ lấy hàng
                                                        @elseif ($order['status'] == 3)
                                                            Đang vận chuyển
                                                        @elseif ($order['status'] == 4)
                                                            Đã giao hàng
                                                        @elseif ($order['status'] == 0)
                                                            Đã huỷ
                                                        @endif
        											</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 order-detail card-body" style="padding-top: 20px">
                        <div class="row">
                            @foreach ($order['detail'] as $product)
                                <div class="col-md-12" style="padding-bottom: 25px">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img
                                                        src="{{ asset('uploads/products/'.$product->image) }}">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="col-md-12">
                                                        <span>{{ $product->name }}</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span>x {{ $product->quantity }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <span
                                                    class="float-right">{{ number_format($product->total) }} đ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12" style="font-size: 15px">
                                <a href="#" onclick="view_order({{$order['id']}}); return false;"
                                   class="btn-sm btn-default" style="font-size: 15px">Chi tiết</a>
                                <span style="float: right">Tổng số tiền: {{ number_format($order['payment']) }}  VNĐ</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="modal fade fade" id="modal-view-order">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Chi tiết đơn hàng # <p class="order-id"></p></h4>
                </div>
                <div class="modal-body">
                    <div class="content-modal" id="content-modal">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@else
    <div class="no-comment" style="margin-top: 30px">
        <p>Bạn chưa có đơn hàng nào.</p>
    </div>
@endif
<script>

    function cancel_order(order_id) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Swal.fire({
            title: 'Bạn muốn huỷ đơn hàng?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('site.user.cancel_order') }}',
                    data: {
                        'order_id': order_id
                    },
                    success: function (data) {
                        if (data.status == true) {
                            Toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            appendData(data.view);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.message
                            })
                        }

                    },
                    error: function (data) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Có lỗi xảy ra'
                        })
                    }
                });
            }
        })

    }
    function appendData(data) {
        $('#pageContent').empty();
        $('#pageContent').append(data);
        processAjaxData(data, urlRequest)
    }

    function view_order(order_id) {
        $('.overlay').show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('site.order.view') }}',
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
</script>
