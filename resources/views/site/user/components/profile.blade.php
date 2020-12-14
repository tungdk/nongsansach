<div class="account-title">
    Tài khoản của tôi
</div>

<p style="color:green; dislay:none;" class="error successChangeInfo"></p>
<hr>
<div class="account-body">
    <form method="POST" action="{{URL::to('user/account')}}" enctype="multipart/form-data">
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
                    <div class="label_fill">Giới thiệu</div>
                    <div class="ctn_fill">
                                    <textarea class="form-control" id="story" placeholder="Giới thiệu về bản thân"
                                              rows="3" name="story"
                                    >{{$user->story}}</textarea>
                    </div>
                </div>
                <div class="item-fill-user">
                    <div class="label_fill">Liên hệ</div>
                    <div class="ctn_fill">
                        <input type="text" class="form-control" id="contact"
                               value="{{$user->contact}}" placeholder="Liên hệ" name="contact"
                        >
                    </div>
                </div>
            </div>
            <div class="button-saveaccount">
                <button class="btn btn-primary" type="submit" id="submit_changeInfo">Lưu</button>
            </div>

        </div>
    </form>
</div>
