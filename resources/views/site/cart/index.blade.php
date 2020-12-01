@extends('layouts.layout_site')
@section('css')
    <link href="{{asset('css/cart.css')}}" rel="stylesheet" type="text/css"/>
@endsection
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
                            <strong><span itemprop="title">Giỏ hàng</span></strong>
                        </li>
                        {{--                        <li><strong><span itemprop="title">Thanh toán</span></strong></li>--}}
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
                            <table id="cart" class="table table-hover table-condensed">
                                @if(count($carts) > 0)
                                    <thead>
                                    <tr>
                                        <th style="width:50%">Tên sản phẩm</th>
                                        <th style="width:10%">Giá</th>
                                        <th style="width:8%">Số lượng</th>
                                        <th style="width:22%" class="text-center">Thành tiền</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($carts as $key => $cart)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-2 hidden-xs"><img
                                                            src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg"
                                                            alt="Sản phẩm 1" class="img-responsive" width="100">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <h4 class="nomargin">{{$cart->product->name}}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">{{$cart->product->price}} đ</td>
                                            <td data-th="Quantity">
                                                <input class="form-control text-center" value="{{$cart->quantity}}"
                                                       type="number" min="1" style="width: 100px" id="quantity">
                                            </td>
                                            <td data-th="Subtotal" class="text-center">{{$cart->product->price}}
                                                * {{$cart->quantity}} đ
                                            </td>
                                            <td class="actions" data-th="">
                                                <a href="" data-id="{{$cart->product_id}}"
                                                   class="btn btn-info btn-sm edit-update-cart"><i
                                                        class="fa fa-edit"></i>
                                                </a>
                                                <a href="" data-id="{{$cart->product_id}}"
                                                   class="btn btn-danger btn-sm delete-update-cart"><i
                                                        class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    {{--                                <tr class="visible-xs">--}}
                                    {{--                                    <td class="text-center"><strong>Tổng 200.000 đ</strong>--}}
                                    {{--                                    </td>--}}
                                    {{--                                </tr>--}}
                                    <tr>
                                        <td><a href="{{route('site.home')}}" class="btn btn-warning"><i
                                                    class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                                        </td>
                                        <td colspan="2" class="hidden-xs"></td>
                                        <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                                        </td>

                                        <td><a href="{{route('site.checkout.index')}}"
                                               class="btn btn-success btn-block">Thanh
                                                toán
                                                <i class="fa fa-angle-right"></i></a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                @else
                                    <tbody>
                                    <tr>
                                        <td colspan='6' class='text-center'><h2>Bạn chưa có sản phẩm trong giỏ hàng</h2>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    {{--                                <tr class="visible-xs">--}}
                                    {{--                                    <td class="text-center"><strong>Tổng 200.000 đ</strong>--}}
                                    {{--                                    </td>--}}
                                    {{--                                </tr>--}}
                                    <tr>
                                        <td><a href="{{route('site.home')}}" class="btn btn-warning"><i
                                                    class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            $('.edit-update-cart').click(function (e) {
                e.preventDefault();
                const _token = '{{@csrf_field()}}';
                let $this = $(this);
                let id = $this.attr('data-id');
                let quantity = $('#quantity').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{route('site.cart.update')}}',
                    data: {
                        'product_id': id,
                        'quantity': quantity
                    },
                    success: function (data) {

                    },
                    error: function () {

                    }
                })
            });

            $('.delete-update-cart').click(function (e) {
                e.preventDefault();
                const _token = '{{@csrf_field()}}';
                let $this = $(this);
                let id = $this.attr('data-id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{route('site.cart.delete')}}',
                    data: {
                        'product_id': id,
                    },
                    success: function (data) {
                        $(this).closest("tr").remove();
                    },
                    error: function () {

                    }
                })
            });
        });
    </script>
@endsection
