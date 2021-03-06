@extends('layouts.layout_site')

@section('content')
    <!-------- layoutHeader ------------>
    <section class="awe-section-1" id="awe-section-1">
        <div class="section_category_slider">
            <div class="container">
                <div class="row">
                    <section class="layoutHeader">
                        <a href="javascript:;" class="banner-right-right">
                            <img class="banner-right" src="{{ asset('site/images/banner-right.png') }}"
                                 alt="Giảm cực sốc từ 20% đến 50%" style="z-index: 1000">
                            <p class="banner-right" style="z-index: 2000;margin-right: 100px;margin-top: 25px;"
                               onclick="$('.banner-right-right').hide()"><i class="fa fa-times-circle"></i></p>
                        </a>
                        <a href="javascript:;" class="banner-left-left">
                            <img class="banner-left" src="{{ asset('site/images/banner-left.png') }}"
                                 alt="Tiễn năm tơi bời, tưng bừng giảm lớn" style="z-index: 1000">
                            <p class="banner-left" style="z-index: 2000;margin-left: 100px;margin-top: 25px;"
                               onclick="$('.banner-left-left').hide()"><i class="fa fa-times-circle"></i></p>
                        </a>

                        <div class="modal fade" id="banner-center" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="-webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 50%;
    margin: 0 auto;">
                                <img src="{{ asset('site/images/banner-thuc-pham-sach-nong-san-sach.jpg') }}"
                                     alt="Cửa hành thực phẩm nông sản sạch" style="width: 100%" >
                                <a href="javascript:;" class="close-modal" style="position: absolute; right: 8px; font-size: 25px; color: red"
                                   data-dismiss="modal">
                                    <i class="fa fa-times-circle"></i>
                                </a>
                            </div>
                        </div>

                        <!-- home_slider.php -->
                        <div class="col-md-9 col-md-push-3 px-md-4 px-0 mt-md-5 mb-5">
                            <div class="home-slider owl-carousel" data-lg-items="1" data-md-items="1" data-sm-items="1"
                                 data-xs-items="1" data-margin="0" data-nav="true">
                                @foreach($sliders as $slider)
                                    <div class="item">
                                        <a href="javascript:;" class="clearfix">
                                            <img data-src="{{ asset('uploads/sliders/'.$slider->thumbnail) }}"
                                                 alt="{{ $slider->title }}" class="owl-lazy"
                                                 style="width: 100%; height: 100%">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- end home_slider.php --><!-- home_sidebar_category.php -->
                        <div class="col-md-3 col-md-pull-9 mt-5 hidden-xs aside-vetical-menu">
                            <aside class="blog-aside aside-item sidebar-category">
                                <div class="aside-title text-center text-xl-left">
                                    <h2 class="title-head"><span>Danh mục</span></h2>
                                </div>
                                <div class="aside-content">
                                    <div class="nav-category  navbar-toggleable-md">
                                        <ul class="nav navbar-pills">
                                            @foreach($categories as $key => $cate)
                                                <li class="nav-item">
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                    <a href="{{route('site.category.detail', ['id'=>$cate->id, 'slug' => $cate->slug])}}"
                                                       class="nav-link">{{$cate->name}}</a>
                                                </li>
                                                @if($key == 6)
                                                    <li class="nav-item">
                                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                        <a href="{{route('site.category.index')}}" class="nav-link">Xem
                                                            thêm</a>
                                                    </li>
                                                    @break
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- end home_sidebar_category.php -->            </section>
                    <!--------end display template widget heder------------>
                </div>
            </div>
        </div>
    </section>
    <!-- end section layoutHeader -->
    <!--------layoutContent------------>
    <section class="layoutContent">
        <!-- all_banner_3_col -->
        <section class="awe-section-7" id="awe-section-7">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner</h2>
                    <div class="banner-slider owl-carousel" data-lg-items="3" data-md-items="3" data-sm-items="2"
                         data-xs-items="2" data-nav="true">
                        <div class="item">
                            <img data-src="{{ asset('site/images/banner1.jpg') }}" class="img-responsive owl-lazy"
                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                        </div>
                        <div class="item">
                            <img data-src="{{ asset('site/images/banner2.jpg') }}" class="img-responsive owl-lazy"
                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                        </div>
                        <div class="item">
                            <img data-src="{{ asset('site/images/banner3.jpg') }}" class="img-responsive owl-lazy"
                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('site.home.components.hot')

        @include('site.home.components.new_product')

        <section class="awe-section-5">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner </h2>
                    <div class="banner-image-col-tab">
                        <div class="row d-flex">
                            <div class="item px-4 mb-4">
                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                     data-lazyload="{{ asset('site/images/banner_coltab2_1.png') }}"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('site.home.components.category_product')

        <section class="awe-section-7" id="awe-section-7">
            <div class="section_banner">
                <div class="container">
                    <h2 class="hidden">Banner</h2>
                    <div class="banner-image-col-tab">
                        <div class="row d-md-flex">
                            <div class="item px-4 mb-4">
                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                     data-lazyload="{{ asset('site/images/banner_coltab3_1.png') }}"
                                     class="img-responsive"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </div>
                            <div class="item px-4 mb-4">
                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                     data-lazyload="{{ asset('site/images/banner_coltab3_2.png') }}"
                                     class="img-responsive"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @include('site.home.components.post')
    <!-- end home_news_slide.php --><!-- home_customer.php -->

    @include('site.home.components.customer_comment')

    @include('site.home.components.brand')

    <!-- end home_customer.php --><!-- home_brand.php -->
    </section>
    <!-- end section layoutContent -->
@endsection
@section('js')
    <script type="text/javascript">
        setTimeout(function () {
            $('#banner-center').modal('show');
        }, 230);
    </script>
@endsection
