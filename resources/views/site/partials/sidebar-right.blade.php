<div class="dqdt-sidebar sidebar right left-content col-lg-3">
    <!-- end sidebar_category.php --><!-- sidebar_product_recent.php -->
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
                        <div class="row row-noGutter">
                            <div class="col-sm-12">
                                @foreach($recent_products as $product)
                                    <div class="product-mini-item clearfix on-sale">
                                        <div class="product-img relative">
                                            <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}">
                                                <img src="{{ asset('site/images/lazyload.svg') }}"
                                                     data-lazyload="{{ asset('uploads/products/'.$product->avatar) }}"
                                                     alt="{{$product->slug}}">

                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3>
                                                <a href="{{route('site.product.detail', ['id'=>$product->id, 'slug'=>$product->slug])}}"
                                                   title="{{$product->name}}    "
                                                   class="product-name">{{ strlen($product->name) > 30 ? substr($product->name, 0, 30)."..." : $product->name }}</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="price">
                                                    <span class="price product-price">{{ number_format($product->price_new, 0, '.', ',')}}₫</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                    <!-- /.products -->

                </div>
            </div>
        </div>
    </div>
    <!-- end sidebar_product_recent.php --><!-- sidebar_category.php -->
    <div class="aside-vetical-menu">
        <aside class="aside-item sidebar-category collection-category">
            <div class="aside-title">
                <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>
            </div>
            <div class="aside-content">

                <nav class="nav-category navbar-toggleable-md">
                    <ul class="nav navbar-pills">
                        {{--                        <li class="nav-item nav-collapse">--}}
                        {{--                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>--}}
                        {{--                            <a href="danh-muc/aaaaa.html" class="nav-link" data-toggle="collapse" data-target="#aaaaa">AAAAA</a>--}}
                        @if(isset($categories))
                            @foreach($categories as $key => $cate)
                                <li class="nav-item nav-collapse">
                                    @if($key == 5)
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <a href="{{ route('site.category.index') }}" class="nav-link"
                                           data-toggle="collapse" data-target="#aaaaa">Xem thêm</a>
                                        @break
                                    @else
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <a href="{{ route('site.category.detail', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}"
                                           class="nav-link"
                                           data-toggle="collapse" data-target="#aaaaa">{{$cate->name}}</a>
                                    @endif
                                </li>
                    @endforeach
                    @endif
                </nav>
            </div>
        </aside>
    </div>
    <!-- end sidebar_category.php -->                <!-- end layoutRight -->
</div>
