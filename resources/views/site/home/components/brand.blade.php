<section class="awe-section-10" id="awe-section-10">
    <div class="section section-brand mb-5">
        <div class="container">
            <div class="section-title a-center">
                <h2><span>Đối tác</span></h2>
            </div>
            <div class="section-content">
                <div class="owl-carousel owl-theme" data-lg-items="6" data-md-items="5" data-sm-items="4"
                     data-xs-items="3" data-xss-items="2" data-margin="30">
                    @if(isset($partners))
                        @foreach($partners as $partner)
                            <div class="brand-item">
                                <a href="#" class="img25"><img data-src="{{ asset('uploads/partners/'. $partner->logo) }}" class="owl-lazy"
                                                               alt="{{ $partner->name }}">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home_brand.php -->