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
        @php $total = 0 @endphp
        @forelse($carts as $key => $cart)
            @php $total += $cart->TongTien @endphp
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img
                                src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg"
                                alt="Sản phẩm 1" class="img-responsive" width="100">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{$cart->name}}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{number_format($cart->price_new, 0, ',', '.') }} đ</td>
                <td data-th="Quantity">
                    <input class="form-control text-center" value="{{$cart->quantity}}"
                           type="number" min="1" style="width: 100px" id="quantity_{{$key}}" max="{{ $cart->product_quantity }}">
                </td>
                <td data-th="Subtotal" class="text-center">{{ number_format($cart->TongTien, 0, ',', '.') }}đ
                </td>
                <td class="actions" data-th="">
                    <button onclick="update_cart({{$cart->product_id}}, {{$key}})"
                            class="btn btn-info btn-sm edit-update-cart"><i
                            class="fa fa-edit"></i>
                    </button>
                    <button onclick="delete_cart({{ $cart->product_id }})"
                            class="btn btn-danger btn-sm delete-update-cart"><i
                            class="fa fa-trash-o"></i>
                    </button>
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
            <td class="hidden-xs text-center"><strong>Tổng tiền {{number_format($total, 0, ',', '.')}} đ</strong>
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
