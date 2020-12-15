<div class="account-title">
    Tài khoản của tôi
</div>

<p style="color:green; dislay:none;" class="error successChangeInfo"></p>
<hr>
<div class="account-body">
    <form method="POST" action="" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="info_user">
            <div class="item-fill-user">
                <div class="label_fill">Đổi ảnh đại diện</div>
                <div class="ctn_fill">
                    <input type="file" class="form-control" name="avatar" placeholder="Ảnh đại diện"
                           value=""
                           id="avatar">
                    <div class="show-progress">

                    </div>
                    <div class="row justify-content-center" id="showImage">

                        <p style="color:red; dislay:none;" class="error errorAvatar"></p>

                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Họ và tên</div>
                    <div class="ctn_fill">
                        <input type="text" id="name" class="form-control" value="{{$user->name}}"
                               placeholder="Họ và tên" name="name"
                               required="required">
                        <p style="color:red; dislay:none;" class="error errorName"></p>

                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Email</div>
                    <div class="ctn_fill">
                        {{$user->email}}
                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Số điện thoại</div>
                    <div class="ctn_fill">
                        <input type="text" class="form-control" id="phone"
                               value="{{$user->phone}}" placeholder="Điện thoại" name="phone"
                        >
                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Địa chỉ</div>
                    <div class="ctn_fill">
                        <textarea type="text" class="form-control" id="address"
                               placeholder="Địa chỉ" name="address"
                        >{{$user->address}}</textarea>
                    </div>
                </div>
            </div>
            <div class="button-saveaccount">
                <button class="btn btn-primary" type="button" id="submit_changeInfo" onclick="save_change_info()">Lưu
                </button>
            </div>

        </div>
    </form>
</div>
<script>
    function save_change_info() {
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
            url: '{{ route('site.user.account.update_profile') }}',
            data: {
                'name': $('#name').val(),
                'phone': $('#phone').val(),
                'address': $('#address').val()
            },
            success: function (data) {
                Toast.fire({
                    icon: 'success',
                    title: data.message
                })
            },
            error: function (data) {
                Toast.fire({
                    icon: 'error',
                    title: data.message
                })
            }
        });
    }
</script>
