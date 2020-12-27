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
                <h3 class="box-title"><a href="{{route('admin.policy.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="overlay hidden" id="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <div class="box-body" id="table-list">

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script src="{{ asset('js/admin/crud.js') }}"></script>
    <script>
        let url_active = '{{ route('admin.policy.active') }}';
        let url_delete = '{{ route('admin.policy.delete') }}'
        $(function () {
            load_data('{{route('admin.policy.load_data')}}');
        })
    </script>
@endsection
