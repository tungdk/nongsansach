@extends('layouts.layout_site')
@section('content')
    <!-- end header.php -->
<section class="bread_crumb py-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">

                    <li class="home">
                        <a itemprop="url" href="index.html"><span itemprop="title">Trang chủ</span></a>
                        <span> <i class="fa fa-angle-right"></i> </span>
                    </li>

                    <li>
                        <a itemprop="url" href="danh-muc/aaaaa.html"><span itemprop="title">AAAAA</span></a>
                        <span> <i class="fa fa-angle-right"></i> </span>
                    </li>
                    <li><strong ><span itemprop="title">Tên sản phẩm đang bán 1</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product " itemscope="" itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Vải thiều loại to">
    <meta itemprop="url" content="//dualeo-x.bizwebvietnam.net/cherry-do-canada-loai-to">
    <meta itemprop="image" content="../bizweb.dktcdn.net/thumb/grande/100/308/325/products/kf57fd708888943c073792a327aeb51a63.jpg?v=1524537033277">

    <meta itemprop="model" content="">

    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
        <meta itemprop="price" content="80.000₫">

        <meta itemprop="priceCurrency" content="VND">
    </div>
    <meta itemprop="description" content="Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức....">

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
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 details-pro">
                            <h1 class="title-head">Tên sản phẩm đang bán 1</h1>
                            <div class="reviews clearfix">
                                <div class="f-left margin-right-10">
                                    <div class="product-reviews-badge" data-id="11480175">
                                        <div class="product-reviews-star" data-score="4.7" data-number="5" title="gorgeous" style="color: rgb(255, 190, 0);">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                        <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">0 đánh
                                                giá</a>
                                            / <a href="#" onclick="$('a[href=\'#tab-comment\']').trigger('click'); return false;">Viết đánh
                                                giá</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="status clearfix">
                                SKU: <span class="inventory"></span>
                            </div>
                            <div class="price-box clearfix">
                                <div class="special-price"><span class="price product-price">Liên hệ</span> </div>                <!-- Giá -->

                            </div>

                            <div class="product-summary product_description margin-bottom-15">
                                <div class="rte description">
                                </div>
                            </div>
                            <button type="button" class="btn btn-lg btn-primary btn-cart btn-cart2 add_to_cart btn_buy add_to_cart" title="Liên hệ">
                                <span>Liên hệ</span>
                            </button>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-lg-12 margin-top-15 margin-bottom-10">
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

                                <div class="tab-1 tab-content current">
                                    <div class="rte">
                                        <p>aa</p>                    </div>
                                    <div class="col-xs-12 tag_article ">
                                        <span class="inline"><i class="fa fa-tags"></i> </span>

                                    </div>
                                </div>

                                <div class="tab-2 tab-content">
                                    <div id="product-reviews" class="product-reviews">
                                        <div>
                                            <div class="title-bl">
                                                <h4>Đánh giá sản phẩm</h4>
                                            </div>
                                            <p>Không có đánh giá nào cho sản phẩm này.</p>
                                        </div>
                                    </div>
                                    <div class="product-comment">
                                        <form action="https://shop1.jweb.com.vn/binh-luan.html" method="post" class="form-horizontal" id="form-comment">
                                            <input type="hidden" name="csrf_token" value=0ab078a1e1c96f1cebe1f0a2f664c213><input type="hidden" name="contentID" value=1><input type="hidden" name="commentLevel" id="input-commentLevel" value = "0" ><input type="hidden" name="commentParent" id="input-commentParent"  value = "" >                                                        <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="input-customerFullName">Họ & Tên*</label>
                                                    <input type="text" name="customerFullName" value="" id="input-customerFullName"
                                                           class="form-control" required />
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="input-customerPhone">Điện thoại*</label>
                                                    <input type="text" name="customerPhone" value="" id="input-customerPhone" class="form-control"
                                                           required />
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="input-customerEmail">Email*</label>
                                                    <input type="email" name="customerEmail" value="" id="input-customerEmail" class="form-control"
                                                           required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12 star-rating">
                                                    <label class="control-label">Đánh giá chất lượng</label>
                                                    <span class="fa fa-star fa-2x" data-rating="1"></span>
                                                    <span class="fa fa-star fa-2x" data-rating="2"></span>
                                                    <span class="fa fa-star fa-2x" data-rating="3"></span>
                                                    <span class="fa fa-star fa-2x" data-rating="4"></span>
                                                    <span class="fa fa-star fa-2x" data-rating="5"></span>
                                                    <input type="hidden" name="orderrattingValue" class="rating-value" value="4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-commentContent">Nội dung đánh giá</label>
                                                    <textarea name="commentContent" rows="5" id="input-commentContent"
                                                              class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Chú ý:</span> Không sử dụng các định dạng
                                                        HTML!</div>
                                                </div>
                                            </div>
                                            <input type="hidden" value="5" name="rating" />
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button type="submit" id="button-review" data-loading-text="Đang tải..."
                                                            class="btn btn-primary">Tiếp tục</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <script>
                    $(document).ready(function() {
                        $('#imageGallery').lightSlider({
                            gallery:true,
                            item:1,
                            loop:true,
                            thumbItem:9,
                            slideMargin:0,
                            enableDrag: false,
                            currentPagerPosition:'left',
                            onSliderLoad: function(el) {
                                el.lightGallery({
                                    selector: '#imageGallery .lslide'
                                });
                            }
                        });
                    });
                </script>
                <script>
                    var star_rating = $('.star-rating .fa');
                    var SetRatingStar = function() {
                        return star_rating.each(function() {
                            if (parseInt(star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data(
                                'rating'))) {
                                return $(this).removeClass('fa-star-o').addClass('fa-star');
                            } else {
                                return $(this).removeClass('fa-star').addClass('fa-star-o');
                            }
                        });
                    };

                    star_rating.on('click', function() {
                        star_rating.siblings('input.rating-value').val($(this).data('rating'));
                        return SetRatingStar();
                    });

                    SetRatingStar();
                </script>
                <script>
                    var customer_login = false;
                    function reply_comment(ID) {
                        replyComment = $('#reply-comment-'+ID);
                        if(replyComment.length == 0){
                            $htmlComment = '<div class="form-group" id="reply-comment-'+ID+'"><hr>';
                            if(!customer_login){
                                $htmlComment += '<div class="col-sm-4"> <div class="col-sm-12"> <label class="control-label" for="reply-customerFullName">Họ & Tên*</label> <input type="text" id="reply-customerFullName" class="form-control" required/> </div><div class="col-sm-12"> <label class="control-label" for="reply-customerPhone">Điện thoại*</label> <input type="text" id="reply-customerPhone" class="form-control" required/> </div><div class="col-sm-12"> <label class="control-label" for="reply-customerEmail">Email*</label> <input type="email"id="reply-customerEmail" class="form-control" required/> </div></div>';
                                $htmlComment += '<div class="col-sm-8">';
                            }else{
                                $htmlComment += '<div class="col-sm-12">';
                            }
                            $htmlComment += ' <div class="form-group"> <label class="control-label" for="reply-commentContent">Nội dung</label> <textarea rows="5" id="reply-commentContent" class="form-control"></textarea> </div><div class="buttons clearfix"> <div class="pull-right"> <button type="button" id="button-review" data-loading-text="Đang xử lý..." class="btn btn-primary" onclick="reply_submit('+ID+')">Trả lời</button> </div></div></div></div>';

                            $('#comment-'+ID).append($htmlComment);
                        }
                    }
                    function reply_submit(ID) {
                        replyComment = document.getElementById('reply-comment-'+ID);
                        if(replyComment.innerHTML.length > 0){
                            if(!customer_login){
                                let inputs = replyComment.getElementsByTagName('input');
                                customerFullName = "";
                                customerPhone = "";
                                customerEmail = "";
                                for (let index = 0; index < inputs.length; index++) {
                                    const element = inputs[index];
                                    if(element.id == 'reply-customerFullName'){
                                        customerFullName = element.value;
                                    }
                                    if(element.id == 'reply-customerPhone'){
                                        customerPhone = element.value;
                                    }
                                    if(element.id == 'reply-customerEmail'){
                                        customerEmail = element.value;
                                    }
                                }
                                if(customerFullName.length == 0 | customerPhone.length == 0 || customerEmail.length == 0){
                                    return;
                                }
                                $('#input-customerFullName').val(customerFullName);
                                $('#input-customerPhone').val(customerPhone);
                                $('#input-customerEmail').val(customerEmail);
                            }
                            contents =  replyComment.getElementsByTagName('textarea');
                            for (let index = 0; index < contents.length; index++) {
                                const element = contents[index];
                                console.log(element.value);
                                if(element.id = 'reply-commentContent'){
                                    if(element.length == 0){
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
                            $('span.product-price').html(formatNumber(attribute_sale)+"đ");
                            $('del.product-price-old').html(formatNumber(attribute_normal)+"đ");
                        } else {
                            $('span.price').html( formatNumber(attribute_normal) + "đ");
                            $('del.product-price-old').html('');
                        }
                    }
                </script>
                <!-- end product.php -->                <!-- end layoutContent -->
                <section class="section featured-product wow fadeInUp mb-4">
                    <div class="container width-100per">
                        <!-- begin product-bottom.php -->
                        <div class="section-title a-center">
                            <h2><a href="san-pham-noi-bat.html">Sản phẩm liên quan</a></h2>
                            <p>Có phải bạn đang tìm những sản phẩm dưới đây</p>
                        </div>
                        <div class="owl-carousel" data-lgg-items="4" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xss-items="2" data-nav="true">

                        </div>
                        <!-- end product-bottom.php -->                  </div>
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

                                            <div class="product-mini-item clearfix   on-sale">
                                                <div class="product-img relative">
                                                    <a href="ten-san-pham-dang-ban-1.html">

                                                        <img  src="themes/default/assets/images/lazyload.svg" data-lazyload="" alt="Tên sản phẩm đang bán 1">

                                                    </a>

                                                </div>

                                                <div class="product-info">

                                                    <h3><a href="ten-san-pham-dang-ban-1.html" title="Tên sản phẩm đang bán 1" class="product-name">Tên sản phẩm đang bán 1</a></h3>

                                                    <div class="price-box">
                                                        <span class="price"><span class="price product-price">Liên hệ</span> </span>

                                                    </div>

                                                </div>
                                            </div>
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
                                <ul class="nav navbar-pills"><li class="nav-item nav-collapse"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="danh-muc/aaaaa.html" class="nav-link"  data-toggle="collapse" data-target="#aaaaa">AAAAA</a></ul>            </nav>
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
    <!-- Plugin JS -->
    <script src="themes/default/assets/js/api.jquery.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/bootstrap.min.js"></script>
    <script src="themes/default/assets/js/lightslider.min.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/lightgallery-all.min.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Main JS -->
    <script src="themes/default/assets/js/appear.js"></script>
    <script src="themes/default/assets/js/dl_main.js" type="text/javascript"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
@endsection


