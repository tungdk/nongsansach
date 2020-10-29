<form role="form" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-8">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin cơ bản</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tiêu đề <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Tiêu đề bài viết"
                           value="{{ $post->title ?? old('name') }}">
                    @if ($errors->first('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả ngắn <span class="text-danger">(*)</span></label>
                    <textarea class="form-control" name="description" placeholder="Mô tả ngắn" rows="4">{{ $post->description ?? '' }}</textarea>
                    @if ($errors->first('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Chọn danh mục <span class="text-danger">(*)</span></label>
                    <select name="post_category_id" id="" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @if(isset($postcates))
                            @foreach ($postcates as $postcate)
                                <option
                                    value="{{$postcate->id}}" {{ $post->post_category_id ?? 0 == $postcate->id ? "selected='selected'" : ""}}>
                                    {{$postcate->name}}</option>
                            @endforeach
                        @else
                        @endif
                    </select>
                    @if ($errors->first('category_id'))
                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                    @endif
                </div>


            </div>
        </div>
        {{-- <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông số khác</h3>
            </div>
            <div class="box-body">

            </div>
        </div> --}}
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Nội dung</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Chi tiết bài viết</label>
                    <textarea name="content" id="idContent" cols="5" rows="2"
                              class="form-control">{{ $post->content ?? '' }}</textarea>
                    @if ($errors->first('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Ảnh nền</h3>
            </div>
            <div class="box-body block-images">
                <div style="margin-bottom: 10px">
                    <img src="{{ isset($post->thumbnail) ? pare_url_file($post->thumbnail) : '/images/no-image.jpg' }}" class="img-thumbnail"
                         onerror="this.onerror=null;this.src='images/no-image.jpg'" alt=""
                         style="width:200px; height:200px">
                </div>
                <div style="position: relative;">
                    <a href="javascript:;" class="btn btn-primary">Choose File....
                        <input type="file"
                               style="position:absolute;z-index:2;top:0;left:0;opacity:0;background-color:transparent"
                               name="thumbnail" size="40" class="js-upload">
                    </a>
                    &nbsp;
                    <span class="label label-info" id="upload-file-info"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 clearfix">
        <div class="box-footer text-center">
            <div class="col-sm-12">
                <a href="{{route('admin.post.index')}}" class="btn btn-default"> <i class="fa fa-undo"></i> Quay lại</a>
                <button type="submit" class="btn btn-success">{{ isset($post) ? "Cập nhật" :"Thêm mới"}} <i
                        class="fa fa-save"></i></button>
            </div>
        </div>
    </div>
</form>
<script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        entities_latin: false
    };
    CKEDITOR.replace('idContent', options);

</script>
