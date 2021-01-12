<div class="account-title">
    Sản phẩm yêu thích
</div>
<hr>
<div class="account-body">
    @if($favourites->count() > 0)
        @foreach ($favourites as $favorite)
            <div class="col-md-2">
                <div class="account-body-avatar">
                    <img class="media-object"
                         src="{{ asset('uploads/products/'.$favorite->product->avatar)}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="account-body-item account-body-comment">
                    <p>{{$favorite->content}}</p>
                </div>
                <div class="account-body-item account-body-post-title">
                    <a href="">{{$favorite->product->name}}</a>
                </div>
                <div class="account-body-item account-body-created_at">
                    <span class="time">{{$favorite->created_at}}</span>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-danger" onclick="delete_favourite({{$favorite->id}})">Xoá</button>
            </div>
            <div class="clearfix"></div>
            <hr>

        @endforeach
            <div class="clearfix m_xs_bottom_30">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                    <!--pagination-->
                    <p style="vertical-align: top;padding-right: 10px"
                       class="d_inline_middle f_size_medium">{{ $favourites->links('vendor/pagination/bootstrap-4') }} </p>
                </div>

            </div>
    @else
        <div class="no-comment" style="margin-top: 30px">
            <p>Bạn chưa có sản phẩm yêu thích nào.</p>
        </div>
    @endif
</div>
<script>
    function delete_favourite(id) {
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
            url: '{{ route('site.user.delete_favourite') }}',
            data: {
                'id': id
            },
            success: function (data) {
                if (data.status == true) {
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    })
                    appendData(data.view);
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
    function appendData(data) {
        $('#pageContent').empty();
        $('#pageContent').append(data);
        processAjaxData(data, urlRequest)
    }
</script>
