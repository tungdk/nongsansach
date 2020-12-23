@extends('layouts.layout_site')
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

                        <li><strong><span itemprop="title">Tin tức</span></strong></li>
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
                        <div class="row">Đây là danh sách các tin tức</div>

                    </div>
                    <!-- end product.php -->                <!-- end layoutContent -->
                    <section class="section featured-product wow fadeInUp mb-4">
                        <div class="container width-100per">
                            <!-- begin product-bottom.php -->
                            <div class="section-title a-center">
                                <h2><a href="san-pham-noi-bat.html">Tin tức liên quan</a></h2>
                                <p>Có phải bạn đang tìm những tin tức dưới đây</p>
                            </div>
                            <div class="owl-carousel" data-lgg-items="4" data-lg-items="4" data-md-items="4"
                                 data-sm-items="3" data-xs-items="2" data-xss-items="2" data-nav="true">
                            </div>
                            <!-- end product-bottom.php -->
                        </div>
                    </section>
                </div>
                @include('site.partials.sidebar-right')
            </div>
        </div>
    </section>
@endsection
