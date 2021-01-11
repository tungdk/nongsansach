<section class="section featured-product wow fadeInUp mb-4">
    <div class="container width-100per">
        <!-- begin product-bottom.php -->
        <div class="section-title a-center">
            <h2><a href="san-pham-noi-bat.html">Sản phẩm liên quan</a></h2>
            <p>Có phải bạn đang tìm những sản phẩm dưới đây</p>
        </div>
        <div class="owl-carousel" data-lgg-items="4" data-lg-items="4" data-md-items="4"
             data-sm-items="3" data-xs-items="2" data-xss-items="2" data-nav="true">
            @foreach($relate_products as $product)
                <div class="item">
                    <div class="product-box">
                        <div class="product-thumbnail flexbox-grid">
                            <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                               title="{{ $product->name }}">
                                <img src="{{ asset('uploads/products/'.$product->avatar) }}"
                                     data-lazyload="{{ asset('uploads/products/'.$product->avatar) }}"
                                     alt="{{ $product->slug }}">
                            </a>
                        </div>
                        <div class="product-info a-center">
                            <h3 class="product-name"><a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                                                        title="{{ $product->name }}">{{ $product->name }}</a></h3>

                            <div class="price-box clearfix">
                                <div class="special-price">
                                    <span class="price product-price">{{ number_format($product->price_new, 0, '.', ',') }}₫</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- end product-bottom.php -->
    </div>
</section>
