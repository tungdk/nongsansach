<div class="account-title">
    Đổi mật khẩu
</div>

<p style="color:green; dislay:none;" class="error successChangeInfo"></p>
<hr>
<div class="account-body">
    <form method="POST" action="" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="info_user">
            <div class="item-fill-user">
                <div class="item-fill-user">
                    <div class="label_fill">Mật khẩu cũ</div>
                    <div class="ctn_fill">
                        <input type="password" class="form-control" id="password_old" placeholder="Mật khẩu cũ" name="phone">
                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Mật khẩu mới</div>
                    <div class="ctn_fill">
                        <input type="password" class="form-control" id="password_new" placeholder="Mật khẩu mới" name="phone">
                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Nhập lại mật khẩu mới</div>
                    <div class="ctn_fill">
                        <input type="password" class="form-control" id="password_confirm" placeholder="Nhập lại mật khẩu mới" name="phone">
                    </div>
                </div>
            </div>
            <div class="button-saveaccount">
                <button class="btn btn-primary" type="button" id="submit_changeInfo" onclick="save_change_password()">Lưu
                </button>
            </div>

        </div>
    </form>
</div>
<script>
    function save_change_password() {
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
            type: 'POST',
            url: '{{ route('site.user.account.change_password') }}',
            data: {
                'password_old': $('#password_old').val(),
                'password_new': $('#password_new').val(),
                'password_confirm': $('#password_confirm').val()
            },
            success: function (data) {
                if(data.status == true){
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    })
                }
                else {
                    Toast.fire({
                        icon: 'error',
                        title: data.message
                    })
                }

            },
            error: function (data) {
                Toast.fire({
                    icon: 'error',
                    title: 'Có lỗi xảy ra'
                })
            }
        });
    }
</script>
