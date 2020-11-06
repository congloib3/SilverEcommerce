@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
<section class="banner-container">
    <div class="container-limitter">
        <div class="main-logo">
            <a href="{{URL::to('/')}}" title="My Shop - Trang suc bac">
                <img src="{{asset('images/thienquyen.png')}}" alt="Thiên Quyên Logo">
            </a>
        </div>
    </div>
</section>
  <section class="breadcrumb-container">
  <div class="container-limitter">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="{{URL::to('/')}}">Trang chủ /</a></li>
            <li class="active">&nbsp;Giỏ hàng</li>
        </ol>
      </div>
    </div>
  </div>
</section>
    <div class="page-container">
  <div class="container-limitter">
    <div class="page-title">
      <h1>Giỏ hàng</h1>
    </div>
  </div>
</div>
<section class="cart-container" id="cart">
  <div class="container-limitter">
  @if(!Session::get('cart'))
    <h3>Giỏ hàng trống</h3>
  @else
  <form class="cart-form" action="{{url('/update-cart')}}" method="post">
    {{csrf_field()}}
        <div class="cart-head">
          <div class="cart-row">
            <div class="cart-group cart-group__thumbnail">
              <div class="cart-cell cart-cell__thumbnail">
                &nbsp;Sản phẩm
              </div>
            </div>
            <div class="cart-group cart-group__detail">
              <div class="cart-cell cart-cell__product-name">
                &nbsp;
              </div>
              <div class="cart-cell cart-cell__price">
                Giá&nbsp;
              </div>
              <div class="cart-cell cart-cell__quantity">
                Số lượng
              </div>
              <div class="cart-cell cart-cell__sub-total">
                Thành tiền&nbsp;
              </div>
            </div>
            <div class="cart-group cart-group__action">
              <div class="cart-cell cart-cell__action">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
        <div class="cart-body">
            @php
                $total = 0;
            @endphp
            @foreach(Session::get('cart') as $key => $cart)
                @php
                    $subtotal = $cart['product_price']*$cart['product_quantity'];
                    $total=$total+$subtotal;
                @endphp
            <div class="cart-row">
                <div class="cart-group cart-group__thumbnail">
                  <div class="cart-cell cart-cell__thumbnail">
                    <a href="{{URL::to('/chi-tiet/'.$cart['product_slug'])}}" title="{{$cart['product_name']}}">
                      <img src="{{asset('upload/products/'.$cart['product_id'].'/'.$cart['product_image'])}}" alt="{{$cart['product_name']}}">
                    </a>
                  </div>
                </div>
                <div class="cart-group cart-group__detail">
                  <div class="cart-cell cart-cell__product-name">
                    <a href="{{URL::to('/chi-tiet/'.$cart['product_slug'])}}">{{$cart['product_name']}}</a>
                  </div>
                  <div class="cart-cell cart-cell__price">
                    {{number_format($cart['product_price'],0,',','.')}}₫
                  </div>
                  <div class="cart-cell cart-cell__quantity">
                    <div class="">
                        <input class="form-control" min="1" name="cart_quantity[{{$cart['session_id']}}]" type="number" value="{{$cart['product_quantity']}}">
                    </div>
                  </div>
                  <div class="cart-cell cart-cell__sub-total">
                    <span class="price">
                      {{number_format($subtotal,0,',','.')}}₫
                    </span>
                      <span class="discount">
                      </span>
                  </div>
                </div>
                <div class="cart-group cart-group__action">
                  <div class="cart-cell cart-cell__action">
                  <a class="btn" style="background-color:color: #fff;background-color: #d9534f;border-color: #d43f3a;" href="{{URL::to('/delete-cart/'.$cart['session_id'])}}"><i class="far fa-trash-alt"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="cart-foot">
          <div class="cart-row">
            <div class="cart-cell cart-cell__total">
              <span>Tổng cộng:</span>
              <span class="price">{{number_format($total,0,',','.')}}₫</span>
            </div>
          </div>
          <div class="cart-row no-border">
            <div class="cart-cell cart-cell__submit">
              <a  href="/checkout" class="btn btn-info">Thanh toán</a>
              <input type="submit" id="update-cart" name="update" class="btn btn-info" value="Cập nhật số lượng">
              <a  href="/" class="btn btn-info">Tiếp tục mua sắm</a>
            </div>
          </div>
        </div>
      </form>
  @endif
  </div>
</section>
@endsection
