function subscribe() {
    $email = $('#email_subscribe').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'subscribe',
        data: {
            'email': $email
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
