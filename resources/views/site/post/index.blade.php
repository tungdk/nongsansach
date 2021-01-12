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

                        <li><strong><span itemprop="title">Tin tức</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="row">
                <section class="main_container collection col-lg-9">
                    <section class="list-blogs blog-main">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-xs-12">
                                    <article class="blog-item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="blog-item-thumbnail">
                                                    <a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}">
                                                        <img
                                                            src="{{ asset('site/images/lazyload.svg') }}"
                                                            data-lazyload="{{ asset('uploads/posts/'.$post->thumbnail) }}"
                                                            alt="{{ $post->title }}" style="width: 247px; height: 186px; object-fit: cover">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="blog-item-info">
                                                    <h3 class="blog-item-name"><a
                                                            href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}">{{ strlen($post->title) > 130 ? substr($post->title)."..." : $post->title}}</a></h3>
                                                    <div class="post-time">
                                                        <div class="inline-block">{{ $post->updated_at }}</div>
                                                    </div>
                                                    <p class="blog-item-summary">{{ strlen($post->description) > 260 ? substr($post->description)."..." : $post->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            <div class="clearfix m_xs_bottom_30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <!--pagination-->
                                    <p style="vertical-align: top;padding-right: 10px"
                                       class="d_inline_middle f_size_medium">{{ $posts->links('vendor/pagination/bootstrap-4') }} </p>
                                </div>

                            </div>
                        </div>
                        <div class="text-center">
                        </div>
                    </section>          <!-- end layoutContent -->
                </section>

                @include('site.post.sidebar_right')
            </div>
        </div>
    </section>
@endsection
