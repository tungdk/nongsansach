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
                        <div style="overflow-x: auto" class="show_cart">
                            @include('site.cart.components.cart')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        function update_cart(product_id, key){
            const _token = '{{@csrf_field()}}';
            let quantity = $('#quantity_' + key).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('site.cart.update')}}',
                data: {
                    'product_id': product_id,
                    'quantity': quantity
                },
                success: function (data) {
                    if (data.status == true) {
                        $('.show_cart').empty();
                        $('.show_cart').append(data.view);
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                },
                error: function () {

                }
            })
        }
        function delete_cart(product_id){
            const _token = '{{@csrf_field()}}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('site.cart.delete')}}',
                data: {
                    'product_id': product_id,
                },
                success: function (data) {
                    if (data.status == true) {
                        $('.show_cart').empty();
                        $('.show_cart').append(data.view);
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                },
                error: function () {

                }
            })
        }
    </script>
@endsection
