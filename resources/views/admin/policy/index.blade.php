@extends('layouts.layout_admin')
@section('title', 'Chính sách')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý chính sách của cửa hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.policy.index')}}">Chính sách</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.policy.create')}}" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Tên chính sách</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                            @if(isset($policies))
                                @foreach($policies as $policy)
                                    <tr>

                                        <td>{{ $policy->id }}</td>
                                        <td>{{ $policy->name }}</td>
                                        <td>{{ $policy->created_at }}</td>
                                        <td>
                                            @if($policy->status == 1)
                                                <a href="{{route('admin.policy.active', $policy->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.policy.active', $policy->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.policy.edit', $policy->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.policy.delete', $policy->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
                {{ $policies->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        function send_mail(id){
            const token = "{{ @csrf_token() }}";
            send_mail_information(id, token);
        }
    </script>
    <script src="{{ asset("js/admin/send_mail.js") }}"></script>
@endsection
