@extends('layouts.layout_site')
@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">

                        <li class="home">
                            <a itemprop="url" href="https://dualeo-x.bizwebvietnam.net/" ><span itemprop="title">Trang chủ</span></a>
                            <span> <i class="fa fa-angle-right"></i> </span>
                        </li>

                        <li><strong itemprop="title">Liên hệ</strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container container-fix-hd contact margin-bottom-30">
        <div class="box-heading hidden relative">
            <h1 class="title-head">Liên hệ</h1>
        </div>
        <h2 class="title-head"><span> Gửi tin nhắn cho chúng tôi</span> <b style="color: green">{{session('success')?? ''}}</b></h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <div id="login">
                            <form action="{{}}" id="contact" method="post">
                                @csrf
                                <p id="errorFills" style="margin-bottom:10px; color: red;"></p>
                                <div id="emtry_contact" class="form-signup form_contact clearfix">
                                    <div class="row row-8Gutter">
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <input type="text" placeholder="Họ tên*" name="name" id="name" class="form-control  form-control-lg" required value="{{old('name')}}">
                                            </fieldset>
                                            @if($errors->first('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <input type="tel" placeholder="Điện thoại*" name="phone" class="form-control form-control-lg fixnumber" required value="{{old('phone')}}">
                                            </fieldset>
                                            @if($errors->first('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <input type="email" placeholder="Email*" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" id="email" class="form-control form-control-lg" required value="{{old('email')}}">
                                            </fieldset>
                                            @if($errors->first('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <textarea placeholder="Nhập nội dung*" id="message" name="message" class="form-control form-control-lg" rows="6" Required>{{old('message')}}</textarea>
                                    </fieldset>
                                    @if($errors->first('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                    <div>
                                        <button tyle="summit" class="btn btn-primary" style="padding:0 40px;text-transform: inherit;">Gửi liên hệ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-box-info clearfix margin-bottom-30">
                            <div>

                                <div class="item">

                                    <div><i class="fa fa-map-marker"></i>
                                        <div class="info">
                                            <label>Địa chỉ liên hệ</label>
                                            Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch an toàn cho sức khỏe con người                                    </div>
                                    </div>

                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="info">
                                            <label>Số điện thoại</label>
                                            <a href="tel:0972782255">0972782255</a>
                                            <p>Thứ 2 - Chủ nhật: 9:00 - 18:00</p>
                                        </div>
                                    </div>

                                    <div><i class="fa fa-envelope"></i>
                                        <div class="info">
                                            <label>Email</label>
                                            <a href="mailto:sale@jweb.vn">sale@jweb.vn
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="box-maps margin-bottom-30">
                    <div class="iFrameMap">
                        <div class="google-map">
                            <div id="contact_map" class="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <!-- Plugin JS -->
    <script src="themes/default/assets/js/api.jquery.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/bootstrap.min.js"></script>
    <script src="themes/default/assets/js/lightslider.min.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/lightgallery-all.min.js" type="text/javascript"></script>
    <script src="themes/default/assets/js/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Main JS -->
    <script src="themes/default/assets/js/appear.js"></script>
    <script src="themes/default/assets/js/dl_main.js" type="text/javascript"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
@endsection


