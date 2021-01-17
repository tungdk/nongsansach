@extends('layouts.layout_site')
@section('title', 'Chính sách')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
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
                                        <h2><a href="javascript:;">Các chính sách khác</a></h2>
                                        <p>Các chính sách khác của cửa hàng</p>
                                    </div>
                                    <div>
                                        <ul>
                                            @foreach($policies as $po)
                                                <li style="font-size: 20px; margin: 15px 0px;"><a
                                                        href="{{ route('site.policy.detail', ['id'=>$po->id, 'slug'=>$po->slug]) }}"><i
                                                            class="fa fa-star-o"></i> {{ $po->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end product-bottom.php -->
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
                <div class="dqdt-sidebar sidebar right left-content col-lg-3">
                    @include('site.partials.five_new_product')

                    @include('site.partials.five_hot_news')

                    @include('site.partials.sidebar-category')
                </div>
            </div>
        </div>
    </section>
@endsection
