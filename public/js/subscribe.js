function subscribe() {
    $('.error').text("");
    $('.error').hide();
    let email = $('#email_subscribe').val();
    if(email == ''){
        $('.error').show();
        $('.error').text("Bạn chưa nhập email");
        return false;
    }
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    if (atposition < 1 || dotposition < (atposition + 2) || (dotposition + 2) >= email.length) {
        $('.error').show();
        $('.error').text("Vui lòng nhập đúng định dang email.");
        return false;
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'subscribe',
        data: {
            'email': email
        },
        success: function (data) {
            if (data.status == true) {
                document.getElementById('email_subscribe').value = '';
                Swal.fire({
                    icon: 'success',
                    title: 'Cảm ơn bạn đã đăng ký',
                    text: 'Chúng tôi sẽ gửi thông tin qua email của bạn',
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: data.message,
                })
            }
        },
        error: function (data) {
            Swal.fire({
                icon: 'error',
                title: 'Có lỗi xảy ra',
            })
        }
    });
}
