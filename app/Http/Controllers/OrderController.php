<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //
    public function view_order($order_code){
        $order_details = OrderDetails::where('order_code', $order_code)->get();
        $order = Order::where('order_code', $order_code)->first();
        // foreach($order as $key => $value) {
            $shipping_id = $order->shipping_id;
        // }
        $shipping = Shipping::where('shipping_id', $shipping_id)->first();

        $order_details = OrderDetails::with('product')->where('order_code', $order_code)->get();

        return view('admin.orders.view_order')->with(compact('order_details', 'shipping', 'order_details','order'));
    }
    public function manage_order(){
        $orders = Order::orderby('created_at', 'DESC')->paginate(8);
        return view('admin.orders.manage_order')->with('orders', $orders);
    }
    public function update_order_status($id, Request $request){
        $status = $request->status;
        $order = Order::find($id);
        $order->order_status = $status;
        $order->save();

        Session::flash('message_status', "Cập nhật trạng thái giao hàng thành công");
        return Redirect::to('admin/view-order/'.$order->order_code);

    }
    public function delete_order($order_code){
        $order = Order::where('order_code',$order_code)->first();
        $order->delete();
        return redirect('/admin/manage-order');
    }
}
