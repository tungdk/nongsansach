<table id="example1" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="width: 5%">#</th>
        <th style="width: 10%">Khách hàng</th>
        <th style="width: 30%">Bình luận</th>
        <th style="width: 30%">Sản phẩm</th>
        <th style="width: 10%">Ngày tạo</th>
        <th style="width: 10%">Hiện trang chủ</th>
        <th style="width: 10%">Trạng thái</th>
        <th style="width: 20%">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($comments))
        @php $i = 1; @endphp
        @foreach($comments as $cmt)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $cmt->user->name }}</td>
                <td>
                    <ul>
                        <li>Đánh giá: {{ $cmt->rating }}</li>
                        <li>Nội dung: {{ $cmt->content }}</li>
                    </ul>
                </td>
                <td>{{ $cmt->product->name }}</td>
                <td>{{ $cmt->created_at }}</td>
                <td style="text-align: center">
                    <input type="checkbox" {{ $cmt->show_home==1 ? 'checked' : ''}} name="checkbox_showhome"
                           onclick="change_show_home({{ $cmt->id }})" style="width: 1.4em; height: 1.4em">

                </td>
                <td>
                    @if($cmt->status == 1)
                        <a href="#" onclick="change_status({{$cmt->id}}); return false"
                           class="label label-info">Hiển thị</a>
                    @else
                        <a href="#" onclick="change_status({{$cmt->id}}); return false"
                           class="label label-default">Ẩn</a>
                    @endif
                </td>
                <td>
                    <a href="#" onclick="delete_item({{$cmt->id}}); return false"
                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                </td>

            </tr>
        @endforeach
    @endif

    </tbody>

</table>
<script>
    $(function () {
        $('#example1').DataTable();
    })
</script>
