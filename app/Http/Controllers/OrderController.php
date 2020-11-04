<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function view_order($order_code){
        $order_details = OrderDetails::where('order_code', $order_code)->get();
        $order = Order::where('order_code', $order_code)->get();
        foreach($order as $key => $value) {
            $shipping_id = $value->shipping_id;
        }
        $shipping = Shipping::where('shipping_id', $shipping_id)->first();

        $order_details = OrderDetails::with('product')->where('order_code', $order_code)->get();

        return view('admin.orders.view_order')->with(compact('order_details', 'shipping', 'order_details'));
    }
    public function manage_order(){
        $orders = Order::orderby('created_at', 'DESC')->paginate(8);
        return view('admin.orders.manage_order')->with('orders', $orders);
    }
    public function delete_order($order_code){
        $order = Order::where('order_code',$order_code)->first();
        $order->delete();
        return redirect('/admin/manage-order');
    }
}
