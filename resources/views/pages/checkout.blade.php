<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}" />

<div class="content">
    <button class="order-summary-toggle order-summary-toggle-hide">
					<div class="wrap">
						<div class="order-summary-toggle-inner">
							<div class="order-summary-toggle-icon-wrapper">
								<i style="color: #338dbc" class="fas fa-shopping-cart"></i>
							</div>
							<div class="order-summary-toggle-text order-summary-toggle-text-show">
								<span>Hiển thị thông tin đơn hàng</span>
								<i class="fas fa-chevron-down"></i>
							</div>
							<div class="order-summary-toggle-text order-summary-toggle-text-hide">
								<span>Ẩn thông tin đơn hàng</span>
								<i class="fas fa-chevron-up"></i>
							</div>
						</div>
					</div>
				</button>
    <div class="wrap">
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="order-summary order-summary-is-collapsed">
                    <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                    <div class="order-summary-sections">
                        <div class="order-summary-section order-summary-section-product-list"
                            data-order-summary-section="line-items">
                            <table class="product-table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span class="visually-hidden">Hình ảnh</span>
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden">Mô tả</span>
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden">Số lượng</span>
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden">Giá</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach(Session::get('cart') as $key => $cart)
                                        @php
                                            $subtotal = $cart['product_price']*$cart['product_quantity'];
                                            $total += $subtotal;
                                        @endphp
                                        <tr class="product">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image"
                                                            alt="{{$cart['product_name']}}"
                                                            src="{{asset('upload/products/'.$cart['product_id'].'/'.$cart['product_image'])}}" />
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">{{$cart['product_quantity']}}</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">{{$cart['product_name']}}</span>
                                            </td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">{{number_format($subtotal)}}₫</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="order-summary-section order-summary-section-total-lines payment-lines"
                            data-order-summary-section="payment-lines">
                            <table class="total-line-table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span class="visually-hidden">Mô tả</span>
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden">Giá</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-line total-line-subtotal">
                                        <td class="total-line-name">
                                            Tạm tính
                                        </td>
                                        <td class="total-line-price">
                                            <span class="order-summary-emphasis">
                                                {{number_format($total)}}₫
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="total-line total-line-shipping">
                                        <td class="total-line-name">
                                            Phí vận chuyển
                                        </td>
                                        <td class="total-line-price">
                                            <span class="order-summary-emphasis calculate_delivery">
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="total-line-table-footer">
                                    <tr class="total-line">
                                        <td class="total-line-name payment-due-label">
                                            <span class="payment-due-label-total">Tổng cộng</span>
                                        </td>
                                        <td class="total-line-name payment-due">
                                            <span class="payment-due-currency">VND</span>
                                            <?php
                                                $fee_ship = Session::get('fee');
                                                $total += $fee_ship;
                                            ?>
                                            <span class="payment-due-price" data-checkout-payment-due-target="63000000">
                                                {{number_format($total)}}₫
                                            </span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <a href="/" class="logo">
                    <h1 class="logo-text">Jewelry</h1>
                </a>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/cart">Giỏ hàng</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item-current">
                        Thông tin giao hàng
                    </li>
                </ul>
            </div>
            <div class="main-content">
                <div class="step">
                    <form id="form_update_location" class="clearfix order-checkout__loading">
                        @csrf
                    <div class="step-sections steps-onepage" step="1">
                        <div class="section">
                            <div class="section-header">
                                <h2 class="section-title">
                                    Thông tin giao hàng
                                </h2>
                            </div>
                            <div class="section-content section-customer-information no-mb">
                                <div class="fieldset">
                                    <div class="field field-required ">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="shipping_name">Họ và tên</label>
                                            <input placeholder="Họ và tên" required
                                                class="field-input shipping_name" size="30" type="text" id="shipping_name"
                                                name="shipping_name" value="" />
                                        </div>
                                    </div>
                                    <div class="field  field-two-thirds">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="shipping_email">Email</label>
                                            <input placeholder="Email"
                                                class="field-input shipping_email" size="30" type="email" id="checkout_user_email"
                                                name="shipping_email" value="" />
                                        </div>
                                    </div>
                                    <div class="field field-required field-third">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="shipping_phone">Số điện thoại</label>
                                            <input placeholder="Số điện thoại" required
                                                class="field-input shipping_phone" size="30" maxlength="11" type="tel"
                                                id="shipping_phone" name="shipping_phone" value="" />
                                        </div>
                                    </div>
                                    <div class="field field-required  ">
                                        <div class="field-input-wrapper">
                                            <label class="field-label" for="shipping_address">Địa chỉ</label>
                                            <input placeholder="Địa chỉ" required
                                                class="field-input shipping_address" size="30" type="text" id="shipping_address"
                                                name="shipping_address" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-content">
                                <div class="fieldset">
                                        <div class="field field-show-floating-label field-required field-half ">
                                            <div class="field-input-wrapper field-input-wrapper-select">
                                                <label class="field-label" for="customer_shipping_province">
                                                    Tỉnh / thành
                                                </label>
                                                <select class="field-input choose city" name="city" id="city">
                                                    <option value="">Chọn thành phố</option>
                                                    @foreach ($city as $key => $value)
                                                    <option value="{{$value->matp}}">{{$value->name_city}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="field field-show-floating-label field-required field-half ">
                                            <div class="field-input-wrapper field-input-wrapper-select">
                                                <label class="field-label" for="customer_shipping_district">Quận /
                                                    huyện</label>
                                                <select class="field-input province choose_province" id="province"
                                                    name="customer_shipping_district">
                                                    <option data-code="null" value="null" selected="">Chọn quận /
                                                        huyện</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="fieldset">
                                    <div class="field field-required  ">
                                        <div class="field-input-wrapper">
                                            <textarea placeholder="Ghi chú đơn hàng của bạn"
                                                class="field-input shipping_notes" size="30" type="text" id="shipping_notes"
                                                name="shipping_notes" value="" rows="5" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="change_pick_location_or_shipping">
                                <div id="section-payment-method" class="section">
                                    <div class="section-header">
                                        <h2 class="section-title">
                                            Phương thức thanh toán
                                        </h2>
                                    </div>
                                    <div class="section-content">
                                        <div class="content-box">
                                            <div id="showMethod" class="radio-wrapper content-box-row">
                                                <label class="radio-label" for="payment_method_1000721619">
                                                    <div class="radio-input">
                                                        <input id="payment_method_1000721619" class="input-radio"
                                                            name="toggler" type="radio" value="1" checked="" />
                                                    </div>
                                                    <span class="radio-label-primary">Thanh toán khi giao
                                                        hàng (COD)</span>
                                                </label>
                                            </div>
                                            <div id="showMethod" class="radio-wrapper content-box-row">
                                                <label class="radio-label" for="payment_method_243094">
                                                    <div class="radio-input">
                                                        <input id="payment_method_243094" class="input-radio"
                                                            name="toggler" type="radio" value="2" />
                                                    </div>
                                                    <span class="radio-label-primary">Chuyển khoản qua ngân
                                                        hàng</span>
                                                </label>
                                            </div>
                                            <div class="content-box-row-secondary" for="payment_method_id">
                                                <div id="blk-2" class="blank-slate toHide" style="display:none">
                                                    NGUYEN VAN A
                                                    STK 123456789
                                                    Ngân hàng ACB TPHCM
                                                </div>
                                                <div id="blk-1" class="toHide" style="display:none"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step-footer">
                            <button type="button" class="step-footer-continue-btn btn checkout">
                                <span class="btn-content">Hoàn tất đơn hàng</span>
                                <i class="btn-spinner icon icon-button-spinner"></i>
                            </button>
                        <a class="step-footer-previous-link" href="/cart">
                            <i class="fas fa-angle-double-left"></i>
                            Giỏ hàng
                        </a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="main-footer"></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>
<script type="text/javascript">
    var toggleShowOrderSummary = false;
    $(document).ready(function() {
        $('body')
            .on('click', '.order-summary-toggle', function() {
                toggleShowOrderSummary = !toggleShowOrderSummary;
                if(toggleShowOrderSummary) {
                    $('.order-summary-toggle')
                        .removeClass('order-summary-toggle-hide')
                        .addClass('order-summary-toggle-show');

                    $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                        .removeClass('order-summary-is-collapsed')
                        .addClass('order-summary-is-expanded');

                    $('.sidebar.sidebar-second .sidebar-content .order-summary')
                        .removeClass('order-summary-is-expanded')
                        .addClass('order-summary-is-collapsed');
                } else {
                    $('.order-summary-toggle')
                        .removeClass('order-summary-toggle-show')
                        .addClass('order-summary-toggle-hide');

                    $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                        .removeClass('order-summary-is-expanded')
                        .addClass('order-summary-is-collapsed');

                    $('.sidebar.sidebar-second .sidebar-content .order-summary')
                        .removeClass('order-summary-is-collapsed')
                        .addClass('order-summary-is-expanded');
                }
            });
    });
</script>
<script>
    $('.checkout').click(function() {
            var shipping_address = $('.shipping_address').val();
                    var city = $('#city option:selected').text();
                    var province = $('#province option:selected').text();
                    var validate_city = $('#city').val();
                    var validate_province = $('#province').val();
                    shipping_address = shipping_address + ', ' + province + ', ' + city;

                    var shipping_name = $('.shipping_name').val();
                    var shipping_email = $('.shipping_email').val();
                    var shipping_phone = $('.shipping_phone').val();
                    var shipping_notes = $('.shipping_notes').val();
                    var shipping_method = $('input[name="toggler"]:checked').val();
                    var _token = $('input[name="_token"]').val();
                    if(validate_city == '' || validate_province == '' || shipping_method == '' || shipping_notes == '' || shipping_name == '' || shipping_email == '' || shipping_phone == '' || shipping_address == '' ){
                        swal("Vui lòng nhập đầy đủ thông tin!")
                        return false
             }
            swal({
                title: "Xác nhận đơn hàng",
                text: "Xác nhận đặt đơn hàng!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Mua hàng",
                cancelButtonText:"Không, Quay lại!",
                closeOnConfirm:false,
                closeOnConfirm: false
            },
            function(isConfirm){
                if(isConfirm) {
                    $.ajax({
                        url: '{{url('/checkout-complete-bill')}}',
                        method: 'POST',
                        data: {shipping_method:shipping_method,shipping_notes:shipping_notes,shipping_address:shipping_address,shipping_name:shipping_name, _token:_token, shipping_email:shipping_email,shipping_phone:shipping_phone},
                        success:function(){
                            swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công!", "success");
                        }
                    })
                    window.setTimeout(function(){
                        location.reload();
                    },3000)
                }else{
                    swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                }

             });


    })
    // ----------------- handdle display location------------------
    $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var matp = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action ==  'city'){
                result = 'province';
            }
            $.ajax({
                url: '{{url('/checkout-select-delivery')}}',
                method: 'POST',
                data: {action:action, _token:_token, matp:matp},
                success: function(data){
                    $('#'+result).html(data);
                }
            })
    })
    $('.choose_province').on('change', function() {
            var maqh = $('.province').val();
            var matp = $('.city').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/checkout-calculate-fee')}}',
                method: 'POST',
                data: {maqh:maqh, _token:_token, matp:matp},
                success:function(data){
                    $('.calculate_delivery').text(data+'₫');
                }
            })
    })
    $(function () {
        $("[name=toggler]").click(function () {
            $(".toHide").hide("slow");
            $("#blk-" + $(this).val()).show("slow");
        });
    });
</script>
