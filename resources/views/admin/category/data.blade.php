<table id="example1" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="width: 5%">#</th>
        {{--                        <th style="width: 5%">Mã</th>--}}
        <th style="width: 30%">Tên danh mục</th>
        <th style="width: 30%">Ngày tạo</th>
        <th style="width: 10%">Trạng thái</th>
        <th style="width: 20%">Thao tác</th>
    </tr>
    </thead>
    <tbody class="load-data">
    @if(isset($categories))
        @php $i = 1;@endphp
        @foreach($categories as $cate)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $cate->name }}</td>
                <td>{{ $cate->created_at }}</td>
                <td>
                    @if($cate->status == 1)
                        <a href="#" onclick="change_status({{ $cate->id }}); return false;"
                           class="label label-info">Hiển thị</a>
                    @else
                        <a href="#" onclick="change_status({{ $cate->id }}); return false;"
                           class="label label-default">Ẩn</a>
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.category.edit', $cate->id)}}"
                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                        Sửa</a>
                    <a href="#" onclick="delete_item({{ $cate->id }}); return false;"
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



