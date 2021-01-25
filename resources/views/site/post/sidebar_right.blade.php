<aside class="dqdt-sidebar sidebar left left-content col-lg-3">
    <!-- beign layoutRight -->
    <!-- sidebar_news_recent.php -->
    <div class="aside-vetical-menu">
        <aside class="aside-item sidebar-category collection-category">
            <div class="aside-title">
                <h2 class="title-head margin-top-0"><span>Danh mục tin tức</span></h2>
            </div>
            <div class="aside-content">
                <nav class="nav-category navbar-toggleable-md">
                    <ul class="nav navbar-pills">
                        <li class="nav-item nav-collapse">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        @if(isset($post_categories))
                            @foreach($post_categories as $key => $cate)
                                <li class="nav-item nav-collapse">
                                    @if($key == 5)
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <a href="{{ route('site.post_category.index') }}" class="nav-link"
                                           data-toggle="collapse" data-target="#aaaaa">Xem thêm</a>
                                        @break
                                    @else
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <a href="{{ route('site.post_category.detail', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}"
                                           class="nav-link"
                                           data-toggle="collapse"
                                           data-target="#aaaaa">{{$cate->name}}</a>
                                    @endif
                                </li>
                    @endforeach
                    @endif
                </nav>
            </div>
        </aside>
    </div>
    <!-- end sidebar_category.php -->          <!-- end layoutRight -->
    @include('site.partials.five_hot_news')

    @include('site.partials.five_new_product')

    @include('site.partials.sidebar-category')

</aside>
