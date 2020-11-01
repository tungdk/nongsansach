<form role="form" action="" method="POST">
    @csrf
    <div class="col-md-12">
        <table class="table-striped" style="width:100%; resize:both" >
        <thead>
        <tr>
            <th style="width: 30%">Mạng xã hội</th>
            <th style="width: 70%">Liên kết</th>
        </tr>
        </thead>
        <tbody>
        <tr style="margin-top: 2px">
            <td>Facebook</td>
            <td><input type="url" class="form-control" name="facebook" value="{{$facebook->config_value ?? ''}}" placeholder="" style="width: 100%"></td>
        </tr>
        <tr style="margin-top: 2px">
            <td>Youtube</td>
            <td><input type="url" class="form-control" name="youtube" value="{{$youtube->config_value ?? ''}}" style="width: 100%"></td>
        </tr>
        <tr style="margin-top: 2px">
            <td>Instagram</td>
            <td><input type="url" class="form-control" name="instagram" value="{{$instagram->config_value ?? ''}}" style="width: 100%"></td>
        </tr>
        <tr style="margin-top: 2px">
            <td>Twitter</td>
            <td><input type="url" class="form-control" name="twitter" value="{{$twitter->config_value ?? ''}}" style="width: 100%"></td>
        </tr>
        <tr style="margin-top: 2px">
            <td>Google+</td>
            <td><input type="url" class="form-control" name="google" value="{{$google->config_value ?? ''}}" style="width: 100%"></td>
        </tr>
        <tr style="margin-top: 2px">
            <td>Github</td>
            <td><input type="url" class="form-control" name="github" value="{{$github->config_value ?? ''}}" style="width: 100%"></td>
        </tr>
        </tbody>
    </table>
    </div>
    <div class="col-md-12">
        <div class="box-footer text-center">
            <button type="submit" class="btn btn-success">Lưu dữ liệu <i class="fa fa-save"></i></button>
        </div>
    </div>
</form>
