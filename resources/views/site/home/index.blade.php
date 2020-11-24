@extends('layouts.layout_site')

@section('content')
    <!-------- layoutHeader ------------>
    <section class="awe-section-1" id="awe-section-1">
        <div class="section_category_slider">
            <div class="container">
                <h2 class="hidden">Chuyên mục bài viết và Danh mục sản phẩm</h2>
                <div class="row">
                    <!-------- begin display template widget header------------>
                    <section class="layoutHeader">
                        <!-- home_slider.php -->
                        <div class="col-md-9 col-md-push-3 px-md-4 px-0 mt-md-5 mb-5">
                            <div class="home-slider owl-carousel" data-lg-items="1" data-md-items="1" data-sm-items="1"
                                 data-xs-items="1" data-margin="0" data-nav="true">
                                <div class="item">
                                    <a href="#" class="clearfix">
                                        <img data-src="https://shop1.jweb.com.vn/uploads/images/banner/tao-web.png"
                                             alt="Mô tả slider 1" class="owl-lazy">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- end home_slider.php --><!-- home_sidebar_category.php -->
                        <div class="col-md-3 col-md-pull-9 mt-5 hidden-xs aside-vetical-menu">
                            <aside class="blog-aside aside-item sidebar-category">
                                <div class="aside-title text-center text-xl-left">
                                    <h2 class="title-head"><span>Danh mục</span></h2>
                                </div>
                                <div class="aside-content">
                                    <div class="nav-category  navbar-toggleable-md">
                                        <ul class="nav navbar-pills">
                                            @foreach($categories as $cate)
                                                <li class="nav-item">
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                    <a href="danh-muc/aaaaa.html" class="nav-link">{{$cate->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- end home_sidebar_category.php -->            </section>
                    <!--------end display template widget heder------------>
                </div>
            </div>
        </div>
    </section>
    <!-- end section layoutHeader -->
    <!--------layoutContent------------>
    <section class="layoutContent">
        <!-- all_banner_3_col -->
        <section class="awe-section-7" id="awe-section-7">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner</h2>
                    <div class="banner-slider owl-carousel" data-lg-items="3" data-md-items="3" data-sm-items="2"
                         data-xs-items="2" data-nav="true">
                        <div class="item">
                            <a href="banner-3-col-1.html" class="clearfix">
                                <img data-src="/site/images/banner1.jpg" class="img-responsive owl-lazy"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="item">
                            <a href="banner-3-col-2.html" class="clearfix">
                                <img data-src="/site/images/banner2.jpg" class="img-responsive owl-lazy"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="item">
                            <a href="banner-3-col-3.html" class="clearfix">
                                <img data-src="/site/images/banner3.jpg" class="img-responsive owl-lazy"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                                        <h2>Sản phẩm nổi bật</h2>
                                                    </div>
                                                    <div>
                                                        <div class="tab-1 tab-content">
                                                            <div class="products products-view-grid">
                                                                <div class="row">
                                                                    @if(isset($recent_products))
                                                                        @forelse($recent_products as $product)
                                                                            <div
                                                                                class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
                                                                                <!-- product item -->
                                                                                <div class="product-box">
                                                                                    <div
                                                                                        class="product-thumbnail flexbox-grid">
                                                                                        <a href="ten-san-pham-dang-ban-1.html"
                                                                                           title="{{$product->name}}">
                                                                                            <img
                                                                                                src="site/images/lazyload.svg"
                                                                                                data-lazyload="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                                                                                alt="{{$product->name}}">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="product-info a-center">
                                                                                        <h3 class="product-name">
                                                                                            <a href="ten-san-pham-dang-ban-1.html"
                                                                                               title="{{$product->name}}">{{$product->name}}</a>
                                                                                        </h3>
                                                                                        <div class="price-box clearfix">
                                                                                            <div class="special-price">
                                                                                                <a href="" data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"
                                                                                                   class="price product-price add_to_cart"> {{number_format($product->sale, 0, ',', '.')}}
                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <!-- end product item -->
                                                                            </div>
                                                                        @empty
                                                                            <p>Không có dữ liệu</p>
                                                                        @endforelse
                                                                    @endif
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

        <!-- end all_banner_3_col --><!-- home_block_product.php -->
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
                                                        <h2>Sản phẩm mới</h2>
                                                    </div>
                                                    <div>
                                                        <div class="tab-1 tab-content">
                                                            <div class="products products-view-grid">
                                                                <div class="row">
                                                                    @if(isset($recent_products))
                                                                        @forelse($recent_products as $product)
                                                                            <div
                                                                                class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
                                                                                <!-- product item -->
                                                                                <div class="product-box">
                                                                                    <div
                                                                                        class="product-thumbnail flexbox-grid">
                                                                                        <a href="ten-san-pham-dang-ban-1.html"
                                                                                           title="{{$product->name}}">
                                                                                            <img
                                                                                                src="site/images/lazyload.svg"
                                                                                                data-lazyload="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                                                                                alt="{{$product->name}}">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="product-info a-center">
                                                                                        <h3 class="product-name">
                                                                                            <a href="ten-san-pham-dang-ban-1.html"
                                                                                               title="{{$product->name}}">{{$product->name}}</a>
                                                                                        </h3>
                                                                                        <div class="price-box clearfix">
                                                                                            <div class="special-price">
                                                                                                <a href=""
                                                                                                   class="price product-price"> {{number_format($product->sale, 0, ',', '.')}}
                                                                                                    Mua ngay</a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <!-- end product item -->
                                                                            </div>
                                                                        @empty
                                                                            <p>Không có dữ liệu</p>
                                                                        @endforelse
                                                                    @endif
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
        <!-- end home_block_product.php --><!-- all_banner_1_col -->


        <section class="awe-section-5">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner </h2>
                    <div class="banner-image-col-tab">
                        <div class="row d-flex">
                            <div class="item px-4 mb-4">
                                <a href="banner-1.html" class="clearfix">
                                    <img src="site/images/lazyload.svg"
                                         data-lazyload="/site/images/banner_coltab2_1.png"
                                         alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end all_banner_1_col --><!-- home_block_product_slide.php -->
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
                                                            <a href="" ><span class="price product-price"><i
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
{{--        <!-- end home_block_product_slide.php  --><!-- all_banner_2_col -->--}}
        <section class="awe-section-7" id="awe-section-7">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner</h2>
                    <div class="banner-image-col-tab">
                        <div class="row d-md-flex">
                            <div class="item px-4 mb-4">
                                <a href="banner-2-col-1.html" class="clearfix">
                                    <img src="site/images/lazyload.svg"
                                         data-lazyload="/site/images/banner_coltab3_1.png" class="img-responsive"
                                         alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                </a>
                            </div>
                            <div class="item px-4 mb-4">
                                <a href="banner-2-col-2.html" class="clearfix">
                                    <img src="site/images/lazyload.svg"
                                         data-lazyload="/site/images/banner_coltab3_2.png" class="img-responsive"
                                         alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end all_banner_2_col --><!-- home_block_product.php -->
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
                                                        <h2>Sàn gỗ ngoài trời</h2>
                                                    </div>
                                                    <div>
                                                        <div class="tab-1 tab-content">

                                                            <div class="products products-view-grid">
                                                                <div class="row">
                                                                    <div
                                                                        class="col-xs-6 col-xss-6 col-sm-4 col-md-3 col-lg-3">
                                                                        <!-- product item -->
                                                                        <div class="product-box">
                                                                            <div class="product-thumbnail flexbox-grid">
                                                                                <a href="ten-san-pham-dang-ban-1.html"
                                                                                   title="Tên sản phẩm đang bán 1">
                                                                                    <img src="site/images/lazyload.svg"
                                                                                         data-lazyload=""
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
        <!-- end home_block_product.php --><!-- home_news_slide.php -->
        <section class="awe-section-8" id="awe-section-8">
            <div class="section section_blog">
                <div class="container">
                    <div class="section-title a-center">
                        <h2><a href="#">Tin tức</a></h2>
                        <p>Tin tức về các sản phẩm</p>
                    </div>
                    <div class="section-content">
                        <div class="blog-slider owl-carousel" data-lg-items='4' data-md-items='3' data-sm-items='2'
                             data-xs-items="2" data-nav="true">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home_news_slide.php --><!-- home_customer.php -->
        <section class="awe-section-9" id="awe-section-9">
            <div class="section section_testimonial">
                <div class="container">
                    <div class="section-title a-center">
                        <h2><a href="#">Phản hồi của khách hàng</a></h2>
                        <p>Phản hồi của những khách hàng đã và đang sử dụng sản phẩm trong suốt năm qua.</p>
                    </div>
                    <div class="section-content">
                        <div class="testimonial-slider owl-carousel" data-lg-items='3' data-md-items='3'
                             data-sm-items='2' data-xs-items="2" data-nav="true">

                            <div class="testimonial-item text-center p-4 mb-5">
                                <div class="image-avata">
                                    <img data-src="/site/images/testimonial_1.jpg" class="owl-lazy"
                                         alt="Khách hàng thân thiết">
                                </div>
                                <h4 class="name">Khách hàng thân thiết</h4>
                                <p class="designation m-0">Phản hồi của những khách hàng đã và đang sử dụng sản phẩm
                                    trong suốt năm qua.</p>
                            </div>
                            <div class="testimonial-item text-center p-4 mb-5">
                                <div class="image-avata">
                                    <img data-src="/site/images/testimonial_2.jpg" class="owl-lazy"
                                         alt="Khách hàng thân thiết">
                                </div>
                                <h4 class="name">Khách hàng thân thiết</h4>
                                <p class="designation m-0">Phản hồi của những khách hàng đã và đang sử dụng sản phẩm
                                    trong suốt năm qua.</p>
                            </div>
                            <div class="testimonial-item text-center p-4 mb-5">
                                <div class="image-avata">
                                    <img data-src="/site/images/testimonial_3.jpg" class="owl-lazy"
                                         alt="Khách hàng thân thiết">
                                </div>
                                <h4 class="name">Khách hàng thân thiết</h4>
                                <p class="designation m-0">Phản hồi của những khách hàng đã và đang sử dụng sản phẩm
                                    trong suốt năm qua.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home_customer.php --><!-- home_brand.php -->
        <section class="awe-section-10" id="awe-section-10">
            <div class="section section-brand mb-5">
                <div class="container">
                    <h2 class="hidden">Thương hiệu</h2>
                    <div class="owl-carousel owl-theme" data-lg-items="6" data-md-items="5" data-sm-items="4"
                         data-xs-items="3" data-xss-items="2" data-margin="30">
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand1.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand2.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand3.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand4.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand5.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#" class="img25"><img data-src="/site/images/brand6.png" class="owl-lazy"
                                                           alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home_brand.php -->    </section>
    <!-- end section layoutContent -->
@endsection
