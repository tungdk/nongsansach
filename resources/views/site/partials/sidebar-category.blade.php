@if(isset($categories) && count($categories) > 0)
    <div class="aside-vetical-menu">
        <aside class="aside-item sidebar-category collection-category">
            <div class="aside-title">
                <h2 class="title-head margin-top-0"><span>Danh mục sản phẩm</span></h2>
            </div>
            <div class="aside-content">
                <nav class="nav-category navbar-toggleable-md">
                    <ul class="nav navbar-pills">
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
                </nav>
            </div>
        </aside>
    </div>
@endif
