@extends('layouts.layout_site')
@section('css')

@endsection
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="{{route('site.home')}}"><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li>
                            <a itemprop="url" href="{{route('site.cart.index')}}"><span itemprop="title">Giỏ hàng</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">Thanh toán</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container content_checkout">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-12 panel pt-4">
                    <div class="col-md-12 header" style="display: flex; justify-content: space-between;">
                        <div>
                            <i class="fa fa-map-marker"></i> Địa chỉ nhận hàng:
                        </div>
                    </div>
                    <div class="col-md-12 form_address pt-3">
                        <form action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ và tên người nhân</label>
                                <input type="text" name="name" placeholder="Nhập họ tên người nhận"
                                       value="{{ $user->name }}" id="name" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại người nhận</label>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại người nhận"
                                       value="{{ $user->phone }}" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ nhận hàng</label>
                                <input type="text" name=address"" placeholder="Nhập địa chỉ nhận hàng"
                                       value="{{ $user->address }}" id="address">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 panel pt-4">
                    <div class="col-md-12 header">
                        <i class="fa fa-dolly-flatbed"></i> Phương thức thanh toán
                    </div>
                    <div class="col-md-12 content pt-3 pb-3">
                        <label class="pt-2">
                            <input type="radio" value="0" name="payment_method" id="payment_method_0" checked/>
                            Thanh toán khi nhận hàng
                        </label>
                        <label class="pt-2">
                            <input type="radio" value="1" name="payment_method" id="payment_method_1"/>
                            Thanh toán trực tuyến
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12 panel pt-4">
                    <div class="col-md-12 header">
                        <i class="fa fa-calendar-check-o"></i> Thông tin đơn hàng
                    </div>
                    <div class="col-md-12 content pt-4">
                        <?php $total = 0; ?>
                        @foreach($carts as $cart)
                            <?php $total += $cart->TongTien; ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('uploads/products/'.$cart->avatar) }}" alt=""
                                         style="width: 80px; height: 80px; object-fit: cover">
                                </div>
                                <div class="col-md-9" style="">
                                    <div class="product-name">
                                        {{$cart->name}}
                                    </div>
                                    <div class="product-price" style="    display: flex;
                                                                                            justify-content: space-between;
                                                                                            align-items: baseline;
                                                                                            margin-top: .4rem;">
                                        <div style="font-size: 1.4rem;
                                                    font-weight: 500;
                                                    line-height: 1.4;
                                                    color: #e5101d;">
                                            <strong>{{ number_format($cart->price_new, 0, ',', '.') }} đ</strong></div>
                                        <span class="quantity" style="font-size: 1.4rem;
                                                font-weight: 500;
                                                color: #000;">x {{$cart->quantity}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pt-4">
                            Mã giảm giá của shop
                            <input type="text" name="coupon" id="coupon">
                            <span id="coupon_id" hidden></span>
                            <span hidden class="error_coupon"></span><br>
                            <button type="button" class="btn btn-success" onclick="check_coupon()">Gửi</button>
                            <button type="button" class="btn btn-danger" onclick="cancel_coupon()">Huỷ</button>
                        </div>
                        <div class="pt-5">Tạm tính: <span class="total" style="font-size: 1.4rem;
                                                    font-weight: 500;
                                                    line-height: 1.4;
                                                    float: right;
                                                    color: #e5101d;">{{number_format($total, 0, ',', '.')}} đ</span> <br></div>
                        <div class="pt-3">Mã giảm giá: <span class="value_coupon" style="float:right;"></span></div>
                        <div class="pt-3 pb-3">Phí vận chuyển: <br></div>
                    </div>
                </div>

                <div class="col-md-12 panel">
                    <div class="col-md-12 header pt-4 pb-3">
                        <i class="fa fa-comment-o"></i> Ghi chú
                    </div>
                    <div class="col-md-12 content pb-3">
                        <textarea name="note" id="note" cols="30" rows="5"
                                  placeholder="Bạn có nhắn gì tới shop không"></textarea>
                    </div>
                </div>
                <div class="col-md-12 panel">
                    <div class="col-md-12 header pt-4 pb-4" style="font-size: 20px">
                        Tổng thanh toán: <span class="all_total" style="color: red">{{number_format($total, 0, '.', ',')}} đ</span>
                    </div>
                    <div class="col-md-12 content pb-4">
                        <button type="button" class="btn" tabindex="6"
                                style="background-color: red; width: 100%; color: white" onclick="check_out()">Đặt hàng
                        </button>
                        <div id="paypal-button" hidden></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        var vnd_to_usd = {{ $total }};
        var total_money = Math.ceil(vnd_to_usd / 23000);
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AXiaINF8v6itpsxjVt-8DPQV35_2s_pnh9mo3FHchR4_ur5NI1JEq7Q5EyjHB9-ylYwySJo2VxaYm6kO',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: total_money,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    var success = 'true';
                });
            }
        }, '#paypal-button');


        function check_out(){
            if($('#name').val() === "" || $('#phone').val() === "" || $('#address').val() === "" ){
                Swal.fire({
                    icon: 'error',
                    title: 'Vui lòng nhập địa chỉ nhận hàng'
                })
                return false;
            }

            // if(document.querySelector('input[name = "payment_method"]:checked').value == 1){
            //     $('#paypal-button').submit();
            //     if(success != 'true'){
            //         window.alert('Số dư tài khoản của bạn không đủ');
            //         return false;
            //     }
            // }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('site.checkout.post')}}',
                data: {
                    'name': $('#name').val(),
                    'phone': $('#phone').val(),
                    'address': $('#address').val(),
                    'note': $('#note').val(),
                    'payment_method':  document.querySelector('input[name = "payment_method"]:checked').value,
                    'coupon_id': $('#coupon_id').text(),
                },
                success: function (data){
                    if(data.status == true){
                        $('.content_checkout').empty();
                        $('.content_checkout').append(data.view);
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

                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                    }
                    else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message
                        })
                    }
                },
                error: function (data){
                    Swal.fire({
                        icon: 'error',
                        title: 'Có lỗi xảy ra'
                    })
                }
            });
        }

        function check_coupon(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('site.check_coupon')}}',
                data: {
                    'coupon': $('#coupon').val()
                },
                success: function (data){
                    if(data.status === true){
                        $('.error_coupon').empty();
                        $('.error_coupon').append(data.message);
                        $('.error_coupon').show();

                        let x = {{$total}} * data.sale;
                        let conpon = x/100;
                        $('.value_coupon').empty();
                        $('.value_coupon').append( '-' + conpon + ' đ');

                        let thanhtien = {{$total}} - conpon;
                        $('.all_total').empty();
                        $('.all_total').append(thanhtien+' đ');

                        $('#coupon_id').empty();
                        $('#coupon_id').append(data.id);

                    }
                    else {
                        $('.error_coupon').empty();
                        $('.error_coupon').append(data.message);
                        $('.error_coupon').show();
                    }
                },
                error: function (data){

                }

            });
        }

        function cancel_coupon(){
            $('#coupon_id').empty();
            $('.value_coupon').empty();

            $('.all_total').empty();
            $('.all_total').append({{ $total }}+'đ');
            document.getElementById('coupon').value='';
        }
    </script>
@endsection
