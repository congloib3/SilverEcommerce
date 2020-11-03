<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Feeship;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Province;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public function index(){
        $city = City::orderBy('matp', 'asc')->get();
        return view('pages.checkout')->with(compact('city'));
    }
    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=='city'){
                $select_province = Province::where('matp', $data['matp'])->orderBy('maqh', 'ASC')->get();
                $output.='<option value="">Chọn quận huyện</option>';
                foreach($select_province as $key => $value){
                    $output.= '<option value="'.$value->maqh.'">'.$value->name_quanhuyen.'</option>';
                };
            }
        }
        echo $output;
    }
    public function calculate_fee(Request $request){
        $data = $request->all();
        if($data['matp']){
            $feeship = Feeship::where('fee_matp', $data['matp'])->where('fee_maqh', $data['maqh'])->get();
            foreach($feeship as $key => $fee){
                Session::put('fee', $fee->fee_feeship);
                Session::save();
                return number_format($fee->fee_feeship);
            }
        }
    }
    public function checkout_complete_bill(Request $request){
        $data = $request->all();

        $shipping = new Shipping();
        $shipping->shipping_name = $data['shipping_name'];
        $shipping->shipping_email = $data['shipping_email'];
        $shipping->shipping_phone = $data['shipping_phone'];
        $shipping->shipping_address = $data['shipping_address'];
        $shipping->shipping_notes = $data['shipping_notes'];
        $shipping->shipping_method = $data['shipping_method'];

        $shipping->save();

        $shipping_id = $shipping->shipping_id;
        $checkout_code = substr(md5(microtime()), rand(0,26), 5);

        $order = new Order();
        $order->shipping_id = $shipping_id;
        $order->order_status = 1;
        $order->order_code = $checkout_code;

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->save();


        if(Session::get('cart')){
            foreach(Session::get('cart') as $key => $cart){
                $order_detail = new OrderDetails();
                $order_detail->order_code = $checkout_code;
                $order_detail->product_id = $cart['product_id'];
                $order_detail->product_name = $cart['product_name'];
                $order_detail->product_price = $cart['product_price'];
                $order_detail->product_sales_quantity = $cart['product_quantity'];
                $order_detail->save();
            }
        }
        Session::forget('cart');
    }
}
