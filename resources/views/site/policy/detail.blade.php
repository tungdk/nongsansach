@extends('layouts.layout_site')
@section('title', 'Chính sách')
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
                            <a itemprop="url"
                               href="{{ route('site.policy.index')}}"><span
                                    itemprop="title">Chính sách</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">{{ $policy->name }}</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product " itemscope="" itemtype="http://schema.org/Product">
        <meta itemprop="name" content="Vải thiều loại to">
        <meta itemprop="url" content="//dualeo-x.bizwebvietnam.net/cherry-do-canada-loai-to">
        <meta itemprop="image"
              content="../bizweb.dktcdn.net/thumb/grande/100/308/325/products/kf57fd708888943c073792a327aeb51a63.jpg?v=1524537033277">

        <meta itemprop="model" content="">

        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
            <meta itemprop="price" content="80.000₫">

            <meta itemprop="priceCurrency" content="VND">
        </div>
        <meta itemprop="description"
              content="Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức....">

        <div itemprop="brand" itemscope="" itemtype="http://schema.org/Organization">
            <span class="hidden" itemprop="name">Canada</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- begin layoutContent -->
                    <!-- begin product.php -->
                    <div class="details-product">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $policy->content !!}
                            </div>
                        </div>

                    </div>
                    <!-- end product.php -->                <!-- end layoutContent -->
                    <section class="section featured-product wow fadeInUp mb-4">
                        <div class="container width-100per">
                            <!-- begin product-bottom.php -->
                            <div class="section-title a-center">
                                <h2><a href="san-pham-noi-bat.html">Sản phẩm liên quan</a></h2>
                                <p>Có phải bạn đang tìm những sản phẩm dưới đây</p>
                            </div>
                            <div class="owl-carousel" data-lgg-items="4" data-lg-items="4" data-md-items="4"
                                 data-sm-items="3" data-xs-items="2" data-xss-items="2" data-nav="true">
                            </div>
                            <!-- end product-bottom.php -->
                        </div>
                    </section>
                </div>
                <div class="dqdt-sidebar sidebar right left-content col-lg-3">
                    <!-- beign layoutRight -->
                    <!-- sidebar_news_recent.php -->
                    <div class="blog-aside aside-item">
                        <div>
                            <div class="aside-title mb-4">
                                <h2 class="title-head"><a href="#">Sản phẩm mới</a></h2>
                            </div>
                            <div class="aside-content">
                                <div class="blog-list blog-image-list">
                                    ???
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar_news_recent.php --><!-- sidebar_category.php -->
                    <div class="aside-vetical-menu">
                        <aside class="aside-item sidebar-category collection-category">
                            <div class="aside-title">
                                <h2 class="title-head margin-top-0"><span>Chuyên mục</span></h2>
                            </div>
                            <div class="aside-content">
                                <nav class="nav-category navbar-toggleable-md">
                                </nav>
                            </div>
                        </aside>
                    </div>
                    <!-- end sidebar_category.php --><!-- sidebar_product_recent.php -->
                    <div class="aside-item aside-mini-list-product mb-5">
                        <div>
                            <div class="aside-title">
                                <h2 class="title-head">
                                    <a href="#" title="Sản phẩm mới">Sản phẩm mới</a>
                                </h2>
                            </div>
                            <div class="aside-content related-product">
                                <div class="product-mini-lists">
                                    <div class="products">
                                        <div class="row row-noGutter">
                                            <div class="col-sm-12">
                                                @foreach($recent_products as $product)
                                                    <div class="product-mini-item clearfix on-sale">
                                                        <div class="product-img relative">
                                                            <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}">
                                                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                                                     data-lazyload="{{ asset('site/images/lazyload.svg') }}"
                                                                     alt="{{$product->name}}">

                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3>
                                                                <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}"
                                                                   title="{{$product->name}}"
                                                                   class="product-name">{{$product->name}}</a>
                                                            </h3>
                                                            <div class="price-box">
                                                                <span class="price"><span
                                                                        class="price product-price">{{$product->price}}</span> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.products -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar_product_recent.php --><!-- sidebar_category.php -->
                    <div class="aside-vetical-menu">
                        <aside class="aside-item sidebar-category collection-category">
                            <div class="aside-title">
                                <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>
                            </div>
                            <div class="aside-content">

                                <nav class="nav-category navbar-toggleable-md">
                                    <ul class="nav navbar-pills">
                                        <li class="nav-item nav-collapse"><i class="fa fa-arrow-circle-right"
                                                                             aria-hidden="true"></i><a
                                                href="danh-muc/aaaaa.html" class="nav-link" data-toggle="collapse"
                                                data-target="#aaaaa">AAAAA</a>
                                    </ul>
                                </nav>
                            </div>
                        </aside>
                    </div>
                    <!-- end sidebar_category.php -->                <!-- end layoutRight -->
                </div>
            </div>
        </div>
    </section>
@endsection
