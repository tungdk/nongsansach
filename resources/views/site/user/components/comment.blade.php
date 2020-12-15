<div class="account-title">
    Hoạt động bình luận
</div>
<hr>
<div class="account-body">
    @if($comments->count() > 0)
        @foreach ($comments as $cmt)
            <div class="col-md-2">
                <div class="account-body-avatar">
                    <img class="media-object"
                         src="{{ asset('uploads/products/'.$cmt->product->avatar)}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="account-body-item account-body-comment">
                    <p>{{$cmt->content}}</p>
                </div>
                <div class="account-body-item account-body-created_at">
                    <span class="time">{{$cmt->created_at}}</span>
                </div>
                <div class="account-body-item account-body-post-title">
                    <a href="">{{$cmt->product->name}}</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>

        @endforeach
{{--        {{$comments->links()}}--}}
    @else
        <div class="no-comment" style="margin-top: 30px">
            <p>Bạn chưa có hoạt động bình luận nào.</p>
        </div>
    @endif
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
                if (data.status == true) {
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    })
                } else {
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
