@extends('admin.layout_admin')
@section('admin_content')
<div class="card-body">
    <div class="table-responsive">
        <?php
            $message = Session::get('message_dashboard');
            if($message) {
                echo '<span class="text-danger">'.$message.'</span>';
                Session::put('message_dashboard', null);
            }
         ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i  = 0;
                @endphp
                @foreach($orders as $order)
                @php
                    $i++;
                @endphp
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$order->order_code}}</td>
                    <td>
                        @if($order->order_status==1)
                            Đơn hàng mới
                        @else
                            Đã xử lý
                        @endif
                    </td>
                    <td>
                    <a class="btn btn-warning" href="{{URL::to('admin/view-order/'.$order->order_code)}}">Xem</a>
                    <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="{{URL::to('admin/delete-order/'.$order->order_code)}}">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-xs-12 col-6">
                {{$orders->links()}}
              </div>
        </div>
    </div>
</div>
@endsection
