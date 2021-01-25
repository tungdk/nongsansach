@extends('layouts.layout_site')
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
                <article class="article-main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="article-details">
                                <h1 class="article-title">{{ $post->title }}</h1>
                                <div class="post-time">
                                    {{ $post->updated_at }}
                                </div>
                                <div class="article-content">
                                    <p>{!! $post->content !!} </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row row-noGutter tag-share">
                                <!-- tags -->
                                <div class="col-xs-12 col-sm-6 tag_article ">
                                    <span class="inline"><i class="fa fa-tags"></i> </span>
                                    <a href="/">nông sản sạch</a>
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
                                <h2 class="gothamvnu-book">Các tin khác liên quan</h2>
                                <ul>
                                    @foreach($relate_posts as $post)
                                        <li>
                                            <a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}"
                                               title="{{ $post->title}}"
                                               alt="{{ $post->title}}">
                                                <i class="fa fa-caret-right"></i>
                                                {{ $post->title }}
                                            </a>
                                        </li>
                                    @endforeach
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

