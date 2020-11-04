@extends('admin.layout_admin')
@section('admin_content')
<head>
    <style>
        .table-bordered th{
  /* border: 1px solid #dee2e6; */
  white-space: nowrap;

}
    </style>
</head>
<div class="card-body">
    <div class="table-responsive">
        <?php
            $message = Session::get('message_dashboard');
            if($message) {
                echo '<span class="text-danger">'.$message.'</span>';
                Session::put('message_dashboard', null);
            }
         ?>
        <div style="padding: 3px;
                    background: #93b8e0;
                    color: #fff;
                    text-align: center;" class="well">
            <h4>Thông tin vận chuyển hàng</h4>
        </div>
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>Tên người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Ghi chú</th>
                    <th>Hình thức thanh toán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$shipping->shipping_name}}</td>
                    <td>{{$shipping->shipping_address}}</td>
                    <td>{{$shipping->shipping_phone}}</td>
                    <td>{{$shipping->shipping_email}}</td>
                    <td>{{$shipping->shipping_notes}}</td>
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
        <div style="padding: 3px;
                    background: #b58907;
                    color: #fff;
                    text-align: center;" class="well">
            <h4>Liệt kê chi tiết đơn hàng</h4>
        </div>
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá sản phẩm</th>
                    <th>Tổng tiền</th>
                    {{-- <th>Hình thức thanh toán</th> --}}
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
                    <td colspan="5">Phí vận chuyển: {{number_format($detail->product_feeship,0,',','.')}}</td>
                </tr>
                <tr>
                    <td colspan="5"><strong>Tổng thanh toán: {{number_format($total,0,',','.')}}</strong></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
