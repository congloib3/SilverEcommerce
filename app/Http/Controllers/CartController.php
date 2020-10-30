<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function delete_cart($session_id){
        $cart = Session::get('cart');
        if($cart == true){
            foreach($cart as $key => $value) {
                if($value['session_id'] == $session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    public function add_cart_ajax(Request $request){
       $data = $request->all();
       $session_id = substr(md5(microtime()), rand(0,26), 5);
       $cart = Session::get('cart');
       if($cart == true){
            $is_avaiable = 0;
            foreach($cart as $key => $value){
                if($value['product_id'] == $data['cart_product_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_id' => $data['cart_product_id'],
                    'product_name' => $data['cart_product_name'],
                    'product_price' => $data['cart_product_price'],
                    'product_quantity' => $data['cart_product_quantity'],
                    'product_image' => $data['cart_product_image']
                );
                Session::put('cart', $cart);
            }
       }else{
           $cart[] = array(
               'session_id' => $session_id,
               'product_id' => $data['cart_product_id'],
               'product_name' => $data['cart_product_name'],
               'product_price' => $data['cart_product_price'],
               'product_quantity' => $data['cart_product_quantity'],
               'product_image' => $data['cart_product_image']
           );
       }
       Session::put('cart', $cart);
       Session::save();
    }
    public function update_cart(Request $request){
        $data = $request->all();

        $cart = Session::get('cart');

        if($cart == true){
            foreach($data['cart_quantity'] as $key => $quantity){
                foreach($cart as $session => $value){
                    if($value['session_id'] == $key){
                        $cart[$session]['product_quantity'] = $quantity;
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
