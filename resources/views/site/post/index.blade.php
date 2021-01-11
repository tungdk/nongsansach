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
                <div class="col-lg-9">
                    <section style="padding-bottom: 50px" class="catelogy_post">
                        <!--blog post-->
                        <div class="row">
                            @foreach($posts as $post)
                                <article class="m_bottom_20 clearfix inline">
                                    <a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}"
                                       class="col-md-2 photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners inline">
                                        <img style="width: 120px;"
                                             src="{{ asset('uploads/posts/'.$post->thumbnail) }}"
                                             class="tr_all_long_hover"
                                             alt="{{ $post->title }}">
                                    </a>
                                    <div class="mini_post_content col-md-10" style="padding-top: 3px">
                                        <b><a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}"
                                              class="color_dark fw_medium">{{ strlen($post->title) > 130 ? substr($post->title)."..." : $post->title}}</a></b>
                                        <p class="m_bottom_10">{{ strlen($post->description) > 260 ? substr($post->description)."..." : $post->description}}</p>
                                    </div>

                                </article>
                                <hr class="divider_type_3 m_bottom_10">
                            @endforeach
                            <div class="clearfix m_xs_bottom_30">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <!--pagination-->
                                    <p style="vertical-align: top;padding-right: 10px"
                                       class="d_inline_middle f_size_medium">{{ $posts->links('vendor/pagination/bootstrap-4') }} </p>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                @include('site.post.sidebar_right')
            </div>
        </div>
    </section>
@endsection
