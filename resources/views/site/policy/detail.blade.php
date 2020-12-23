@extends('layouts.layout_site')
@section('title', 'Chính sách')
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

                        <li>
                            <a itemprop="url"
                               href="#"><span
                                    itemprop="title">Chính sách</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        <li><strong><span itemprop="title">{{ $policy->name }}</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- begin layoutContent -->
                    <!-- begin product.php -->
                    <div class="details-product col-md-12">
                        <p>{!! $policy->content !!}</p>
                    <!-- end product.php -->                <!-- end layoutContent -->
                    @if(count($policies) > 0)
                        <section class="section featured-product wow fadeInUp mb-4">
                            <div class="container width-100per">
                                <!-- begin product-bottom.php -->
                                <div class="section-title a-center">
                                    <h2><a href="san-pham-noi-bat.html">Các chính sách khác</a></h2>
                                    <p>Có chính sách của của hàng</p>
                                </div>
                                <div>
                                    <ul>
                                        @foreach($policies as $po)
                                            <li style="font-size: 20px; margin: 15px 0px;"><a href="{{ route('site.policy.detail', ['id'=>$po->id, 'slug'=>$po->slug]) }}"><i class="fa fa-star-o"></i> {{ $po->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- end product-bottom.php -->
                            </div>
                        </section>
                    @endif
                </div>
                </div>

                @include('site.partials.sidebar-right')
            </div>
        </div>
    </section>
@endsection
