<section class="awe-section-8" id="awe-section-8">
    <div class="section section_blog">
        <div class="container">
            <div class="section-title a-center">
                <h2><a href="#">Tin tức</a></h2>
            </div>
            <div class="section-content">
                <div class="blog-slider owl-carousel" data-lg-items='4' data-md-items='3' data-sm-items='2'
                     data-xs-items="2" data-nav="true">
                    @if(isset($posts))
                        @foreach($posts as $post)
                            <div class="blog-item text-center p-4 mb-5">
                                <div class="image-avata">
                                    <img data-src="https://miro.medium.com/max/10000/0*wZAcNrIWFFjuJA78"
                                         class="owl-lazy"
                                         alt="Khách hàng thân thiết">
                                </div>
                                <h4 class="name">{{ $post->title }}</h4>
{{--                                <p class="designation m-0">{{ $post->description }}</p>--}}
                                <p class="designation m-0"><a href="{{ route('site.post.detail', ['id'=>$post->id, 'slug'=>$post->slug]) }}">Xem thêm</a></p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
