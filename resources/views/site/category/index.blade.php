@extends('layouts.layout_site')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="{{route('site.home')}}"><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title"> Danh mục</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-12">
                Đây là trang danh muc
                <!-- begin layoutContent -->
                <!-- Begin category_product.php -->
{{--                <section class="products-view products-view-grid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-9">--}}
{{--                            @if(isset($products))--}}
{{--                                @forelse($products as $product)--}}
{{--                                    <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                        <!-- product item -->--}}
{{--                                        <div class="product-box">--}}
{{--                                            <div--}}
{{--                                                class="product-thumbnail flexbox-grid">--}}
{{--                                                <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"--}}
{{--                                                   title="{{$product->name}}">--}}
{{--                                                    <img--}}
{{--                                                        src="site/images/lazyload.svg"--}}
{{--                                                        data-lazyload="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
{{--                                                        alt="{{$product->name}}">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-info a-center">--}}
{{--                                                <h3 class="product-name">--}}
{{--                                                    <a href="ten-san-pham-dang-ban-1.html"--}}
{{--                                                       title="{{$product->name}}">{{$product->name}}</a>--}}
{{--                                                </h3>--}}
{{--                                                <div class="price-box clearfix">--}}
{{--                                                    <div class="special-price">--}}
{{--                                                        @if($product->price == $product->sale)--}}
{{--                                                            <span--}}
{{--                                                                style="font-size: 25px"> ₫{{number_format($product->sale, 0, ',', '.')}}</span>--}}
{{--                                                        @else--}}
{{--                                                            <del style="font-size: 15px">--}}
{{--                                                                ₫{{number_format($product->price, 0, ',', '.')}}</del>--}}
{{--                                                            <span--}}
{{--                                                                style="font-size: 25px"> ₫{{number_format($product->sale, 0, ',', '.')}}</span>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
{{--                                                    <br>--}}
{{--                                                    <div class="action-cart">--}}
{{--                                                        <a href="" data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"--}}
{{--                                                           class="btn price product-price add_to_cart"--}}
{{--                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">--}}
{{--                                                            --}}{{--                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
{{--                                                            <i class="fa fa-shopping-cart"--}}
{{--                                                               title="Thêm vào giỏ hàng"></i> Giỏ hàng</a>--}}
{{--                                                        <a href="" data-url="{{URL::to('favourite/add/'.$product->id)}}"--}}
{{--                                                           class="btn price product-price add_to_favourite"--}}
{{--                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">--}}
{{--                                                            --}}{{--                                                                                                    <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i></a>--}}
{{--                                                            <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i> Yêu--}}
{{--                                                            thích</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- end product item -->--}}
{{--                                    </div>--}}
{{--                                @empty--}}
{{--                                    <p>Không có dữ liệu</p>--}}
{{--                                @endforelse--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <div class="dqdt-sidebar sidebar right left-content col-lg-3">--}}
{{--                            <!-- beign layoutRight -->--}}
{{--                            <!-- sidebar_news_recent.php -->--}}
{{--                            <div class="blog-aside aside-item">--}}
{{--                                <div>--}}
{{--                                    <div class="aside-title mb-4">--}}
{{--                                        <h2 class="title-head"><a href="#">Sản phẩm mới</a></h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="aside-content">--}}
{{--                                        <div class="blog-list blog-image-list">--}}
{{--                                            ???--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- end sidebar_news_recent.php --><!-- sidebar_category.php -->--}}
{{--                            <div class="aside-vetical-menu">--}}
{{--                                <aside class="aside-item sidebar-category collection-category">--}}
{{--                                    <div class="aside-title">--}}
{{--                                        <h2 class="title-head margin-top-0"><span>Chuyên mục</span></h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="aside-content">--}}
{{--                                        <nav class="nav-category navbar-toggleable-md">--}}
{{--                                        </nav>--}}
{{--                                    </div>--}}
{{--                                </aside>--}}
{{--                            </div>--}}
{{--                            <!-- end sidebar_category.php --><!-- sidebar_product_recent.php -->--}}
{{--                            <div class="aside-item aside-mini-list-product mb-5">--}}
{{--                                <div>--}}
{{--                                    <div class="aside-title">--}}
{{--                                        <h2 class="title-head">--}}
{{--                                            <a href="#" title="Sản phẩm mới">Sản phẩm mới</a>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="aside-content related-product">--}}
{{--                                        <div class="product-mini-lists">--}}
{{--                                            <div class="products">--}}
{{--                                                <div class="row row-noGutter">--}}
{{--                                                    <div class="col-sm-12">--}}
{{--                                                        @foreach($products as $product)--}}
{{--                                                            <div class="product-mini-item clearfix on-sale">--}}
{{--                                                                <div class="product-img relative">--}}
{{--                                                                    <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}">--}}
{{--                                                                        <img src="site/images/lazyload.svg"--}}
{{--                                                                             data-lazyload="site/images/lazyload.svg"--}}
{{--                                                                             alt="{{$product->name}}">--}}

{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="product-info">--}}
{{--                                                                    <h3>--}}
{{--                                                                        <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}"--}}
{{--                                                                           title="{{$product->name}}"--}}
{{--                                                                           class="product-name">{{$product->name}}</a>--}}
{{--                                                                    </h3>--}}
{{--                                                                    <div class="price-box">--}}
{{--                                                                <span class="price"><span--}}
{{--                                                                        class="price product-price">{{$product->price}}</span> </span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        @endforeach--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                            </div>--}}
{{--                                            <!-- /.products -->--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- end sidebar_product_recent.php --><!-- sidebar_category.php -->--}}
{{--                            <div class="aside-vetical-menu">--}}
{{--                                <aside class="aside-item sidebar-category collection-category">--}}
{{--                                    <div class="aside-title">--}}
{{--                                        <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="aside-content">--}}

{{--                                        <nav class="nav-category navbar-toggleable-md">--}}
{{--                                            <ul class="nav navbar-pills">--}}
{{--                                                <li class="nav-item nav-collapse"><i class="fa fa-arrow-circle-right"--}}
{{--                                                                                     aria-hidden="true"></i><a--}}
{{--                                                        href="danh-muc/aaaaa.html" class="nav-link"--}}
{{--                                                        data-toggle="collapse"--}}
{{--                                                        data-target="#aaaaa">AAAAA</a>--}}
{{--                                            </ul>--}}
{{--                                        </nav>--}}
{{--                                    </div>--}}
{{--                                </aside>--}}
{{--                            </div>--}}
{{--                            <!-- end sidebar_category.php -->                <!-- end layoutRight -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                    </div>--}}

{{--                </section>--}}
                <!-- End category_product.php -->          <!-- end layoutContent -->
            </section>
        </div>
    </div>

@endsection
