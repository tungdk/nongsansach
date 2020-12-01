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
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-12 panel">
                    <div class="col-md-12 header" style="display: flex; justify-content: space-between;">
                        <div>
                            <i class="fa fa-map-marker"></i> Địa chỉ nhận hàng:
                        </div>
                        <span onclick="$('.form_address').show()">Thay đổi >></span>
                    </div>
                    <div class="col-md-12 content">
                        {{$user->name . ' | ' . $user->phone}} <br>
                        {{$user->address}}

                    </div>
                    <div class="col-md-12 form_address" hidden>
                        <form action="">
                            <input type="text" name="name" placeholder="Nhập họ tên người nhận" value="{{ $user->name }}">
                            <input type="text" name="phone" placeholder="Nhập số điện thoại người nhận" value="{{ $user->phone }}">
                            <input type="text" name=address"" placeholder="Nhập địa chỉ nhận hàng" value="{{ $user->address }}">
                        </form>
                    </div>
                </div>
                <div class="col-md-12 panel">
                    <div class="col-md-12 header">
                        <i class="fa fa-dolly-flatbed"></i> Phương thức thanh toán
                    </div>

                    <div class="col-md-12 content">
                        <label for="checkout">
                            <input type="radio" value="0" name=""> Thanh toán khi nhận hàng</label>
                        <label for="checkout">
                            <input type="radio" value="1" name=""> Thanh toán trực tuyến</label>
                    </div>

                </div>

            </div>
            <div class="col-md-5">
                <div class="col-md-12 panel">
                    <div class="col-md-12 header">
                        <i class="fa fa-calendar-check-o"></i> Thông tin đơn hàng
                    </div>
                    <div class="col-md-12 content">
                        @foreach($carts as $cart)
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="https://miro.medium.com/max/10000/0*wZAcNrIWFFjuJA78" alt=""
                                         style="width: 110px">
                                </div>
                                <div class="col-md-8" style="">
                                    <div class="product-name">
                                        {{$cart->product->name}}
                                    </div>
                                    <div class="product-price" style="    display: flex;
                                                                                            justify-content: space-between;
                                                                                            align-items: baseline;
                                                                                            margin-top: .4rem;">
                                        <div style="font-size: 1.4rem;
                                                                                font-weight: 500;
                                                                                line-height: 1.4;
                                                                                color: #e5101d;">
                                            <strong>{{$cart->product->price}}đ</strong></div>
                                        <span class="quantity" style="font-size: 1.4rem;
                                                font-weight: 500;
                                                color: #000;">x {{$cart->quantity}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div>
                            Mã giảm giá của shop
                            <input type="text" name="sale">
                        </div>
                        <div>
                            Tạm tính <br>
                            Mã giảm giá <br>
                            Phí vận chuyển <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 panel">
                    <div class="col-md-12 header">
                        <i class="fa fa-comment-o"></i> Ghi chú
                    </div>
                    <div class="col-md-12 content">
                        <textarea name="note" id="note" cols="30" rows="6"
                                  placeholder="Bạn có nhắn gì tới shop không"></textarea>
                    </div>
                </div>
                <div class="col-md-12 panel">
                    <div class="col-md-12 header">
                        Tổng thanh toán
                    </div>
                    <div class="col-md-12 content">
                        <button type="button" class="btn" tabindex="6" style="background-color: red; width: 100%; color: white">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>

@endsection
