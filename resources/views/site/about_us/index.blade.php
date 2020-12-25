@extends('layouts.layout_site')
@section('title', 'Giới thiệu')
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

                        <li><strong><span itemprop="title">Giới thiệu</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- begin layoutContent -->
                    <!-- begin product.php -->
                    <div class="details-product">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $about_us->about_us !!}
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
                @include('site.partials.sidebar-right')
            </div>
        </div>
    </section>
@endsection
