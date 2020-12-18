@extends('layouts.layout_admin')
@section('title', 'Slider')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý slider
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.slider.index')}}">Slider</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><a href="{{route('admin.slider.create')}}" class="btn btn-success">Thêm mới <i
                            class="fa fa-plus-circle"></i></a>
                </h3>
            </div>
            <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Tiêu đề</th>
                                <th>Ảnh</th>
                                <th>Trang thái</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($sliders))
                                @php $i=1; @endphp
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->image }}</td>
                                        <td>
                                            @if($slider->status == 1)
                                                <a href="{{route('admin.slider.active', $slider->id)}}"
                                                   class="label label-info">Hiển thị</a>
                                            @else
                                                <a href="{{route('admin.slider.active', $slider->id)}}"
                                                   class="label label-default">Ẩn</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.slider.edit', $slider->id)}}"
                                               class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                Sửa</a>
                                            <a href="{{route('admin.slider.delete', $slider->id)}}"
                                               class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xoá</a>
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
