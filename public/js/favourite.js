$(document).on('click', '.add_to_favourite', function (e) {
    e.preventDefault();
    let urlRequest = $(this).data('url');
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    $.ajax({
        type: 'GET',
        url: urlRequest,
        success: function (data) {
            if (data.status == true) {

                Toast.fire({
                    icon: 'success',
                    title: data.messages
                })
            } else {
                // Swal.fire({
                //     icon: 'error',
                //     title: data.messages,
                // })
                Toast.fire({
                    icon: 'error',
                    title: data.messages
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
