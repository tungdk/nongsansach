<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gửi thông báo mã giảm giá</title>
    <style>
        .container{
            margin-left: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <p>
    <h3>Hello <b>{{$name}}</b>,</h3>
    Cảm ơn bạn trong thời gian qua đã tin tưởng và sử dụng dịch vụ tại cửa hàng chúng tôi. <br>

    <br>
    Nhằm mục đích tri ân khách hàng, chúng tôi gửi tặng bạn mã giảm giá: <b>{{$code}}</b>. <br><br>
    Giảm <b>{{$sale}} %</b> khi bạn mua hàng trên hệ thống của chúng tôi. <br><br>
    Mã giảm giá này có số lượt sử dụng: <b>{{$count}} lượt</b>. <br><br>
    <h5>Hãy nhanh tay lên vì số lượng có hạn.</h5>
    <i>Bạn còn chần chừ gì nữa mà hãy tới tham gia sự kiện của chúng tôi.</i>
    <a href="http://127.0.0.1:8000/">Đi tới cửa hàng</a>
    </p>
</div>

</body>
</html>
