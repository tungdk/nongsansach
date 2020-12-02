<section class="awe-section-3" id="awe-section-3">
    <div class="section section-collection section-collection-1">
        <div class="container">
            <div class="collection-border">
                <div class="collection-main">
                    <div class="row ">
                        <div class="col-lg-12 col-sm-12">
                            <div class="content">
                                <div class="section-title">
                                    <h2>Sàn nhựa Glotex</h2>
                                </div>
                            </div>
                            <div class="products owl-carousel">
                            @foreach($recent_products as $product)
                                <!-- product item -->
                                    <div class="product-box">
                                        <div class="product-thumbnail flexbox-grid">
                                            <a href="ten-san-pham-dang-ban-1.html"
                                               title="Tên sản phẩm đang bán 1">
                                                <img
                                                    data-src="http://nongsansachvietnam.vn/upload/products/thumb/1277694858_luu2.jpg"
                                                    class="owl-lazy" alt="Tên sản phẩm đang bán 1"
                                                    class="owl-lazy">
                                            </a>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"><a href="ten-san-pham-dang-ban-1.html"
                                                                        title="{{$product->name}}">{{$product->name}}</a>
                                            </h3>
                                            <div class="price-box clearfix">
                                                <div class="special-price" style="font-size: 30px;">
                                                    <a href=""><span class="price product-price"><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                    <a href=""><span class="price product-price"><i
                                                                class="fa fa-heart"></i></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end product item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@foreach($categories_random as $cate)
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
                                                <h2>{{$cate->name}}</h2>
                                            </div>
                                            <div>
                                                <div class="tab-1 tab-content">
                                                    <div class="products products-view-grid">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
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
                                                                                        <span
                                                                                            class="price product-price">Liên hệ</span>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end product item -->
                                                            </div>
                                                            <div class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
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
                                                                                        <span
                                                                                            class="price product-price">Liên hệ</span>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end product item -->
                                                            </div>
                                                            <div class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
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
                                                                                        <span
                                                                                            class="price product-price">Liên hệ</span>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end product item -->
                                                            </div>
                                                            <div class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
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
                                                                                        <span
                                                                                            class="price product-price">Liên hệ</span>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- end product item -->
                                                            </div>
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
