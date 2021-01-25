@extends('layouts.layout_site')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="{{route('site.home')}}"><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li>
                            <a itemprop="url" href="{{route('site.category.index')}}"><span
                                    itemprop="title">Danh mục</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title"> {{$category->name}}</span></strong></li>
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
                        <div class="col-lg-9">
                            @if(isset($products))
                                @forelse($products as $product)
                                    <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4">
                                        <!-- product item -->
                                        <div class="product-box">
                                            <div
                                                class="product-thumbnail flexbox-grid">
                                                <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                                                   title="{{$product->name}}">
                                                    <img
                                                        src="{{ asset('site/images/lazyload.svg') }}"
                                                        data-lazyload="{{ asset('uploads/products/'.$product->avatar) }}"
                                                        alt="{{$product->name}}">
                                                </a>
                                            </div>
                                            <div class="product-info a-center">
                                                <h3 class="product-name">
                                                    <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                                                       title="{{$product->name}}">{{$product->name}}</a>
                                                </h3>
                                                <div class="price-box clearfix">
                                                    <div class="special-price">
                                                        @if($product->price_old == $product->price_new)
                                                            <span
                                                                style="font-size: 25px"> ₫{{number_format($product->price_new, 0, ',', '.')}}</span>
                                                        @else
                                                            <del style="font-size: 15px">
                                                                ₫{{number_format($product->price_old, 0, ',', '.')}}</del>
                                                            <span
                                                                style="font-size: 25px"> ₫{{number_format($product->price_new, 0, ',', '.')}}</span>
                                                        @endif
                                                    </div>
                                                    <br>
                                                    <div class="action-cart">
                                                        <a href="" data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"
                                                           class="btn price product-price add_to_cart"
                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                            {{--                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
                                                            <i class="fa fa-shopping-cart"
                                                               title="Thêm vào giỏ hàng"></i> Giỏ hàng</a>
                                                        <a href="" data-url="{{URL::to('favourite/add/'.$product->id)}}"
                                                           class="btn price product-price add_to_favourite"
                                                           style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                            {{--                                                                                                    <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i></a>--}}
                                                            <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i> Yêu
                                                            thích</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end product item -->
                                    </div>
                                @empty
                                    <p>Danh mục này chưa có sản phẩm</p>
                                @endforelse
                                <div class="clearfix m_xs_bottom_30">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                        <!--pagination-->
                                        <p style="vertical-align: top;padding-right: 10px"
                                           class="d_inline_middle f_size_medium">{{ $products->links('vendor/pagination/bootstrap-4') }} </p>
                                    </div>

                                </div>
                            @endif
                        </div>
                        <aside class="dqdt-sidebar sidebar left left-content col-lg-3">
                            @include('site.partials.five_new_product')
                            @include('site.partials.five_hot_news')
                            @include('site.partials.sidebar-category')
                        </aside>
                    </div>
                    <div class="text-center">
                    </div>

                </section>
                <!-- End category_product.php -->          <!-- end layoutContent -->
            </section>
        </div>
    </div>

@endsection
