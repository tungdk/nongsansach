@extends('layouts.layout_site')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul id="navigation"> <!-- the navigation menu -->
                    <li><a href="{{route('site.user.account.profile')}}">Tài khoản</a>
                        <ul>
                            <li><a href="" data-url="{{route('site.user.account.profile')}}" class="change_data_view">Hồ
                                    sơ</a></li>
                            <li><a href="" data-url="{{route('site.user.account.address')}}" class="change_data_view">Địa
                                    chỉ</a></li>
                            <li><a href="" data-url="{{route('site.user.account.password')}}" class="change_data_view">Đổi
                                    mật khẩu</a></li>
                        </ul>
                    </li> <!-- các nút bấm -->
                    <li><a href="" data-url="{{route('site.user.purchase')}}" class="change_data_view">Đơn mua</a></li>
                </ul>
            </div>
            <div class="col-md-7">
                <div id="pageContent"> <!-- Nội dung sau khi sử lý xong sẽ được đưa vào vùng này -->
                    Hello, this is the default content
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
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
            }
        });
    </script>

@endsection
