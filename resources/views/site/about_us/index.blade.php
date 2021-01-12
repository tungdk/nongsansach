@extends('layouts.layout_site')
@section('title', 'Giới thiệu')
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

                        <li><strong><span itemprop="title">Giới thiệu</span></strong></li>
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
                    <div class="details-product">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $about_us->about_us !!}
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="dqdt-sidebar sidebar left left-content col-lg-3">
                    @include('site.partials.five_new_product')
                    @include('site.partials.five_hot_news')
                    @include('site.partials.sidebar-category')
                </aside>
            </div>
        </div>
    </section>
@endsection
