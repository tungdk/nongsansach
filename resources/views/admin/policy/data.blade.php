<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th style="width: 5%">#</th>
        <th>Tên chính sách</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($policies))
        @php $i=1; @endphp
        @foreach($policies as $policy)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $policy->name }}</td>
                <td>{{ $policy->created_at }}</td>
                <td>{{ $policy->updated_at }}</td>
                <td>
                    @if($policy->status == 1)
                        <a href="#"
                           class="label label-info" onclick="change_status({{$policy->id}}); return false">Hiển thị</a>
                    @else
                        <a href="#"
                           class="label label-default" onclick="change_status({{$policy->id}}); return false">Ẩn</a>
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.policy.edit', $policy->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                        Sửa</a>
                    <a href="#" class="btn btn-xs btn-danger" onclick="delete_policy({{$policy->id}}); return false"><i class="fa fa-trash"></i> Xoá</a>
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
