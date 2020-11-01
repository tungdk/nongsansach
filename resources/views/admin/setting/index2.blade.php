@extends('layouts.layout_admin')
@section('title', 'Sản phẩm')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="{{route('admin.setting.website')}}">Cài đặt</a></li>
            @if(request()->is('admin/setting/website'))
                <li class="active">Cài đặt website</li>
            @elseif(request()->is('admin/setting/social'))
                <li class="active">Cài đặt mạng xã hội</li>
            @endif
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <ul class="nav nav-tabs">
                    <li class="nav-item @if(request()->is('admin/setting/website')) active @endif">
                        <a class="nav-link " href="{{route('admin.setting.website')}}">Cài đặt website</a>
                    </li>
                    <li class="nav-item @if(request()->is('admin/setting/social')) active @endif">
                        <a class="nav-link" href="{{route('admin.setting.social')}}">Cài đặt mạng xã hội</a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                @if(request()->is('admin/setting/website'))
                    @include('admin.setting.website')
                @else
                    @include('admin.setting.social')
                @endif
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{--                                {!! $categories->links() !!}--}}
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
