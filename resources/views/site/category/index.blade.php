@extends('layouts.layout_site')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="../index.html"><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li>
                            <a itemprop="url" href="../san-pham.html"><span itemprop="title">Sản phẩm</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title"> AAAAA</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-12">
                <!-- begin layoutContent -->
                <!-- Begin category_product.php -->
                <section class="products-view products-view-grid">
                    <div class="row">

                        <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4">

                            <div class="product-box">
                                <div class="product-thumbnail flexbox-grid">
                                    <a href="../ten-san-pham-dang-ban-1.html" title="Tên sản phẩm đang bán 1">
                                        <img src="../themes/default/assets/images/lazyload.svg" data-lazyload=""
                                             data-lazyload="" alt="Tên sản phẩm đang bán 1">
                                    </a>
                                </div>
                                <div class="product-info a-center">
                                    <h3 class="product-name"><a href="../ten-san-pham-dang-ban-1.html"
                                                                title="Tên sản phẩm đang bán 1">Tên sản phẩm đang bán
                                            1</a></h3>
                                    <div class="price-box clearfix">
                                        <div class="special-price">
                                            <span class="price product-price">Liên hệ</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="text-center">
                    </div>

                </section>
                <!-- End category_product.php -->          <!-- end layoutContent -->
            </section>
        </div>
    </div>

@endsection
