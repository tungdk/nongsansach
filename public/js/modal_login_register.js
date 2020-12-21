/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 *
 */
function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Đăng ký');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Đăng nhập');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

// function loginAjax(e){
function submit_Login(url) {
    $('.error').text('');
    let email = $('#email').val();
    let password = $('#password').val();

    // if (!email) {
    //     $('.errorEmail').show().text('Bạn chưa điền email');
    //     $(':input[type="submit"]').prop('disabled', false);
    // }
    // if (!password) {
    //     $('.errorPassword').show().text('Bạn chưa điền mật khẩu');
    //     $(':input[type="submit"]').prop('disabled', false);
    // }
    if (email && password) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'email': email,
                'password': password
            }
            ,
            success: function (data) {
                location.reload();
            },
            error:function(data){
                $('.error').text(data.responseJSON.message);
            }
        });
    }
}

//  shakeModal();
// }
$('#submit_Register').click(function (e) {
    $(':input[type="submit"]').prop('disabled', true);
    $name = $('#regis-name').val();
    $email = $('#regis-email').val();
    $password = $('#regis-password').val();
    $confirm_password = $('#regis-password_confirmation').val();
    $('.error').hide();
    if (!$name) {
        $('.errorName').show().text('Bạn chưa điền tên');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if (!$email) {
        $('.errorEmail').show().text('Bạn chưa điền email');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if (!$password) {
        $('.errorPassword').show().text('Bạn chưa điền mật khẩu');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if (!$confirm_password) {
        $('.errorPasswordConfirm').show().text('Bạn chưa điền nhập lại mật khẩu');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if ($password != $confirm_password) {
        $('.errorPasswordConfirm').show().text('Nhập lại mật khẩu không chính xác');
        $(':input[type="submit"]').prop('disabled', false);
    }
    if ($name && $email && $password && $confirm_password == $password) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "register",
            data: {
                'name': $name,
                'email': $email,
                'password': $password,
                'confirm_password': $confirm_password
            },
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $(':input[type="submit"]').prop('disabled', false);
                    $('.error').hide();
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.confirm_password != undefined) {
                        $('.errorPasswordConfirm').show().text(data.message.confirm_password[0]);
                    }
                    if (data.message.errorRegister != undefined) {
                        $('.errorRegister').show().text(data.message.errorRegister[0]);
                    }

                } else {
                    // location.reload();
                    alert('Đăng ký thành công. Vui lòng đăng nhập');
                    openLoginModal();
                }
            }
        });
    }
})
// function shakeModal(){
//     $('#loginModal .modal-dialog').addClass('shake');
//              $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
//              $('input[type="password"]').val('');
//              setTimeout( function(){
//                 $('#loginModal .modal-dialog').removeClass('shake');
//     }, 1000 );
// }

$('#closemodal').click(function () {
    $('#loginModal').modal('hide');
});
