<footer class="footer">
    <div class="content">
        <div class="site-footer">
            <div class="footer-inner padding-top-35 pb-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>Liên hệ</span></h3>
                                <ul class="list-menu list-showroom">
                                    <li style="padding-left: 0;">
                                        <p>{{ $setting->slogan ?? "" }}</p>
                                    </li>

                                    <li class="clearfix"><i class="block_icon fa fa-map-marker"></i>
                                        <p>{{ $setting->address ?? ""}}</p>
                                    </li>

                                    <li class="clearfix"><i class="block_icon fa fa-phone"></i>

                                        <a href="tel:{{ $setting->phone ?? "" }}">{{ $setting->phone ?? ""}}</a>
                                        <p>{{ $setting->time_work ?? ""}}</p>
                                    </li>
                                    <li class="clearfix"><i class="block_icon fa fa-envelope"></i>

                                        <a href="mailto: {{ $setting->email ?? ""}}"> {{ $setting->email ?? "" }}</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>Danh mục</span></h3>
                                <ul class="list-menu list-blogs">
                                    @foreach($categories as $key => $cate)
                                        @if($key < 6)
                                            <li>
                                                <a href="{{ route('site.category.detail', ['id'=>$cate->id, 'slug'=>$cate->slug]) }}">{{ $cate->name }}</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('site.category.index')}}">Xem thêm >></a>
                                            </li>
                                            @break
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="margin-bottom-20 hastog"><span>Kết nối với chúng tôi</span></h3>
                                <div class="list-menu">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href={{$setting->fanpage ?? ""}};tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="262px" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3 class="hastog"><span>Đăng ký nhận thông tin</span></h3>
                                <div class="list-menu">
                                    <form action="">
                                        <input type="email" name="email_subscribe" id="email_subscribe" placeholder="Email..." required style="width: 280px; border-radius: 15px;">
                                        <div>
                                            <span class="error" style="color: red" hidden></span>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="subscribe()" style="border-radius: 20px">Đăng ký</button>
                                    </form>
                                    <div class="footer__widget__social" style="color: white; font-size: 30px">
                                        <a href="https://facebook.com/nongsansach" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://instagram.com/nongsansach" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <a href="https://twitter.com/nongsansach" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="https://pinterest.com/nongsansach" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright clearfix">
                <div class="container">
                    <div class="inner clearfix">
                        <div class="row">
                            <div class="col-md-4 text-center text-lg-left">
                                © Bản quyền thuộc về <b>Đinh Khắc Tùng</b>
                            </div>
                        </div>
                    </div>

                    <div class="back-to-top">
                        <i class="fa fa-angle-up"></i>
                    </div>

                    <a href="tel:{{ $setting->phone ?? ""}}"
                       class="suntory-alo-phone bottom-left  suntory-alo-green " id="suntory-alo-phoneIcon">
                        <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
                    </a>

                </div>
            </div>
        </div>

    </div>
</footer>
