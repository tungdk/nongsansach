@extends('layouts.layout_site')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">

                        <li class="home">
                            <a itemprop="url" href="index.html"><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li>
                            <a itemprop="url" href="gio-hang.html"><span itemprop="title">Giỏ hàng</span></a>
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
            <div id="content" class="col-sm-12">
                <h3>Giỏ hàng</h3>
                <div class="table-responsive table-cart-content">
                    <div style="overflow-x: auto">
                        <div style="overflow-x: auto">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center"><strong>Ảnh</strong></td>
                                    <td class="text-center"><strong>Sản phẩm</strong></td>
                                    <td class="text-center"><strong>Đơn giá</strong></td>
                                    <td class="text-center"><strong>Số lượng</strong></td>
                                    <td class="text-center"><strong>Tổng</strong></td>
                                    <td class="text-center"><strong>Xóa</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                                @if(isset($carts))--}}
                                @forelse($carts as $cart)
                                    <tr>

                                        <td class='text-center'>{{$cart->product->image}}</td>
                                        <td class='text-center'>{{$cart->product->name}}</td>
                                        <td class='text-center'>{{$cart->product->price}}</td>
                                        <td class='text-center'>{{$cart->quantity}}</td>
                                        <td class='text-center'>{{$cart->product->price}} * {{$cart->quantity}}</td>
                                        <td class='text-center'><i class="fa fa-times"></i></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan='6' class='text-center'>Chưa có sản phẩm nào trong giỏ hàng</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-4 col-sm-offset-8">
                        <div style="overflow-x: auto">
                            <div style="overflow-x: auto">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="text-right">Thành tiền:</td>
                                        <td class="text-right"><strong>0đ</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Tổng số:</td>
                                        <td class="text-right"><strong>0đ</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <a href="index.html" class="btn btn-default pull-left button_shopping">Tiếp tục mua
                                    hàng</a>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <a href="gio-hang/thanh-toan.html" class="btn btn-primary pull-right button_checkout">Tiến
                                    hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
