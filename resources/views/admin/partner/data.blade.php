<table id="example1" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="width: 5%">#</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Ngày tạo</th>
        <th>Trang thái</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($partners))
        @php $i = 1; @endphp
        @foreach($partners as $partner)
            <tr>

                <td>{{ $i++ }}</td>
                <td>{{ $partner->name }}</td>
                <td><img src="{{ asset('uploads/partners/'.$partner->logo) }}" alt="{{ $partner->name }}" style="width: 150px"></td>
                <td>{{ $partner->created_at }}</td>
                <td>
                    @if($partner->status == 1)
                        <a href="#" onclick="change_status({{  $partner->id }}); return false;"
                           class="label label-info">Hiển thị</a>
                    @else
                        <a href="#" onclick="change_status({{  $partner->id }}); return false;"
                           class="label label-default">Ẩn</a>
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.partner.edit', $partner->id)}}"
                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                        Sửa</a>
                    <a href="#" onclick="delete_item({{ $partner->id }}); return false;"
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
