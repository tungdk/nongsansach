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
                            <a itemprop="url"
                               href="{{ route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->category->slug]) }}"><span
                                    itemprop="title">{{$product->category->name}}</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">{{$product->name}}</span></strong></li>
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
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <ul id="imageGallery">
                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"
                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">
                                        <img
                                            src="{{ asset('uploads/products/'.$product->avatar) }}"/>
                                    </li>
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="{{ asset('uploads/products/'.$product->avatar) }}"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="{{ asset('uploads/products/'.$product->avatar) }}"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="{{ asset('uploads/products/'.$product->avatar) }}"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="{{ asset('uploads/products/'.$product->avatar) }}"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li data-thumb="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"--}}
                                    {{--                                        data-src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg">--}}
                                    {{--                                        <img--}}
                                    {{--                                            src="http://nongsansachvietnam.vn/upload/products/thumb/Nho_xanh_Ninh_Thun.jpg"/>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 details-pro">
                                <h1 class="title-head">{{$product->name}}</h1>
                                <div class="reviews clearfix">
                                    <div class="f-left margin-right-10">
                                        <div class="product-reviews-badge" data-id="11480175">
                                            <div class="product-reviews-star" data-score="4.7" data-number="5"
                                                 title="gorgeous" style="color: rgb(255, 190, 0);">
                                                @for($i=1; $i<=5; $i++)
                                                    @if($i <= $product->rating)
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-1x"></i>
                                                        </span>
                                                    @else
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-1x"></i>
                                                        </span>
                                                    @endif
                                                @endfor

                                                {{--                                                <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">0 đánh giá</a>--}}
                                                {{--                                                / <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">Viết đánh giá</a>--}}

                                                <a href="#" onclick="show_tab_comment()">{{ $count_comments }} đánh
                                                    giá</a>
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
                                            @if($product->price_old != $product->price_new)
                                                <span class="product-price-new">
                                                    ₫{{number_format($product->price_new, 0, ',', '.')}}
                                                </span>
                                                <span class="product-price-sale p-2"
                                                      style="margin-left: 20px; margin-bottom: 2px">
                                                Giảm {{number_format($product->percent)}}%
                                                </span>
                                        </span>
                                    </div>
                                    <del
                                        class="price product-price-old">{{number_format($product->price_old, 0, ',', '.')}}
                                        đ
                                    </del>
                                    @else
                                        <span class="product-price-new">
                                                    ₫{{number_format($product->price_new, 0, ',', '.')}}
                                                </span>
                                        </span>

                                </div>
                            @endif
                            <!-- Giá -->
                            </div>
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
                                    <input class="product-qty" type="number" name="quantity" min="1"
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
                                        class="btn btn-lg btn-primary btn-add-cart"
                                        title="Thêm vào giỏ hàng" onclick="add_to_cart_detail()">
                                    <span><i class="fa fa-cart-arrow-down"></i> Thêm Vào Giỏ Hàng</span>
                                </button>
                                <button type="button"
                                        class="btn btn-lg btn-primary btn-cart btn-cart2 btn_buy"
                                        title="Mua ngay" onclick="buy_now()">
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
                                            <img src="{{ asset('site/images/lazyload.svg') }}"
                                                 data-lazyload="{{ asset('site/images/banner_coltab3_1.png') }}"
                                                 class="img-responsive"
                                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                                        </div>
                                        <div class="item px-4 mb-4 col-md-6">
                                            <img src="{{ asset('site/images/lazyload.svg') }}"
                                                 data-lazyload="{{ asset('site/images/banner_coltab3_2.png') }}"
                                                 class="img-responsive"
                                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
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
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"
                                               id="product_id">
                                        @if(\Auth::check())
                                            <form action="{{route('site.comment.store')}}" method="post"
                                                  class="form-horizontal" id="form-comment">
                                                @csrf
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
                                                               class="rating-value" value="5" name="rating"
                                                               id="rating">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-commentContent">Nội
                                                            dung
                                                            đánh giá</label>
                                                        <textarea name="commentContent" rows="5"
                                                                  id="input-commentContent"
                                                                  class="form-control" required></textarea>
                                                        <div class="help-block"><span
                                                                class="text-danger">Chú ý:</span>
                                                            Không sử dụng các định dạng
                                                            HTML!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                    <div class="pull-right">
                                                        <button type="button" id="button-review"
                                                                data-loading-text="Đang tải..."
                                                                class="btn btn-primary btn-comment"
                                                                onclick="add_comment()">Bình luận
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        @else
                                            <p>Bạn cần đăng nhập để bình luận.
                                                <button class="btn btn-success" onclick="openLoginModal()">Đăng
                                                    nhập
                                                </button>
                                            </p>
                                        @endif
                                    </div>
                                    <div id="product-reviews" class="product-reviews">
                                        <div>
                                            <div class="title-bl">
                                                <h4>Đánh giá</h4>
                                            </div>

                                        </div>
                                        <div class="comment-view">
                                            {{--                                                list comment--}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end product.php -->                <!-- end layoutContent -->

                @include('site.product.components.relate_product')
            </div>
            <div class="dqdt-sidebar sidebar right left-content col-lg-3">
                @include('site.partials.five_new_product')
                @include('site.partials.sidebar-category')
                @include('site.partials.five_hot_news')
            </div>
        </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{asset('js/increase_input.js')}}" type="text/javascript"></script>
    <script>
        window.onload = function () {
            load_comment();
        };

        function add_comment() {
            let product_id = $('#product_id').val();
            let commentContent = $('#input-commentContent').val();
            let rating = $('#rating').val();
            if(commentContent.trim() == ""){
                Swal.fire({
                    icon: 'error',
                    text: "Bạn chưa nhập bình luận",
                })
                return false;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('site.comment.store') }}',
                data: {
                    'product_id': product_id,
                    'commentContent': commentContent,
                    'rating': rating
                },
                success: function (data) {
                    if (data.status == true) {
                        $('.comment-view').empty();
                        $('.comment-view').append(data.view);
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        $('#input-commentContent').val(null);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: data.message,
                        })
                    }

                },
                error: function (data) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Có lỗi xảy ra!',
                    })
                }
            });
        }

        {{--let last_id;--}}
        {{--function get_last_id(){--}}
        {{--    $.ajax({--}}
        {{--        type: 'GET',--}}
        {{--        url: '{{ route('site.comment.get_last_id') }}',--}}
        {{--        success: function (data) {--}}
        {{--            console.log(data);--}}
        {{--            last_id = data;--}}
        {{--        },--}}
        {{--        error: function (data) {--}}

        {{--        }--}}
        {{--    });--}}
        {{--}--}}
        function load_comment(page) {
            let product_id = $('#product_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('site.comment.load') }}',
                data: {
                    // 'token' : token,
                    'product_id': product_id,
                    'page': page
                },
                success: function (data) {
                    $('.comment-view').empty().append(data.view);
                },
                error: function (data) {

                }
            });
        }

        function add_to_cart_detail() {
            let product_id = $('#product_id').val();
            let quantity = $('.product-qty').val();
            $.ajax({
                type: 'GET',
                url: '/cart/add/' + product_id + '/' + quantity,
                data: {
                    // 'token' : token,
                    'id': product_id,
                    'quantity': quantity
                },
                success: function (data) {
                    if(data.success == true){
                        var count_cart = $('.cartCount2').text()
                        var x = parseInt(count_cart);
                        var y = x + 1;
                        $('.cartCount2').text(y);
                        $('.cartCount').text(y);
                        Swal.fire({
                            title: 'Thêm vào giỏ hàng thành công',
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: 'Tiếp tục mua hàng',
                            confirmButtonText: 'Đi đến giỏ hàng',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/cart";
                            }
                        })
                    }
                    else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message,
                        })
                    }

                },
                error: function (data) {
                    openLoginModal();
                }
            });
        }

        function buy_now() {
            let product_id = $('#product_id').val();
            let quantity = $('.product-qty').val();
            $.ajax({
                type: 'GET',
                url: '/cart/add/' + product_id + '/' + quantity,
                data: {
                    // 'token' : token,
                    'id': product_id,
                    'quantity': quantity
                },
                success: function (data) {
                    window.location.href = "/cart";
                },
                error: function (data) {
                    openLoginModal();
                }
            });
        }
    </script>
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
