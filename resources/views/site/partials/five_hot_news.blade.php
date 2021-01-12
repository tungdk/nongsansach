@if(isset($five_post_best_views) && count($five_post_best_views) > 0)
    <div class="blog-aside aside-item">
        <div>
            <div class="aside-title mb-4">
                <h2 class="title-head"><a href="#">Tin tức nổi bật</a></h2>
            </div>
            <div class="aside-content">
                <div class="blog-list blog-image-list">
                    @foreach($five_post_best_views as $post)
                        <div class="loop-blog">
                            <div class="thumb-left">
                                <a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}">
                                    <img src="{{ asset('site/images/lazyload.svg') }}"
                                         data-lazyload="{{ asset('uploads/posts/'.$post->thumbnail) }}"
                                         alt="{{ $post->title }}" class="img-responsive">
                                </a>
                            </div>
                            <div class="name-right">
                                <h3>
                                    <a href="{{route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a>
                                </h3>
                                <div class="post-time">{{ $post->updated_at }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
