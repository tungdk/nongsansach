<section class="awe-section-8" id="awe-section-8">
    <div class="section section_blog">
        <div class="container">
            <div class="section-title a-center">
                <h2><a href="{{ route('site.post.index') }}">Tin tức</a></h2>
            </div>
            <div class="section-content">
                <div class="blog-slider owl-carousel" data-lg-items='4' data-md-items='3' data-sm-items='2'
                     data-xs-items="2" data-nav="true">
                    @if(isset($posts))
                        @foreach($posts as $post)
                            <article class="blog-item text-center">
                                <div>
                                    <div class="blog-item-thumbnail">
                                        <a href="{{ route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug]) }}">
                                            <img data-src="{{ asset('uploads/posts/'.$post->thumbnail) }}"
                                                alt="{{ $post->title }}"
                                                class="owl-lazy" style="width: 265px; height: 175px">
                                        </a>
                                    </div>
                                    <div class="blog-item-info m-4">
                                        <h3 class="blog-item-name"><a
                                                href="{{ route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ strlen($post->title) > 45 ? mb_substr($post->title, 0, 45)."..." : $post->title }}</a></h3>
                                        <a class="btn" href="{{ route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug]) }}">Chi tiết</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
