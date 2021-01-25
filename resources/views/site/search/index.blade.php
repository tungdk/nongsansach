@extends('layouts.layout_site')
@section('title', 'Chính sách')
@section('content')
    <div class="container">
        <section class="bread_crumb py-4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                                <span> <i class="fa fa-angle-right"></i> </span>
                            </li>
                            <li><strong><span itemprop="title"> Tìm kiếm từ khóa: {{ $key_word }}</span></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @if((isset($products))|| (isset($posts)))
            @if(isset($products))
                <section class="section products-view products-view-grid">
                    <div class="collection-main">
                        <div class="content">
                            <div class="section-title">
                                <h2>Sản phẩm</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="product-box">
                                <div class="product-thumbnail flexbox-grid">
                                    <a href="{{ route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug]) }}"
                                       title="{{ $product->name }}">
                                        <img src="{{ asset('site/images/lazyload.svg') }}"
                                             data-lazyload="{{ asset('uploads/products/'.$product->avatar) }}"
                                             alt="{{ $product->slug }}">
                                    </a>
                                </div>
                                <div class="product-info a-center">
                                    <h3 class="product-name">
                                        <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                                           title="{{$product->name}}">{{$product->name}}</a>
                                    </h3>
                                    <div class="price-box clearfix">
                                        <div class="special-price">
                                            @if($product->price_old == $product->price_new || !($product->price_new))
                                                <span style="font-size: 25px"> ₫{{number_format($product->price_old, 0, ',', '.')}}</span>
                                            @else
                                                <del style="font-size: 15px">₫{{number_format($product->price_old, 0, ',', '.')}}</del>
                                                <span style="font-size: 25px"> ₫{{number_format($product->price_new, 0, ',', '.')}}</span>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="action-cart" >
                                            <a href="" data-url="{{ route('site.cart.add', ['id'=>$product->id, 'quantity'=>1]) }}"
                                               class="btn price product-price add_to_cart" style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                {{--                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
                                                <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i> Giỏ hàng</a>
                                            <a href="" data-url="{{ route('site.favourite.add', ['id'=>$product->id]) }}"
                                               class="btn price product-price add_to_favourite" style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">
                                                {{--                                                                                                    <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i></a>--}}
                                                <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i> Yêu thích</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            @endif
            @if(isset($posts))
                <section class="section list-blogs blog-main">
                    <div class="collection-main">
                        <div class="content">
                            <div class="section-title">
                                <h2>Bài viết</h2>
                                <a href="/tim-kiem.html?tu-khoa=r&loai-tim-kiem=bai-viet "
                                   class="pull-right blog-item-name">Xem
                                    thêm bài viết...</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-xs-12">
                                <article class="blog-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="blog-item-thumbnail">
                                                <a href="{{ route('site.post.detail', ['id' => $post->id, 'slug' => $post->slug]) }}">
                                                    <img src="{{ asset('site/images/lazyload.svg') }}"
                                                         data-lazyload="{{ asset('uploads/posts/'.$post->thumbnail) }}"
                                                         alt="{{ $post->slug }}">

                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="blog-item-info">
                                                <h3 class="blog-item-name"><a
                                                        href="/video-atlas-of-oculofacial-plastic-and-reconstructive-surgery.html">Video
                                                        Atlas of Oculofacial Plastic and Reconstructive surgery</a></h3>
                                                <div class="post-time">
                                                    <div class="inline-block">13-09-2019 14:09:21</div>
                                                </div>
                                                <p class="blog-item-summary">

                                                    S&aacute;ch tiếng anh : Video Atlas of Oculofacial Plastic and
                                                    Reconstructive
                                                    surgery&nbsp;tập hợp video chất lượng cao&nbsp;v&agrave; tập bản đồ
                                                    m&agrave;u&nbsp;đi
                                                    k&egrave;m&nbsp;để gi&uacute;p bạn th&agrave;nh thạo&nbsp;c&aacute;c
                                                    quy tr&igrave;nh
                                                    phẫu thuật t&aacute;i tạo v&agrave; thẩm mỹ mới nhất của m&iacute;
                                                    mắt, hệ
                                                    thống, quỹ đạo v&agrave; khu&ocirc;n mặt.&nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp;...</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        @else
            <section class="section">
                <h3>Không tìm thấy kết quả liên quan</h3>
            </section>
        @endif

    </div>

    {{--    <section class="bread_crumb py-4">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-xs-12">--}}
    {{--                    <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">--}}
    {{--                        <li class="home">--}}
    {{--                            <a itemprop="url" href="{{route('site.home')}}"><span itemprop="title">Trang chủ</span></a>--}}
    {{--                            <span> <i class="fa fa-angle-right"></i> </span>--}}
    {{--                        </li>--}}

    {{--                        <li><strong><span itemprop="title">Kết quả tìm kiếm</span></strong></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <section class="product">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-9">--}}
    {{--                    <!-- begin layoutContent -->--}}
    {{--                    <!-- begin product.php -->--}}
    {{--                    <div class="details-product">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <div class="products products-view-grid">--}}
    {{--                                    @if(isset($products))--}}
    {{--                                        @forelse($products as $product)--}}
    {{--                                            <div class="col-xs-6 col-xss-6 col-sm-6 col-md-4 col-lg-4">--}}
    {{--                                                <!-- product item -->--}}
    {{--                                                <div class="product-box">--}}
    {{--                                                    <div class="product-thumbnail flexbox-grid">--}}
    {{--                                                        <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"--}}
    {{--                                                           title="{{$product->name}}">--}}
    {{--                                                            <img--}}
    {{--                                                                src="site/images/lazyload.svg"--}}
    {{--                                                                data-lazyload="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
    {{--                                                                alt="{{$product->name}}">--}}
    {{--                                                        </a>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="product-info a-center">--}}
    {{--                                                        <h3 class="product-name">--}}
    {{--                                                            <a href="ten-san-pham-dang-ban-1.html"--}}
    {{--                                                               title="{{$product->name}}">{{$product->name}}</a>--}}
    {{--                                                        </h3>--}}
    {{--                                                        <div class="price-box clearfix">--}}
    {{--                                                            <div class="special-price">--}}
    {{--                                                                @if($product->price_old == $product->price_new || !($product->price_new))--}}
    {{--                                                                    <span--}}
    {{--                                                                        style="font-size: 25px"> ₫{{number_format($product->price_old, 0, ',', '.')}}</span>--}}
    {{--                                                                @else--}}
    {{--                                                                    <del style="font-size: 15px">--}}
    {{--                                                                        ₫{{number_format($product->price_old, 0, ',', '.')}}</del>--}}
    {{--                                                                    <span--}}
    {{--                                                                        style="font-size: 25px"> ₫{{number_format($product->price_new, 0, ',', '.')}}</span>--}}
    {{--                                                                @endif--}}
    {{--                                                            </div>--}}
    {{--                                                            <br>--}}
    {{--                                                            <div class="action-cart">--}}
    {{--                                                                <a href=""--}}
    {{--                                                                   data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"--}}
    {{--                                                                   class="btn price product-price add_to_cart"--}}
    {{--                                                                   style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">--}}
    {{--                                                                    --}}{{--                                                                                                    <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
    {{--                                                                    <i class="fa fa-shopping-cart"--}}
    {{--                                                                       title="Thêm vào giỏ hàng"></i> Giỏ hàng</a>--}}
    {{--                                                                <a href=""--}}
    {{--                                                                   data-url="{{URL::to('favourite/add/'.$product->id)}}"--}}
    {{--                                                                   class="btn price product-price add_to_favourite"--}}
    {{--                                                                   style="display: inline-block; font-size: 15px; line-height: 50px; padding: 0 10px!important;">--}}
    {{--                                                                    --}}{{--                                                                                                    <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i></a>--}}
    {{--                                                                    <i class="fa fa-heart-o"--}}
    {{--                                                                       title="Thêm vào yêu thích"></i> Yêu thích</a>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <!-- end product item -->--}}
    {{--                                            </div>--}}
    {{--                                        @empty--}}
    {{--                                            <p>Không có dữ liệu</p>--}}
    {{--                                        @endforelse--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- end product.php -->                <!-- end layoutContent -->--}}
    {{--                    <section class="section featured-product wow fadeInUp mb-4">--}}
    {{--                        <div class="container width-100per">--}}
    {{--                            <!-- begin product-bottom.php -->--}}
    {{--                            <div class="section-title a-center">--}}
    {{--                                <h2><a href="san-pham-noi-bat.html">Sản phẩm nổi bật</a></h2>--}}
    {{--                                <p>Có phải bạn đang tìm những sản phẩm dưới đây</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="owl-carousel" data-lgg-items="4" data-lg-items="4" data-md-items="4"--}}
    {{--                                 data-sm-items="3" data-xs-items="2" data-xss-items="2" data-nav="true">--}}
    {{--                            </div>--}}
    {{--                            <!-- end product-bottom.php -->--}}
    {{--                        </div>--}}
    {{--                    </section>--}}
    {{--                </div>--}}
    {{--                @include('site.partials.sidebar-right')--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection
