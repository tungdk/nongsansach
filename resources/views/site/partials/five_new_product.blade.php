@if(isset($recent_products) && count($recent_products) > 0)
    <div class="aside-item aside-mini-list-product mb-5">
        <div>
            <div class="aside-title">
                <h2 class="title-head">
                    <a href="#" title="Sản phẩm mới">Sản phẩm mới</a>
                </h2>
            </div>
            <div class="aside-content related-product">
                <div class="product-mini-lists">
                    <div class="products">
                        @foreach($recent_products as $product)
                            <div class="row row-noGutter">
                                <div class="col-sm-12">
                                    <div class="product-mini-item clearfix on-sale">
                                        <div class="product-img relative">
                                            <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}">
                                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                                     data-lazyload="{{ asset('uploads/products/'.$product->avatar) }}"
                                                     alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3>
                                                <a href="{{route('site.product.detail',['id' => $product->id, 'slug' => $product->slug])}}"
                                                   title="{{ $product->name }}">{{ strlen($product->name) > 50 ? substr($product->name, 0, 47)."..." : $product->name }}</a>
                                            </h3>
                                            <div class="price-box">
                                                    <span class="price"><span
                                                            class="price product-price">{{ number_format($product->price_new, 0, '.', '.') }}₫</span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.products -->
                </div>
            </div>
        </div>
    </div>
@endif
