@extends('layouts.layout_admin')
@section('title', 'Phản hồi từ khách hàng')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý phản hồi từ khách hàng
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
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 3%">#</th>
                        <th style="width: 30%">Thông tin</th>
                        <th style="width: 35%">Lời nhắn</th>
                        <th style="width: 10%">Ngày gửi</th>
                        <th style="width: 15%">Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($contacts))
                        @php $i = 1;@endphp
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <ul>
                                        <li>Tên: {{ $contact->name }}</li>
                                        <li>Điện thoại: {{ $contact->phone }}</li>
                                        <li>Email: {{ $contact->email }}</li>
                                    </ul>
                                </td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    @if($contact->status == 1)
                                        <span class="label label-info"><i class="fa fa-spinner"></i> Chờ xử lý</span>
                                    @elseif($contact->status == 0)
                                        <span class="label label-danger"><i class="fa fa-times-circle"></i> Huỷ</span>
                                    @elseif($contact->status == 2)
                                        <span class="label label-success"><i class="fa fa-check"></i> Hoàn thành</span>
                                    @endif
                                    @if($contact->status == 1)
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-xs">Thao tác</button>
                                            <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Xác nhận</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('admin.contact.status', [$contact->id, 2])}}"><i
                                                            class="fa fa-check"></i> Hoàn thành</a></li>
                                                <li><a href="{{route('admin.contact.status', [$contact->id, 0])}}"><i
                                                            class="fa fa-times-circle"></i> Huỷ</a></li>
                                            </ul>
                                        </div>
                                    @endif
                                </td>

                                {{--                                <td>--}}
                                {{--                                    <a href="{{route('admin.category.edit', $contact->id)}}"--}}
                                {{--                                       class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>--}}
                                {{--                                        Sửa</a>--}}
                                {{--                                    <a href="{{route('admin.category.delete', $contact->id)}}"--}}
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

