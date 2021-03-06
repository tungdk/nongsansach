<section class="awe-section-9" id="awe-section-9">
    <div class="section section_testimonial">
        <div class="container">
            <div class="section-title a-center">
                <h2><span>Phản hồi của khách hàng</span></h2>
                <p>Phản hồi của những khách hàng đã và đang sử dụng sản phẩm trong suốt năm qua.</p>
            </div>
            <div class="section-content">
                <div class="testimonial-slider owl-carousel" data-lg-items='3' data-md-items='3'
                     data-sm-items='2' data-xs-items="2" data-nav="true">
                    <?php $i=1; ?>
                    @foreach($comments as $comment)
                        <div class="testimonial-item text-center p-4 mb-5">
                            <div class="image-avata">
                                <img data-src="{{ asset('site/images/testimonial_'.$i.'.jpg') }}"
                                     class="owl-lazy"
                                     alt="Khách hàng thân thiết">
                            </div>
                            <h4 class="name">{{ $comment->user->name }}</h4>
                            <p class="designation m-0">{{ $comment->content }}</p>
                        </div>
                        <?php $i++; ?>
                        @if($i == 4)
                            <?php $i=1; ?>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
