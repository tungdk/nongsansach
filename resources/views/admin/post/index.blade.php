@extends('layouts.layout_admin')
@section('title', 'Bài viết')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.post.index')}}">Bài viết</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.post.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
                <h3 class="box-title" style="float: right">
                    <a href="{{route('admin.post.index')}}" class="btn btn-success">Danh sách <i class="fa fa-list"></i></a>
                    <a href="{{route('admin.post.trash')}}" class="btn btn-default">Thùng rác <i
                            class="fa fa-trash"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>Tiêu đề</th>
                                <th>Ảnh</th>
                                <th>Danh mục</th>
                                <th>Lượt xem</th>
                                <th>Ngày đăng</th>
                                <th>Trạng thái</th>
                                <th>Gửi mail</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($posts))
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <img src="{{pare_url_file($post->thumbnail) }}"
                                                 style="width: 80px; height: 80px" alt="">
                                        </td>
                                        <td>{{ $post->postcate->name }}</td>
                                        <td>{{ $post->views }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            @if($post->status == 1)
                                                <a href="{{route('admin.post.active', $post->id)}}"
                                                   class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.post.active', $post->id)}}"
                                                   class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <input type="checkbox" {{$post->send_mail == 1 ? 'checked' : ''}} id="checkbox_{{$post->id}}" onclick="return false;">
                                        </td>
                                        <td>
                                            <a href="{{route('admin.post.edit', $post->id)}}"
                                               class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.post.active', $post->id)}}"
                                               class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                            <a href="{{route('admin.post.active', $post->id)}}"
                                               class="btn btn-xs btn-default"><i class="fa fa-mail-forward"></i> Gửi
                                                mail</a>
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{ $posts->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
