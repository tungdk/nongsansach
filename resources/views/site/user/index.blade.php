@extends('layouts.layout_site')
@section('css')
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
@endsection
@section('content')

    @if((Auth::user()))
        <div class="section" style="margin-top: 50px">
            <div class="container">
                <div class="col-md-3 account-left">
                    <div class="info-account" style="text-align: center">
                        <div class="avatar-account">
                            <img src="
                            @if(isset($user->avatar))
                            {{ asset('uploads/imageAuthor/'.$user->avatar) }}
                            @else
                            {{ asset('images/no-avatar.jpg') }}
                            @endif
                                ">
                        </div>
                        <div class="name-account">
                            <p style="font-size: 20px"><b>{{$user->name}}</b></p>
                        </div>
                        <hr>
                        <div class="created_at">
                            <p>Tham gia từ <br>{{$user->created_at}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="list-action">
                        <ul>
                            <li class="item-action">
                                <a href="" data-url="{{route('site.user.account.profile')}}" class="change_data_view">Tài
                                    khoản
                                    của tôi</a>
                                <div class="list-action">
                                    <ul>
                                        <li class="item-action">
                                            <a href="" data-url="{{route('site.user.account.profile')}}"
                                               class="change_data_view">Hồ
                                                sơ</a>
                                        </li>
                                        <li class="item-action">
                                            <a href="" data-url="{{route('site.user.account.address')}}"
                                               class="change_data_view">Địa
                                                chỉ</a>
                                        </li>
                                        <li class="item-action">
                                            <a href="" data-url="{{route('site.user.account.password')}}"
                                               class="change_data_view">Đổi
                                                mật khẩu</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item-action">
                                <a href="" data-url="{{route('site.user.purchase')}}" class="change_data_view">Đơn
                                    mua</a>
                            </li>
                            <li class="item-action">
                                <a href="" data-url="{{route('site.user.comment')}}"
                                   class="change_data_view">Hoạt động bình luận</a>
                            </li>
                            <li class="item-action">
                                <a href="" data-url="{{route('site.user.favourite')}}"
                                   class="change_data_view">Sản phẩm yêu thích</a>
                            </li>
                            <li class="item-action">
                                <a href="{{route('site.logout')}}">Thoát</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 account-right" id="pageContent">
                    @if(session('msg'))
                        <div class="alert alert-warning">
                            {{session('msg')}}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(request()->is('user/account/profile'))
                        @include('site.user.components.profile')
                    @elseif(request()->is('user/account/address'))
                        @include('site.user.components.address')
                    @elseif(request()->is('user/account/password'))
                        @include('site.user.components.password')
                    @elseif(request()->is('user/comment'))
                        @include('site.user.components.comment')
                    @elseif(request()->is('user/favourite'))
                        @include('site.user.components.favourite')
                    @else
                        @include('site.user.components.purchase')
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="container" style="margin-top: 50px">
            <h3 style="color: red"><i>Bạn chưa đăng nhập</i></h3>
        </div>
    @endif
@endsection

{{--    @if((Auth::user()))--}}
{{--        <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-5">--}}
{{--                <ul id="navigation"> <!-- the navigation menu -->--}}
{{--                    <li><a href="{{route('site.user.account.profile')}}">Tài khoản</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="" data-url="{{route('site.user.account.profile')}}" class="change_data_view">Hồ--}}
{{--                                    sơ</a></li>--}}
{{--                            <li><a href="" data-url="{{route('site.user.account.address')}}" class="change_data_view">Địa--}}
{{--                                    chỉ</a></li>--}}
{{--                            <li><a href="" data-url="{{route('site.user.account.password')}}" class="change_data_view">Đổi--}}
{{--                                    mật khẩu</a></li>--}}
{{--                        </ul>--}}
{{--                    </li> <!-- các nút bấm -->--}}
{{--                    <li><a href="" data-url="{{route('site.user.purchase')}}" class="change_data_view">Đơn mua</a></li>--}}
{{--                    <li><a href="{{route('site.logout')}}">Đăng xuất</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-md-7">--}}
{{--                <div id="pageContent">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @else--}}
{{--        <div class="container" style="margin-top: 50px">--}}
{{--            <h3 style="color: red"><i>Bạn chưa đăng nhập</i></h3>--}}
{{--        </div>--}}
{{--    @endif--}}


@section('js')
    <script type="text/javascript">
        @if(!Auth::check())
        $(window).load(function () {
            openLoginModal();
        });
        @endif
    </script>
    <script>
        $(document).on('click', '.change_data_view', function (e) {
            e.preventDefault();
            let urlRequest = $(this).data('url');
            $.ajax({
                method: "GET",
                url: urlRequest,
                success: function (data) {
                    appendData(data.view);
                }
            })

            function appendData(data) {
                $('#pageContent').empty();
                $('#pageContent').append(data);
                processAjaxData(data, urlRequest)
            }
        });

        function processAjaxData(response, urlPath) {
            // document.getElementById("content").innerHTML = response.html;
            // document.title = response.pageTitle;
            window.history.pushState({"html": response.html, "pageTitle": response.pageTitle}, "", urlPath);
        }
    </script>


@endsection
