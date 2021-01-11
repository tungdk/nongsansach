@extends('layouts.layout_site')
@section('css')
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
                               href="{{ route('site.post.index')}}"><span
                                    itemprop="title">Bài viết</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">{{ $post->title }}</span></strong></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-9">
                <article class="article-main" itemscope itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="article-details">
                                <h1 class="article-title">Sách Biến chứng sau cắt dạ dày</h1>
                                <div class="post-time">
                                    30-08-2019 23:08:37        </div>
                                <div class="article-content">
                                    <p style="text-align: center;"><span style="font-size: 24pt;"><img src="https://thuvienthammy.com/uploads/sachgiaiphau/images/sach-y-hoc/bien-chung-sau-cat-da-day.jpg" alt="bien chung sau cat da day" width="511" height="459" /></span></p>
                                    <p style="text-align: center;"><span style="font-size: 24pt;"><a href="https://drive.google.com/open?id=1WeqaKWkFMYpkvHVJ7xDV2UgQ7CncdHhE" target="_blank" rel="noopener noreferrer">Tải S&aacute;ch Biến chứng sau cắt dạ d&agrave;y</a></span></p>        </div>

                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row row-noGutter tag-share">
                                <!-- tags -->
                                <div class="col-xs-12 col-sm-6 tag_article ">
                                    <span class="inline"><i class="fa fa-tags"></i> </span>
                                    <a href="/the/bien-chung-sau-cat-da-day.html">biến chứng sau cắt dạ dày</a>
                                    <a href="/the/da-day.html">dạ dày</a>
                                    <a href="/the/bien-chung.html">biến chứng</a>

                                </div>


                                <div class="col-xs-12 col-sm-6 a-right">
                                    <div class="social-media"
                                         data-permalink="https://thuvienthammy.com/sach-bien-chung-sau-cat-da-day.html">
                                        <label>Chia sẻ: </label>
                                        <a target="_blank"
                                           href="http://www.facebook.com/sharer.php?u=https://thuvienthammy.com/sach-bien-chung-sau-cat-da-day.html"
                                           class="share-facebook" title="Chia sẻ lên Facebook">
                                            <i class="fa fa-facebook-official"></i>
                                        </a>
                                        <a target="_blank"
                                           href="http://twitter.com/share?text=https://thuvienthammy.com/sach-bien-chung-sau-cat-da-day.html"
                                           class="share-twitter" title="Chia sẻ lên Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank"
                                           href="http://pinterest.com/pin/create/button/?url=https://thuvienthammy.com/sach-bien-chung-sau-cat-da-day.html"
                                           class="share-pinterest" title="Chia sẻ lên pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a target="_blank"
                                           href="http://plus.google.com/share?url=https://thuvienthammy.com/sach-bien-chung-sau-cat-da-day.html"
                                           class="share-google" title="+1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="block-recent">
                                <h2 class="gothamvnu-book">Các tin khác</h2>
                                <ul>

                                    <li>
                                        <a href="/video-atlas-of-oculofacial-plastic-and-reconstructive-surgery.html"
                                           title="Video Atlas of Oculofacial Plastic and Reconstructive surgery"
                                           alt="Video Atlas of Oculofacial Plastic and Reconstructive surgery "> <i
                                                class="fa  fa-caret-right"></i>Video Atlas of Oculofacial Plastic and
                                            Reconstructive surgery </a>
                                    </li>


                                    <li>
                                        <a href="/thuoc-uc-che-men-chuyen-trong-dieu-tri-suy-tim-sau-nhoi-mau-co-tim.html"
                                           title="Thuốc ức chế men chuyển trong điều trị suy tim sau nhồi máu cơ tim"
                                           alt="Thuốc ức chế men chuyển trong điều trị suy tim sau nhồi máu cơ tim "> <i
                                                class="fa  fa-caret-right"></i>Thuốc ức chế men chuyển trong điều trị suy tim
                                            sau nhồi máu cơ tim </a>
                                    </li>


                                    <li>
                                        <a href="/ebook-xu-tri-loan-nhip-tim.html" title="Ebook Xử Trí Loạn Nhịp Tim"
                                           alt="Ebook Xử Trí Loạn Nhịp Tim "> <i class="fa  fa-caret-right"></i>Ebook Xử Trí
                                            Loạn Nhịp Tim </a>
                                    </li>


                                    <li>
                                        <a href="/pdf-sach-giai-phau-nguoi-trinh-van-minh.html"
                                           title="PDF Sách Giải Phẫu Người - Trịnh Văn Minh"
                                           alt="PDF Sách Giải Phẫu Người - Trịnh Văn Minh "> <i class="fa  fa-caret-right"></i>PDF
                                            Sách Giải Phẫu Người - Trịnh Văn Minh </a>
                                    </li>


                                    <li>
                                        <a href="/pdf-sach-bai-giang-giai-phau-hoc-gs-nguyen-quang-quyen.html"
                                           title="PDF Sách Bài giảng Giải Phẫu Học - GS. Nguyễn Quang Quyền"
                                           alt="PDF Sách Bài giảng Giải Phẫu Học - GS. Nguyễn Quang Quyền "> <i
                                                class="fa  fa-caret-right"></i>PDF Sách Bài giảng Giải Phẫu Học - GS. Nguyễn
                                            Quang Quyền </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            @include('site.post.sidebar_right')

        </div>
    </div>

@endsection

