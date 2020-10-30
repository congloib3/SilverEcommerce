@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
<section class="banner-container">
    <div class="container-limitter">
        <div class="main-logo">
            <a href="{{URL::to('/')}}'" title="My Shop - Trang suc bac">
                <h1>Jewelry</h1>
            </a>
        </div>
    </div>
</section>
  <section class="breadcrumb-container">
  <div class="container-limitter">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="{{URL::to('/')}}'">Trang chủ /</a></li>

            <li class="active">&nbsp;Giỏ hàng</li>

        </ol>
      </div>
      <div class="col-sm-6 col-xs-12 pull-right text-right">

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
      <form class="cart-form" action="/cart" method="post" novalidate="">
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
            <div class="cart-row">
              <div class="cart-group cart-group__thumbnail">
                <div class="cart-cell cart-cell__thumbnail">
                  <a href="/products/nhan-bac-925-hanada-n1234-r-2-s-200-0575-nhan-da-doi-xung" title="Nhẫn Bạc 925 Hanada N1234.R.2.S.200.0575 Nhẫn Đá Đối Xứng">
                    <img src="//product.hstatic.net/1000103292/product/j7490__5__17fcf06052c749bebf889213963b8102_compact.jpg" alt="Nhẫn Bạc 925 Hanada N1234.R.2.S.200.0575 Nhẫn Đá Đối Xứng">
                  </a>
                </div>
              </div>
              <div class="cart-group cart-group__detail">
                <div class="cart-cell cart-cell__product-name">
                  <a href="/products/nhan-bac-925-hanada-n1234-r-2-s-200-0575-nhan-da-doi-xung">Nhẫn Bạc 925 Hanada N1234.R.2.S.200.0575 Nhẫn Đá Đối Xứng</a>
                </div>
                <div class="cart-cell cart-cell__price" data-value="18000000">
                  180,000₫
                </div>
                <div class="cart-cell cart-cell__quantity">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button style="height: 100%; background-color:#fff; color:black;border:1px solid #ccc" class="btn btn-default minus"  type="button"><span class="far fa-minus"></span></button>
                    </span>
                    <input style="padding:0 !important" class="form-control" id="product-1061708754-quantity" min="0" name="updates[]" readonly="" size="4" type="text" value="1">
                    <span class="input-group-btn">
                      <button style="height: 100%; background-color:#fff; color:black;border:1px solid #ccc" class="btn btn-default plus"  type="button"><span class="far fa-plus"></span></button>
                    </span>
                  </div>
                </div>
                <div class="cart-cell cart-cell__sub-total">
                  <span class="price">
                    180,000₫
                  </span>
                    <span class="discount">
                    </span>
                </div>
              </div>
              <div class="cart-group cart-group__action">
                <div class="cart-cell cart-cell__action">
                  <a class="btn" style="background-color:color: #fff;background-color: #d9534f;border-color: #d43f3a;" href="/cart/change?line=1&amp;quantity=0" data-id="1061708754"><i class="far fa-trash-alt"></i></a>
                </div>
              </div>
            </div>
        </div>
        <div class="cart-foot">
          <div class="cart-row">
            <div class="cart-cell cart-cell__total">
              <span>Tổng cộng:</span>
              <span class="price">180,000₫</span>
            </div>
          </div>
          <div class="cart-row">
            <div class="cart-cell cart-cell__note">
              <textarea class="form-control" name="note" id="CartSpecialInstructions" placeholder="Ghi chú" rows="5"></textarea>
            </div>
          </div>
          <div class="cart-row no-border">
            <div class="cart-cell cart-cell__submit">
                <a  href="/checkout" class="btn btn-info">Thanh toán</a>
              {{-- <input  type="submit" id="checkout-cart" name="checkout" class="btn btn-primary" value="Thanh toán"> --}}
              <input  type="submit" id="update-cart" name="update" class="btn btn-info" value="Cập nhật số lượng">
              <a  href="/" class="btn btn-info">Tiếp tục mua sắm</a>
            </div>
          </div>
        </div>
      </form>
  </div>
</section>
<script>
  function pixelInitiateCheckout() {
    fbq('track', 'InitiateCheckout', {
      contents: [

          {
            id: 1061708754,
            quantity: 1,
            item_price: 18000000
          },

      ],
      currency: 'VND',
      value: 5
    });
  }
</script>
<script>
  function updatePrice() {
  }
</script>
<script>
  $('.cart-body .cart-cell__quantity .minus').on('click', function(ev) {
    var linkedInputId = $(this).data('linked-input');
    var linkedInput = $('#' + linkedInputId);
    var quantity = linkedInput.val();
    if (isNaN(quantity) || quantity <= 1) {
      quantity = 1;
    }
    else {
      quantity--;
    }
    linkedInput.val(quantity);
    updatePrice();
  });
  $('.cart-body .cart-cell__quantity .plus').on('click', function(ev) {
    var linkedInputId = $(this).data('linked-input');
    var linkedInput = $('#' + linkedInputId);
    var quantity = linkedInput.val();
    if (isNaN(quantity) || quantity < 1) {
      quantity = 1;
    }
    else {
      quantity++;
    }
    linkedInput.val(quantity);
    updatePrice();
  });
</script>
<script>
  $('#checkout-cart').click(pixelInitiateCheckout);
</script>
@endsection
