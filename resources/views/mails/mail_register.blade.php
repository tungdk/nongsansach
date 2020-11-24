<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Xác thực tài khoản qua email của bạn</h2>

<div>
    Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi. <br>
    Hay click vào đường dẫn để xác nhận địa chỉ email <br>
    {{ URL::to('register/verify/' . $code) }}<br/>

</div>

</body>
</html>
