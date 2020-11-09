@extends('layouts.layout_admin')
@section('title', 'Phản hồi từ khách hàng')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Phản hồi từ khách hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.contact.index')}}">Phản hồi</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.category.create')}}" class="btn btn-success">Thêm mới <i class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 30%">Tên</th>
                                <th style="width: 30%">Email</th>
                                <th style="width: 10%">Nội dung</th>
                                <th style="width: 20%">Ngày tạo</th>
                                <th style="width: 20%">Thao tác</th>
                            </tr>
                            @if(isset($contacts))
                                @foreach($contacts as $contact)
                                    <tr>

                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td>
                                            @if($contact->status == 1)
                                                <a href="{{route('admin.contact.active', $contact->id)}}" class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.contact.active', $contact->id)}}" class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.contact.edit', $contact->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.contact.delete', $contact->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
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
                {{ $contacts->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
