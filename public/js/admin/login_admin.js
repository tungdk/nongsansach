$('#submit_Login').click(function (e) {
    $(':input[type="submit"]').prop('disabled', true);

    $email = $('#email').val();
    $password = $('#password').val();
    $('.error').hide();
    if (!$email) {
        $('.errorEmail').show().text('Bạn chưa điền email');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if (!$password) {
        $('.errorPassword').show().text('Bạn chưa điền mật khẩu');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if ($email && $password) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/admin/login",
            data: {
                'email': $email,
                'password': $password,
            },
            success: function (data) {
                if (data.error == true) {
                    $(':input[type="submit"]').prop('disabled', false);
                    $('.error').hide();
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.errorLogin != undefined) {
                        $('.errorLogin').show().text(data.message.errorLogin[0]);
                    }


                }
                else if(data.error == false){
                    window.location.reload();
                }
                else {
                    // location.reload();
                    // window.location.reload();
                    console.log('lỗi rồi');
                }
            },
            error: function (data){
                console.log('Lỗi gì đó');
            }
        });
    }
})
