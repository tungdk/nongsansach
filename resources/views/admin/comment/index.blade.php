@extends('layouts.layout_admin')
@section('title', 'Bình luận')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý bình luận
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.comment.index')}}">Bình luận</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 15%">Khách hàng</th>
                        <th style="width: 30%">Bình luận</th>
                        <th style="width: 30%">Sản phẩm</th>
                        <th style="width: 10%">Ngày tạo</th>
                        <th style="width: 10%">Hiện trang chủ</th>
                        <th style="width: 10%">Trạng thái</th>
{{--                        <th style="width: 20%">Thao tác</th>--}}
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
                                        <li>Sao: {{ $cmt->rating }}</li>
                                        <li>Nội dung: {{ $cmt->content }}</li>
                                    </ul>
                                </td>
                                <td>{{ $cmt->product->name }}</td>
                                <td>{{ $cmt->created_at }}</td>
                                <td style="text-align: center">
                                    <input type="checkbox" {{ $cmt->show_home==1 ? 'checked' : ''}} name="checkbox_showhome" onclick="change_show_home({{ $cmt->id }})">

                                </td>
                                <td>
                                    @if($cmt->status == 1)
                                        <a href="{{route('admin.comment.active', $cmt->id)}}"
                                           class="label label-info">Hiển thị</a>
                                    @else
                                        <a href="{{route('admin.comment.active', $cmt->id)}}"
                                           class="label label-default">Ẩn</a>
                                    @endif
                                </td>
{{--                                <td>--}}
{{--                                    <a href="{{route('admin.comment.edit', $cmt->id)}}"--}}
{{--                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>--}}
{{--                                        Sửa</a>--}}
{{--                                    <a href="{{route('admin.comment.delete', $cmt->id)}}"--}}
{{--                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>--}}
{{--                                </td>--}}

                            </tr>
                        @endforeach
                    @endif

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('js')
    <script>
        function change_show_home(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
               type: 'post',
               url: '{{ route('admin.comment.show_home') }}',
                data: {
                    'id': id
                },
                success:function (data){
                    toastr.success(data.message, 'Thành công')
                },
                error:function (data){
                    toastr.error("Có lỗi xảy ra, liên hệ quản trị viên", 'Thất bại')

                }
            });
        }
    </script>
@endsection
