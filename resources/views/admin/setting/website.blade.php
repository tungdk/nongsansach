<form role="form" action="" method="POST">
    @csrf
    <div class="col-md-12">
        <div class="form-group {{ $errors->first('config_key' ? 'has-danger' : '') }}">
            <label for="name">Tên cài đặt <span class="text-danger">(*)</span></label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên cài đặt" value="{{$name->config_value}}">
            @if($errors->first('config_key'))
                <span class="text-danger">{{ $errors->first('config_key') }}</span>
            @endif
        </div>
        <!-- /.box -->
        <div class="form-group {{ $errors->first('config_key' ? 'has-danger' : '') }}">
            <label for="name">Mô tả website <span class="text-danger">(*)</span></label>
            <textarea class="form-control" name="description" placeholder="Nhập mô tả website" >{{$description->config_value}}</textarea>
            @if($errors->first('config_key'))
                <span class="text-danger">{{ $errors->first('config_key') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Logo website <span class="text-danger">(*)</span></label>
            <div class="box-body block-images">
                <div style="margin-bottom: 10px">
                    <img src="{{ isset($logo) ? pare_url_file($logo->config_value) : '/images/no-image.jpg' }}" class="img-thumbnail"
                         onerror="this.onerror=null;this.src='images/no-image.jpg'" alt=""
                         style="width:200px; height:200px">
                </div>
                <div style="position: relative;">
                    <a href="javascript:;" class="btn btn-primary">Choose File....
                        <input type="file"
                               style="position:absolute;z-index:2;top:0;left:0;opacity:0;background-color:transparent"
                               name="avatar" size="40" class="js-upload">
                    </a>
                    &nbsp;
                    <span class="label label-info" id="upload-file-info"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Favicon website <span class="text-danger">(*)</span></label>
            <div class="box-body block-images">
                <div style="margin-bottom: 10px">
                    <img src="{{ isset($favicon) ? pare_url_file($favicon->config_value) : '/images/no-image.jpg' }}" class="img-thumbnail"
                         onerror="this.onerror=null;this.src='images/no-image.jpg'" alt=""
                         style="width:200px; height:200px">
                </div>
                <div style="position: relative;">
                    <a href="javascript:;" class="btn btn-primary">Choose File....
                        <input type="file"
                               style="position:absolute;z-index:2;top:0;left:0;opacity:0;background-color:transparent"
                               name="avatar" size="40" class="js-upload">
                    </a>
                    &nbsp;
                    <span class="label label-info" id="upload-file-info"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-footer text-center">
            <button type="submit" class="btn btn-success">Lưu dữ liệu <i class="fa fa-save"></i></button>
        </div>
    </div>
</form>
