function send_mail_information(id, token){
    const url = new URL(window.location.href);
    Swal.fire({
        title: 'Bạn thực sự muốn gửi mail',
        text: "Quá trình gửi mail có thể sẽ diễn ra trong 5 - 10 phút",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method: "post",
                url: url.pathname + "/sendMail",
                data: {
                    _token: token,
                    'id': id,
                },
                success: function (data) {
                    document.getElementById("checkbox_"+id).checked = true;
                    Swal.fire(
                        "Thư đang được gửi đi cho khách hàng",
                        "",
                        "success"
                    )
                }
            })
        }
    })
}
