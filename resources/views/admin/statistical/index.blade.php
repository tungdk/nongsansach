@extends('layouts.layout_admin')
@section('title', 'Thống kê')
@section('css')

@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Trang quản trị hệ thống cửa hàng nông sản trực tuyến
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tổng số đơn hàng</span>
                        <span class="info-box-number">{{ $totalOrders }} <a href="{{ route('admin.order.index') }}">(Chi tiết)</a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Thành viên</span>
                        <span class="info-box-number">{{ $totalUser }} <a href="{{ route('admin.user.index') }}">(Chi tiết)</a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-pricetag-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sản phẩm</span>
                        <span class="info-box-number">{{ $totalProduct }} <a href="{{ route('admin.product.index') }}">(Chi tiết)</a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-star"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Đánh giá</span>
                        <span class="info-box-number">{{ $totalComment }} <a href="{{ route('admin.comment.index') }}">(Chi tiết)</a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-8">
                <h1>Biểu đồ</h1>
            </div>
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thống kê truy cập</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <ul>
                                <li>Đang trực tuyến: 1</li>
                                <li>Tổng tháng này: 111</li>
                                <li>Tổng tháng trước: 11</li>
                                <li>Tổng một năm: 1111</li>
                                <li>Tổng truy cập: 11111</li>
                            </ul>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <figure class="highcharts-figure">
                    <div id="container1"></div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="highcharts-figure">
                    <div id="container2"></div>
                </figure>
            </div>
        </div>
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Đơn hàng mới</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>
                                            <ul>
                                                <li>Tên: {{ $order->name }}</li>
                                                <li>Sđt: {{ $order->phone }}</li>
                                                <li>Đ/c: {{ $order->address }}</li>
                                            </ul>
                                        </td>
                                        <td><span style="color: red">{{ number_format($order->total_money, 0, ',', '.') }} đ</span>
                                        </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            <span class="label label-{{ $order->getStatus($order->status)['class'] }}">
                                                {{ $order->getStatus($order->status)['name'] }}
                                            </span>
                                        </td>
                                        <td>
                                            <button onclick="view_order({{$order->id}})"
                                                    class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Xem
                                            </button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-xs">Thao tác</button>
                                                <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Xác nhận</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{route('admin.order.action', ['confirm', $order->id])}}"><i
                                                                class="fa fa-clipboard"></i> Xác nhận</a></li>
                                                    <li>
                                                        <a href="{{route('admin.order.action', ['transport', $order->id])}}"><i
                                                                class="fa fa-truck"></i> Đang vận chuyển</a></li>
                                                    <li>
                                                        <a href="{{route('admin.order.action', ['delivered', $order->id])}}"><i
                                                                class="fa fa-check"></i> Đã giao hàng</a></li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="{{route('admin.order.action', ['cancel', $order->id])}}">Huỷ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All
                            Orders</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sản phẩm bán chạy</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            @foreach($topBuyedProduct as $product)
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">{{ $product->name }}
                                            <span
                                                class="label label-warning pull-right">{{ $product->price_new }}</span></a>
                                        <span class="product-description">
                          Đã bán: {{ $product->buyed }}
                        </span>
                                    </div>
                                </li>
                        @endforeach
                        <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sản phẩm xem nhiều</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            @foreach($topViewProduct as $product)
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">{{ $product->name }}
                                            <span class="label label-warning pull-right"><del>{{ $product->price_old }}</del> {{ $product->price_new }}</span></a>
                                        <span class="product-description">
                          <i class="fa fa-em"></i> {{ $product->views }}
                        </span>
                                    </div>
                                </li>
                        @endforeach
                        <!-- /.item -->

                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.box-footer -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css"/>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('container1', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Biểu đồ doanh thu'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature (°C)'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
        Highcharts.chart('container2', {
            chart: {
                styledMode: true
            },
            title: {
                text: 'Thống kê trạng thái đơn hàng'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar']
            },

            series: [{
                type: 'pie',
                allowPointSelect: true,
                keys: ['name', 'y', 'selected', 'sliced'],
                data: [
                    ['Apples', 29.9, false],
                    ['Pears', 71.5, false],
                    ['Oranges', 106.4, false],

                ],
                showInLegend: true
            }]
        });
    </script>
@endsection
