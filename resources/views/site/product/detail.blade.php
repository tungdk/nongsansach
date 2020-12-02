@extends('layouts.layout_site')
@section('css')
    <link href="{{asset('css/increase_input.css')}}" rel="stylesheet"/>
@endsection
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
                            <a itemprop="url" href="danh-muc/aaaaa.html"><span itemprop="title">AAAAA</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">{{$product->name}}</span></strong></li>
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
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <ul id="imageGallery">
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>
                                    </li>
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>
                                    </li>
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>
                                    </li>
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>
                                    </li>
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 details-pro">
                                <h1 class="title-head">{{$product->name}}</h1>
                                <div class="reviews clearfix">
                                    <div class="f-left margin-right-10">
                                        <div class="product-reviews-badge" data-id="11480175">
                                            <div class="product-reviews-star" data-score="4.7" data-number="5"
                                                 title="gorgeous" style="color: rgb(255, 190, 0);">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </span>
                                                {{--                                                <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">0 đánh giá</a>--}}
                                                {{--                                                / <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">Viết đánh giá</a>--}}

                                                <a href="#" onclick="show_tab_comment()">0 đánh giá</a>
                                                /
                                                <a href="#" id="write_comment" onclick="show_tab_comment()">Viết
                                                    đánh giá</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="status clearfix">
                                </div>
                                <div class="price-box clearfix">
                                    <div class="special-price">
                                        <span class="price product-price">
                                            <span class="product-price-old"
                                                  style="font-size: 1.5rem !important; color: #929292!important;">
                                                <del>₫{{number_format($product->price, 0, ',', '.')}}</del>
                                            </span>
                                            <span class="product-price-new">
                                                ₫{{number_format($product->sale, 0, ',', '.')}}
                                            </span>
                                            <span class="product-price-sale"
                                                  style="margin-left: 20px; margin-bottom: 2px">
                                                {{$product->sale}}% GIẢM
                                            </span>
                                        </span>
                                    </div>
                                    <!-- Giá -->
                                </div>
                                {{--                                <div class="product-summary product_description margin-bottom-15">--}}
                                {{--                                    <div class="rte description">--}}
                                {{--                                        {{$product->description}}--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="col-md-12">
                                    <label for="quantity">Số lượng</label>
                                    {{--                                    <div class="input-group">--}}
                                    {{--                                        <span class="input-group-btn">--}}
                                    {{--                                            <button type="button" class="btn btn-danger btn-number" data-type="minus"--}}
                                    {{--                                                    data-field="quant[2]">--}}
                                    {{--                                            <span class="glyphicon glyphicon-minus"></span>--}}
                                    {{--                                          </button>--}}
                                    {{--                                        </span>--}}
                                    {{--                                        <input type="text" name="quantity" class="form-control input-number" value="10"--}}
                                    {{--                                               min="1" max="100">--}}
                                    {{--                                        <span class="input-group-btn">--}}
                                    {{--                                            <button type="button" class="btn btn-success btn-number" data-type="plus"--}}
                                    {{--                                                  data-field="quant[2]">--}}
                                    {{--                                                <span class="glyphicon glyphicon-plus"></span>--}}
                                    {{--                                          </button>--}}
                                    {{--                                        </span>--}}
                                    {{--                                        <a href="" data-url="{{URL::to('cart/add/'.$product->id.'/1')}}"--}}
                                    {{--                                           class="price product-price add_to_cart">--}}
                                    {{--                                            <i class="fa fa-shopping-cart" title="Thêm vào giỏ hàng"></i></a>--}}
                                    {{--                                    </div>--}}
                                    <div class="qty-input">
                                        <button class="qty-count qty-count--minus" data-action="minus" type="button"
                                                disabled>-
                                        </button>
                                        <input class="product-qty" type="number" name="product-qty" min="1"
                                               value="1">
                                        <button class="qty-count qty-count--add" data-action="add" type="button">+
                                        </button>
                                        <a href="" data-url="{{URL::to('favourite/add/'.$product->id)}}"
                                           class="add_to_favourite float-right" style="padding-left: 60px;">
                                            <i class="fa fa-heart-o" title="Thêm vào yêu thích"></i> Yêu Thích
                                        </a>
                                    </div>
                                </div>
                                <div class="status clearfix">
                                </div>
                                <div class="col-md-12">
                                    <button type="button"
                                            class="btn btn-lg btn-primary add_to_cart btn-add-cart"
                                            title="Thêm vào giỏ hàng">
                                        <span><i class="fa fa-cart-arrow-down"></i> Thêm Vào Giỏ Hàng</span>
                                    </button>
                                    <button type="button"
                                            class="btn btn-lg btn-primary btn-cart btn-cart2 add_to_cart btn_buy"
                                            title="Mua ngay">
                                        <span>Mua Ngay</span>
                                    </button>

                                </div>

                            </div>
                        </div>
                        <div class="row" style="padding-top: 30px">
                            <div class="awe-section-7" id="awe-section-7">
                                <div class="section_banner">
                                    <h2 class="hidden">Banner</h2>
                                    <div class="banner-image-col-tab">
                                        <div class="row col-md-12">
                                            <div class="item px-4 mb-4 col-md-6">
                                                <a href="banner-2-col-1.html">
                                                    <img src="site/images/lazyload.svg"
                                                         data-lazyload="/site/images/banner_coltab3_1.png"
                                                         class="img-responsive"
                                                         alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                                </a>
                                            </div>
                                            <div class="item px-4 mb-4 col-md-6">
                                                <a href="banner-2-col-2.html">
                                                    <img src="site/images/lazyload.svg"
                                                         data-lazyload="/site/images/banner_coltab3_2.png"
                                                         class="img-responsive"
                                                         alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 margin-top-15 margin-bottom-10 description-comment">
                                <!-- Nav tabs -->
                                <div class="product-tab e-tabs">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link current" data-tab="tab-1">
                                            <h3><span>Mô tả</span></h3>
                                        </li>
                                        <li class="tab-link" data-tab="tab-2">
                                            <h3><span>Đánh giá</span></h3>
                                        </li>
                                    </ul>

                                    <div class="tab-1 tab-content current tab-des-product">
                                        <h4>Chi tiết thông tin sản phẩm</h4>
                                        <div class="rte">
                                            <p>{!! $product->description !!}</p></div>
                                        <div class="col-xs-12 tag_article ">
                                            <span class="inline"><i class="fa fa-tags"></i> </span>

                                        </div>
                                    </div>

                                    <div class="tab-2 tab-content tab-comment-product">
                                        <div class="title-bl">
                                            <h4>Đánh giá sản phẩm</h4>
                                        </div>
                                        <div class="product-comment">
                                            @if(\Auth::check())
                                                <form action="{{route('site.comment.store')}}" method="post"
                                                      class="form-horizontal" id="form-comment">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    {{--                                                <input type="hidden" name="commentLevel" id="input-commentLevel"--}}
                                                    {{--                                                       value="0">--}}
                                                    {{--                                                <input type="hidden" name="commentParent" id="input-commentParent"--}}
                                                    {{--                                                       value="">--}}
                                                    <div class="form-group">
                                                        <div class="col-sm-12 star-rating">
                                                            <label class="control-label">Đánh giá chất lượng</label>
                                                            <span class="fa fa-star fa-2x" data-rating="1"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="2"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="3"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="4"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="5"></span>
                                                            <input type="hidden"
                                                                   class="rating-value" value="5" name="rating">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-commentContent">Nội
                                                                dung
                                                                đánh giá</label>
                                                            <textarea name="commentContent" rows="5"
                                                                      id="input-commentContent"
                                                                      class="form-control"></textarea>
                                                            <div class="help-block"><span
                                                                    class="text-danger">Chú ý:</span>
                                                                Không sử dụng các định dạng
                                                                HTML!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            <button type="submit" id="button-review"
                                                                    data-loading-text="Đang tải..."
                                                                    class="btn btn-primary">Tiếp tục
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @else
                                                <p>Bạn cần đăng nhập để bình luận.</p>
                                            @endif
                                        </div>
                                        <div id="product-reviews" class="product-reviews">
                                            <div>
                                                <div class="title-bl">
                                                    <h4>Đánh giá</h4>
                                                </div>
                                                <p>Không có đánh giá nào cho sản phẩm này.</p>
                                            </div>
                                            @foreach($comments as $cmt)
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img src="{{asset('images/no-avatar.jpg')}}" alt=""
                                                             style="width: 55px; border-radius:50%; -moz-border-radius:50%; -webkit-border-radius:50%;">
                                                    </div>
                                                    <div class="col-md-11">
                                                        {{ $cmt->user->name }} <br>
                                                        <div class="star-rating" style="font-size: 7px">
                                                            <span class="fa fa-star fa-2x" data-rating="1"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="2"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="3"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="4"></span>
                                                            <span class="fa fa-star fa-2x" data-rating="5"></span>
                                                            <input type="hidden"
                                                                   class="rating-value" value="5" name="rating">
                                                        </div>
                                                        <div class="comment-content" style="font-size: 15px">
                                                            {{$cmt->content}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            @endforeach
                                        </div>
                                    </div>

                                </div>
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
                                                                <img src="site/images/lazyload.svg"
                                                                     data-lazyload="site/images/lazyload.svg"
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

@section('js')
    <script src="{{asset('js/increase_input.js')}}" type="text/javascript"></script>
    <script>

        $(document).ready(function () {
            $('#imageGallery').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 9,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function (el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }
            });
        });
    </script>
    <script>
        var star_rating = $('.star-rating .fa');
        var SetRatingStar = function () {
            return star_rating.each(function () {
                if (parseInt(star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data(
                    'rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };

        star_rating.on('click', function () {
            star_rating.siblings('input.rating-value').val($(this).data('rating'));
            return SetRatingStar();
        });

        SetRatingStar();
    </script>
    <script>
        var customer_login = false;

        function reply_comment(ID) {
            replyComment = $('#reply-comment-' + ID);
            if (replyComment.length == 0) {
                $htmlComment = '<div class="form-group" id="reply-comment-' + ID + '"><hr>';
                if (!customer_login) {
                    $htmlComment += '<div class="col-sm-4"> <div class="col-sm-12"> <label class="control-label" for="reply-customerFullName">Họ & Tên*</label> <input type="text" id="reply-customerFullName" class="form-control" required/> </div><div class="col-sm-12"> <label class="control-label" for="reply-customerPhone">Điện thoại*</label> <input type="text" id="reply-customerPhone" class="form-control" required/> </div><div class="col-sm-12"> <label class="control-label" for="reply-customerEmail">Email*</label> <input type="email"id="reply-customerEmail" class="form-control" required/> </div></div>';
                    $htmlComment += '<div class="col-sm-8">';
                } else {
                    $htmlComment += '<div class="col-sm-12">';
                }
                $htmlComment += ' <div class="form-group"> <label class="control-label" for="reply-commentContent">Nội dung</label> <textarea rows="5" id="reply-commentContent" class="form-control"></textarea> </div><div class="buttons clearfix"> <div class="pull-right"> <button type="button" id="button-review" data-loading-text="Đang xử lý..." class="btn btn-primary" onclick="reply_submit(' + ID + ')">Trả lời</button> </div></div></div></div>';

                $('#comment-' + ID).append($htmlComment);
            }
        }

        function reply_submit(ID) {
            replyComment = document.getElementById('reply-comment-' + ID);
            if (replyComment.innerHTML.length > 0) {
                if (!customer_login) {
                    let inputs = replyComment.getElementsByTagName('input');
                    customerFullName = "";
                    customerPhone = "";
                    customerEmail = "";
                    for (let index = 0; index < inputs.length; index++) {
                        const element = inputs[index];
                        if (element.id == 'reply-customerFullName') {
                            customerFullName = element.value;
                        }
                        if (element.id == 'reply-customerPhone') {
                            customerPhone = element.value;
                        }
                        if (element.id == 'reply-customerEmail') {
                            customerEmail = element.value;
                        }
                    }
                    if (customerFullName.length == 0 | customerPhone.length == 0 || customerEmail.length == 0) {
                        return;
                    }
                    $('#input-customerFullName').val(customerFullName);
                    $('#input-customerPhone').val(customerPhone);
                    $('#input-customerEmail').val(customerEmail);
                }
                contents = replyComment.getElementsByTagName('textarea');
                for (let index = 0; index < contents.length; index++) {
                    const element = contents[index];
                    console.log(element.value);
                    if (element.id = 'reply-commentContent') {
                        if (element.length == 0) {
                            return;
                        }
                        $('#input-commentContent').val(element.value);
                    }
                }
                $('#input-commentLevel').val(1);
                $('#input-commentParent').val(ID);
                $('#form-comment').submit();

            }
        }

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

        function attr_id(id) {
            var json = null;
            var getData = $.parseJSON(json);
            var attribute = getData[id];
            var attribute_normal = getData[id].normal;
            var attribute_sale = getData[id].sale;

            $('#input-orderitemAttribute').val(JSON.stringify(attribute));
            if (attribute_sale.length) {
                $('span.product-price').html(formatNumber(attribute_sale) + "đ");
                $('del.product-price-old').html(formatNumber(attribute_normal) + "đ");
            } else {
                $('span.price').html(formatNumber(attribute_normal) + "đ");
                $('del.product-price-old').html('');
            }
        }
    </script>
    <script>
        function show_tab_comment() {
            $('.tab-comment-product').addClass('current');
            $('.tab-des-product').removeClass('current');
            $('html,body').animate({
                    scrollTop: $(".description-comment").offset().top
                },
                'slow');
        }
    </script>
@endsection
