@if(count($comments) > 0)
    @foreach($comments as $cmt)
        <div class="row">
            <div class="col-md-1">
                <img
                    src="@if($cmt->user->avatar) {{asset('uploads/users/'.$cmt->user->avatar)}} @else {{asset('images/no-avatar.jpg')}} @endif"
                    alt="{{$cmt->user->name}}"
                    style="width: 55px; border-radius:50%; -moz-border-radius:50%; -webkit-border-radius:50%;">
            </div>
            <div class="col-md-11">
                {{ $cmt->user->name }} <br>
                <div class="" style="font-size: 7px; color: orange" disabled>
                    @for($i=1; $i<=5; $i++)
                        @if($i <= $cmt->rating)
                            <span class="fa fa-star fa-2x" data-rating="1"></span>
                        @else
                            <span class="fa fa-star-o fa-2x" data-rating="1"></span>
                        @endif
                    @endfor
                </div>
                <div class="comment-content" style="font-size: 15px">
                    {{ $cmt->content }}
                </div>
                <div style="color: rgba(0,0,0,.54); ">
                    {{ $cmt->created_at }}
                </div>
            </div>
        </div>
        <hr>
    @endforeach

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
        <!--pagination-->
        <p style="vertical-align: top;padding-right: 10px"
           class="d_inline_middle f_size_medium"> {{ $comments->links('site/partials/paginate') }}</p>
    </div>
@else
    <p>Không có đánh giá nào cho sản phẩm này.</p>
@endif
