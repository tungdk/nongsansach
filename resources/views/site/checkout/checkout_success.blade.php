<h3>Cảm ơn bạn đã mua hàng của chúng tôi</h3>
<h4>Thông tin đơn hàng của bạn như sau: </h4>
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> Nông sản sạch.
                <small class="pull-right">Ngày tạo đơn: {{ $order->created_at }}</small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            Người gửi
            <address>
                <strong>Cửa hàng Nông Sản Sạch.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (804) 123-5432<br>
                Email: info@almasaeedstudio.com
            </address>
            <hr>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            Người nhận
            <address>
                <strong>{{ $order->name }}</strong><br>
                {{ $order->address }}<br>
                Điện thoại: {{ $order->phone }}<br>
            </address>
            <hr>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Mã đơn hàng:</b> #{{ $order->id }}<br>
            <b>Ngày giao hàng dự kiến:</b> {{ $order->created_at }}<br>
            <hr>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-condensed">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 40%">Sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th style="text-align: center">Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php $i = 1; ?>
                @foreach($order_details as $product)
                    <tr>
                        <td>{{ $i++ }}.</td>
                        <td>{{ $product->name }}</td>
                        <td><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDkvFCLSMbUU6Bqb1m-0y3LPAQ7_Gcs-PNZw&usqp=CAU"
                                alt="" style="width: 80px"></td>
                        <td> {{ number_format($product->price, 0, ',', '.') }} đ</td>
                        <td style="text-align: center"> {{ $product->quantity }} </td>
                        <td> {{ number_format($product->thanhtien, 0, ',', '.') }} đ</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
            <p class="lead">Hình thức thanh toán:</p>
            @if($order->payment_method == 0)
                <span>Thanh toán khi nhận hàng</span>
            @else
                <span>Thanh toán trực tuyến</span>
            @endif
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
            <p class="lead">Số tiền phải trả</p>
            <div class="table-responsive" style="text-align: right">
                <table class="table">
                    <tr>
                        <th>Mã giảm giá:</th>
                        <td>{{ $order->sale ? '-'.$order->sale.'%' : ''}}</td>
                    </tr>
                    <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                    </tr>
                    <tr>
                        <th>Tạm tính:</th>
                        <td>{{ number_format($order->total_money, 0, ',', '.') }} đ</td>
                    </tr>
                    <tr>
                        <th>Đã trả:</th>
                        <td>
                            @if($order->payment_method == 1)
                                {{ number_format($order->total_money, 0, ',', '.') }} đ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Tổng tiền:</th>
                        <td>
                            @if($order->payment_method == 1)
                                0 đ
                            @else
                                {{ number_format($order->total_money, 0, ',', '.') }} đ
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<a href="{{route('site.home')}}" class="btn btn-warning" style="margin-bottom: 50px;"><i
        class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
