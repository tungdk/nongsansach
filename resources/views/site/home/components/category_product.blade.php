@foreach($products_cate as $key => $cate)
    <section class="awe-section-6" id="awe-section-6">
        <div class="section section-collection section-collection-3">
            <div class="container">
                <div class="collection-border">
                    <div class="collection-main">
                        <div class="row ">
                            <div class="col-lg-12 col-sm-12">
                                <div class="e-tabs not-dqtab ajax-tab-3" data-section="ajax-tab-3"
                                     data-view="grid_8">
                                    <div class="row row-noGutter">
                                        <div class="col-sm-12">
                                            <div class="content">
                                                <div class="section-title">
                                                    <h2>{{ $key }}</h2>
                                                </div>
                                                <div>
                                                    <div class="tab-1 tab-content">
                                                        <div class="products products-view-grid">
                                                            <div class="row">
                                                                @foreach($cate['products'] as $product)
                                                                    <div
                                                                        class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
                                                                        <!-- product item -->
                                                                        <div class="product-box">
                                                                            <div class="product-thumbnail flexbox-grid">
                                                                                <a href="ten-san-pham-dang-ban-1.html"
                                                                                   title="Tên sản phẩm đang bán 1">
                                                                                    <img src="site/images/lazyload.svg"
                                                                                         data-lazyload="http://nongsansachvietnam.vn/upload/products/thumb/1277694858_luu2.jpg"
                                                                                         alt="Tên sản phẩm đang bán 1">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-info a-center">
                                                                                <h3 class="product-name"><a
                                                                                        href="ten-san-pham-dang-ban-1.html"
                                                                                        title="Tên sản phẩm đang bán 1">Tên
                                                                                        sản phẩm đang bán 1</a></h3>
                                                                                <div class="price-box clearfix">
                                                                                    <div class="special-price">
                                                                                        @if($product->price_old == $product->price_new || !($product->price_new))
                                                                                            <span
                                                                                                style="font-size: 25px"> ₫{{number_format($product->price_old, 0, ',', '.')}}</span>
                                                                                        @else
                                                                                            <del
                                                                                                style="font-size: 15px">
                                                                                                ₫{{number_format($product->price_old, 0, ',', '.')}}</del>
                                                                                            <span
                                                                                                style="font-size: 25px"> ₫{{number_format($product->price_new, 0, ',', '.')}}</span>
                                                                                        @endif
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="action-cart">
                                                                                        <a href=""
                                                                                           data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"
                                                                                           class="btn price product-price add_to_cart"
                                                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                                                            {{--                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
                                                                                            <i class="fa fa-shopping-cart"
                                                                                               title="Thêm vào giỏ hàng"></i>
                                                                                            Giỏ hàng</a>
                                                                                        <a href=""
                                                                                           data-url="{{URL::to('favourite/add/'.$product->id)}}"
                                                                                           class="btn price product-price add_to_favourite"
                                                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                                                            {{--                                                                                                    <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i></a>--}}
                                                                                            <i class="fa fa-heart-o"
                                                                                               title="Thêm vào yêu thích"></i>
                                                                                            Yêu thích</a>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- end product item -->
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <!-- /.products -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endforeach
