$(document).on('click', '.add_to_favourite', function (e) {
    e.preventDefault();
    let urlRequest = $(this).data('url');
    $.ajax({
        type: 'GET',
        url: urlRequest,
        success: function (data) {
            if (data.status == true) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data.messages,
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: data.messages,
                })
            }
        },
        error: function (data) {
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Bạn chưa đăng nhập',
            // })
                openLoginModal();
        }
    });

});
