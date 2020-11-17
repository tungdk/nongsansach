<header class="header">
    <div class="topbar-mobile hidden-lg hidden-md text-center text-md-left">
        <div class="container">
            <i class="fa fa-mobile"
               style=" font-size: 20px; display: inline-block; position: relative; transform: translateY(2px); "></i>
            Hotline:
            <span>

					<a href="tel:0972782255"> 0972782255</a>

				</span>
        </div>
    </div>
    <div class="topbar hidden-sm hidden-xs">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-sm-6 col-md-9 a-left">
                        <ul class="list-inline f-left">
                            <li>
                                <i class="fa fa-mobile"
                                   style=" font-size: 20px; display: inline-block; position: relative; transform: translateY(2px); "></i>
                                Hotline:
                                <span>

										<a href="tel:0972782255"> 0972782255</a>

									</span>
                            </li>
                            <li class="margin-left-20">
                                <i class="fa fa-map-marker"></i> <b>Địa chỉ</b>:
                                <span>
										299/3A Lý Thường Kiệt - P.15 - Q.Tân Bình - HCM									</span>

                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-6 col-md-3">

                        <ul class="list-inline f-right">
                                @if((Auth::user()))
                                    <li>
                                        <a href="{{route('site.login')}}"><i
                                                class="fa fa-user"></i> {{\Illuminate\Support\Facades\Auth::user()->name}}</a>

                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('site.login')}}"><i
                                                class="fa fa-user"></i> Đăng nhập</a>

                                    </li>
                                    <li><span>hoặc</span></li>
                                    <li><a href="{{route('site.register')}}">Đăng ký</a>

                                    </li>
                                @endif

                            <li class="li-search hidden">
                                <a href="site/javscrript_%3b.html">
                                    <i class="fa fa-search"></i></a>
                                <div class="dropdown topbar-dropdown hidden-md hidden-sm hidden-xs">
                                    <div class="content a-center">
                                        <div class="header_search search_form">
                                            <form class="input-group search-bar search_form"
                                                  action="https://shop1.jweb.com.vn/tim-kiem.html" method="get"
                                                  role="search">
                                                <input type="search" name="query" value="" placeholder="Tìm sản phẩm"
                                                       class="input-group-field st-default-search-input search-text"
                                                       autocomplete="off">
                                                <span class="input-group-btn">
															<button class="btn icon-fallback-text">
																<i class="fa fa-search"></i>
															</button>
														</span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-content clearfix a-center">
            <div class="row">
                <div class="col-xs-12 col-md-3 text-lg-left">
                    <div class="logo inline-block">
                        <a href="{{route('site.home')}}" class="logo-wrapper ">
                            <img src="/images/logo.png" data-lazyload="/images/logo.png"
                                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-lg-7 hidden-xs">
                    <div class="policy d-flex justify-content-around">
                        <div class="item-policy d-flex align-items-center">
                            <a href="#">
                                <img src="site/images/lazyload.svg" data-lazyload="/site/images/policy1.png"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                            <div class="info a-left">
                                <a href="#">Miễn phí vận chuyển</a>
                                <p>Bán kính 100 km</p>
                            </div>
                        </div>
                        <div class="item-policy d-flex align-items-center">
                            <a href="#">
                                <img src="site/images/lazyload.svg" data-lazyload="/site/images/policy2.png"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                            <div class="info a-left">
                                <a href="#">Hỗ trợ 24/7</a>
                                <p>Hotline: 0972782255</p>
                            </div>
                        </div>
                        <div class="item-policy d-flex align-items-center">
                            <a href="#">
                                <img src="site/images/lazyload.svg" data-lazyload="/site/images/policy3.png"
                                     alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng">
                            </a>
                            <div class="info a-left">
                                <a href="#"> Giờ làm việc</a>
                                <p>T2 - T7 Giờ hành chính</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-1 col-lg-2 hidden-sm hidden-xs">
                    <div class="top-cart-contain f-right ">
                        <div class="mini-cart text-xs-center">
                            <div class="heading-cart">
                                <a href="gio-hang.html">
                                    <div class="icon f-left relative">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cartCount count_item_pr hidden-lg" id="cart-total">0</span>
                                    </div>
                                    <div class="right-content hidden-md">
                                        <span class="label">Giỏ hàng</span> (
                                        <span class="cartCount2">0</span>)
                                    </div>
                                </a>
                            </div>
                            <div class="top-cart-content">
                                <ul id="cart-sidebar" class="mini-products-list count_li">
                                    <li class="list-item">
                                        <ul></ul>
                                    </li>
                                    <li class="action">
                                        <ul>
                                            <li class="li-fix-1">
                                                <div class="top-subtotal">
                                                    Tổng tiền thanh toán:
                                                    <span class="price"></span>
                                                </div>
                                            </li>
                                            <li class="li-fix-2" style="">
                                                <div class="actions">
                                                    <a href="gio-hang.html" class="btn btn-primary">
                                                        <span>Giỏ hàng</span>
                                                    </a>
                                                    <a href="gio-hang/thanh-toan.html"
                                                       class="btn btn-checkout btn-gray">
                                                        <span>Thanh toán</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-bar hidden-md hidden-lg">
            <img src="site/images/lazyload.svg" data-lazyload="https://shop1.jweb.com.vn/site/images/menu-bar.png"
                 alt="Cửa hàng bán hàng tiết kiệm và nhanh chóng"/>
        </div>
        <div class="icon-cart-mobile hidden-md hidden-lg f-left absolute"
             onclick="window.location.href='gio-hang.html'">
            <div class="icon relative">
                <i class="fa fa-shopping-bag"></i>
                <span class="cartCount count_item_pr">0</span>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="hidden-sm hidden-xs">
                <ul class="nav nav-left">
                    <li class="nav-item "><a class="nav-link" href="{{route('site.home')}}">Trang chủ</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Giới thiệu</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Dịch vụ</a></li>
                    <li class="nav-item "><a class="nav-link" href="san-pham.html">Sản phẩm</a></li>
                    <li class="nav-item "><a class="nav-link" href="tin-tuc.html">Tin tức</a></li>
                    <li class="nav-item "><a class="nav-link" href="lien-he.html">Liên hệ</a></li>
                </ul>

                <div class="menu-search f-right bbbbb">
                    <div class="header_search search_form">
                        <form class="input-group search-bar search_form"
                              action="https://shop1.jweb.com.vn/tim-kiem.html" method="get" role="search">
                            <input type="search" name="tu-khoa" value="" placeholder="Tìm sản phẩm"
                                   class="input-group-field st-default-search-input search-text auto-search"
                                   autocomplete="off">
                            <span class="input-group-btn">
										<button class="btn icon-fallback-text">
											<i class="fa fa-search"></i>
										</button>
									</span>
                        </form>
                        <div id='search_suggestion'>
                            <div id='search_top'>
                                <div id="product_results"></div>
                                <div id="article_results"></div>
                            </div>
                            <div id='search_bottom'>
                                <a class='show_more' href='#'>Hiển thị tất cả kết quả cho "<span></span>"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-lg hidden-md menu-offcanvas">

                <div class="head-menu clearfix">
                    <ul class="list-inline">

                        <li>
                            <a href="{{route('site.login')}}"><i class="fa fa-user"></i> Đăng nhập</a>

                        </li>
                        <li><span>hoặc</span></li>
                        <li><a href="{{route('site.register')}}">Đăng ký</a>
                        </li>

                        <li class="li-search">
                            <div class="header_search search_form">
                                <form class="input-group search-bar search_form"
                                      action="https://shop1.jweb.com.vn/tim-kiem.html" method="get" role="search">
                                    <input type="search" name="tu-khoa" value="" placeholder="Tìm sản phẩm"
                                           class="input-group-field st-default-search-input search-text"
                                           autocomplete="off">
                                    <span class="input-group-btn">
												<button class="btn icon-fallback-text">
													<i class="fa fa-search"></i>
												</button>
											</span>
                                </form>
                            </div>

                        </li>
                    </ul>
                    <div class="menuclose"><i class="fa fa-close"></i></div>
                </div>
                <ul id="nav-mobile" class="nav hidden-md hidden-lg">
                    <li class="h3">
                        MENU
                    </li>
                    <li class="nav-item "><a class="nav-link" href="index.html">Trang chủ</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Giới thiệu</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Dịch vụ</a></li>
                    <li class="nav-item "><a class="nav-link" href="san-pham.html">Sản phẩm</a></li>
                    <li class="nav-item "><a class="nav-link" href="tin-tuc.html">Tin tức</a></li>
                    <li class="nav-item "><a class="nav-link" href="lien-he.html">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>