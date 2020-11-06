@extends('admin.layout_admin')
@section('admin_content')
<div class="card-body">
    <section class="content-header">
        <div style="padding: 3px;
                        background: #93b8e0;
                        color: #fff;
                        text-align: center;" class="well">
                <h4>Chi tiết đơn hàng</h4>
            </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php
            $message = Session::get('message_status');
            if($message) {
                echo '<span class="text-danger">'.$message.'</span>';
                Session::put('message_status', null);
            }
        ?>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container123  col-md-6"   style="">
                            <h4></h4>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{ $shipping->shipping_name }}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{date_format($order->created_at,"H:i:s d/m/Y")}}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{ $shipping->shipping_phone }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{ $shipping->shipping_address }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $shipping->shipping_email }}</td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>{{ $shipping->shipping_notes }}</td>
                                </tr>
                                <tr>
                                    <td>Hình thức thanh toán</td>
                                    <td>
                                        @if($shipping->shipping_method == 1)
                                            Thanh toán khi giao hàng (COD)
                                        @else
                                            Chuyển khoản qua ngân hàng
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                    $total = 0;
                                @endphp
                                @foreach($order_details as $detail)
                                @php
                                    $i++;
                                    $subtotal = ($detail->product_price*$detail->product_sales_quantity)+$detail->product_feeship;
                                    $total = $subtotal + $total;
                                @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$detail->product_name}}</td>
                                    <td>{{$detail->product_sales_quantity}}</td>
                                    <td>{{number_format($detail->product_price,0,',','.')}}</td>
                                    <td>{{number_format(($detail->product_price*$detail->product_sales_quantity),0,',','.')}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">Phí vận chuyển:</td>
                                    <td colspan="1">{{number_format($detail->product_feeship,0,',','.')}}</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Tổng thanh toán: </td>
                                    <td colspan="1"><strong>{{number_format($total,0,',','.')}}</strong></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-8">
                            <div class="float-right">
                                <form action="{{URL::to('admin/update-order-status/'.$order->order_id)}}" method="POST">
                                    {{ csrf_field() }}
                                        <div class="form-inline">
                                            <label>Trạng thái giao hàng:&nbsp; </label>
                                            <select name="status" class="form-control input-inline" style="width: 200px">
                                                <option {{ $order->order_status == 1 ? "selected" : '' }} value="1">Chưa giao</option>
                                                <option {{ $order->order_status == 2 ? "selected" : '' }} value="2">Đang giao</option>
                                                <option {{ $order->order_status == 3 ? "selected" : '' }} value="3">Đã giao</option>
                                            </select>
                                            &nbsp;<input type="submit" value="Xử lý" class="btn btn-primary">
                                        </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
