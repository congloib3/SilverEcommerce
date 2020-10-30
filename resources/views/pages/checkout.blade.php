<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/checkout.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="content">
    <div class="wrap">
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="order-summary order-summary-is-collapsed">
                    <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                    <div class="order-summary-sections">
                        <div
                            class="order-summary-section order-summary-section-product-list"
                            data-order-summary-section="line-items"
                        >
                            <table class="product-table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Hình ảnh</span
                                            >
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Mô tả</span
                                            >
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Số lượng</span
                                            >
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Giá</span
                                            >
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="product"
                                        data-product-id="1028245445"
                                        data-variant-id="1061667445"
                                    >
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div
                                                    class="product-thumbnail-wrapper"
                                                >
                                                    <img
                                                        class="product-thumbnail-image"
                                                        alt="Bông Tai Bạc 925 Hanada N34.E.2.S.220.0614 Tròn Đá Giữa"
                                                        src="//product.hstatic.net/1000103292/product/chg7119__5__3c90859cb99a4008af7d139a9c983cae_small.jpg"
                                                    />
                                                </div>
                                                <span
                                                    class="product-thumbnail-quantity"
                                                    aria-hidden="true"
                                                    >1</span
                                                >
                                            </div>
                                        </td>
                                        <td class="product-description">
                                            <span
                                                class="product-description-name order-summary-emphasis"
                                                >Bông Tai Bạc 925 Hanada
                                                N34.E.2.S.220.0614 Tròn Đá
                                                Giữa</span
                                            >
                                        </td>
                                        <td
                                            class="product-quantity visually-hidden"
                                        >
                                            1
                                        </td>
                                        <td class="product-price">
                                            <span class="order-summary-emphasis"
                                                >198,000₫</span
                                            >
                                        </td>
                                    </tr>

                                    <tr
                                        class="product"
                                        data-product-id="1028265993"
                                        data-variant-id="1061707460"
                                    >
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div
                                                    class="product-thumbnail-wrapper"
                                                >
                                                    <img
                                                        class="product-thumbnail-image"
                                                        alt="Nhẫn Bạc 925 Hanada N12.R.2.B.240.0558 Nhẫn Đá 6 Viên"
                                                        src="//product.hstatic.net/1000103292/product/j7269__5__d40b14f123bf4789a13d1d51fa143dfb_small.jpg"
                                                    />
                                                </div>
                                                <span
                                                    class="product-thumbnail-quantity"
                                                    aria-hidden="true"
                                                    >2</span
                                                >
                                            </div>
                                        </td>
                                        <td class="product-description">
                                            <span
                                                class="product-description-name order-summary-emphasis"
                                                >Nhẫn Bạc 925 Hanada
                                                N12.R.2.B.240.0558 Nhẫn Đá 6
                                                Viên</span
                                            >

                                            <span
                                                class="product-description-variant order-summary-small-text"
                                            >
                                                Default Title / Bạc phủ bạch kim
                                            </span>
                                        </td>
                                        <td
                                            class="product-quantity visually-hidden"
                                        >
                                            2
                                        </td>
                                        <td class="product-price">
                                            <span class="order-summary-emphasis"
                                                >432,000₫</span
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div
                            class="order-summary-section order-summary-section-discount"
                            data-order-summary-section="discount"
                        >
                            <form
                                id="form_discount_add"
                                accept-charset="UTF-8"
                                method="post"
                            >
                                <input name="utf8" type="hidden" value="✓" />
                                <div class="fieldset">
                                    <div class="field  ">
                                        <div class="field-input-btn-wrapper">
                                            <div class="field-input-wrapper">
                                                <label
                                                    class="field-label"
                                                    for="discount.code"
                                                    >Mã giảm giá</label
                                                >
                                                <input
                                                    placeholder="Mã giảm giá"
                                                    class="field-input"
                                                    data-discount-field="true"
                                                    autocomplete="off"
                                                    autocapitalize="off"
                                                    spellcheck="false"
                                                    size="30"
                                                    type="text"
                                                    id="discount.code"
                                                    name="discount.code"
                                                    value=""
                                                />
                                            </div>
                                            <button
                                                type="submit"
                                                class="field-input-btn btn btn-default btn-disabled"
                                            >
                                                <span class="btn-content"
                                                    >Sử dụng</span
                                                >
                                                <i
                                                    class="btn-spinner icon icon-button-spinner"
                                                ></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div
                            class="order-summary-section order-summary-section-total-lines payment-lines"
                            data-order-summary-section="payment-lines"
                        >
                            <table class="total-line-table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Mô tả</span
                                            >
                                        </th>
                                        <th scope="col">
                                            <span class="visually-hidden"
                                                >Giá</span
                                            >
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-line total-line-subtotal">
                                        <td class="total-line-name">
                                            Tạm tính
                                        </td>
                                        <td class="total-line-price">
                                            <span
                                                class="order-summary-emphasis"
                                                data-checkout-subtotal-price-target="63000000"
                                            >
                                                630,000₫
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="total-line total-line-shipping">
                                        <td class="total-line-name">
                                            Phí vận chuyển
                                        </td>
                                        <td class="total-line-price">
                                            <span
                                                class="order-summary-emphasis"
                                                data-checkout-total-shipping-target="0"
                                            >
                                                —
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="total-line-table-footer">
                                    <tr class="total-line">
                                        <td
                                            class="total-line-name payment-due-label"
                                        >
                                            <span
                                                class="payment-due-label-total"
                                                >Tổng cộng</span
                                            >
                                        </td>
                                        <td class="total-line-name payment-due">
                                            <span class="payment-due-currency"
                                                >VND</span
                                            >
                                            <span
                                                class="payment-due-price"
                                                data-checkout-payment-due-target="63000000"
                                            >
                                                630,000₫
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
                    <div class="step-sections steps-onepage" step="1">
                        <div class="section">
                            <div class="section-header">
                                <h2 class="section-title">
                                    Thông tin giao hàng
                                </h2>
                            </div>
                            <div
                                class="section-content section-customer-information no-mb"
                            >
                                <p class="section-content-text">
                                    Bạn đã có tài khoản?
                                    <a
                                        href="/account/login?urlredirect=%2Fcheckouts%2F1240663a2cee43ee89245f9c623e294e%3Fstep%3D1"
                                        >Đăng nhập</a
                                    >
                                </p>

                                <div class="fieldset">
                                    <div class="field field-required  ">
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="billing_address_full_name"
                                                >Họ và tên</label
                                            >
                                            <input
                                                placeholder="Họ và tên"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                type="text"
                                                id="billing_address_full_name"
                                                name="billing_address[full_name]"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="field  field-two-thirds  ">
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="checkout_user_email"
                                                >Email</label
                                            >
                                            <input
                                                placeholder="Email"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                type="email"
                                                id="checkout_user_email"
                                                name="checkout_user[email]"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div
                                        class="field field-required field-third  "
                                    >
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="billing_address_phone"
                                                >Số điện thoại</label
                                            >
                                            <input
                                                placeholder="Số điện thoại"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                maxlength="11"
                                                type="tel"
                                                id="billing_address_phone"
                                                name="billing_address[phone]"
                                                value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="field field-required  ">
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="billing_address_address1"
                                                >Địa chỉ</label
                                            >
                                            <input
                                                placeholder="Địa chỉ"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                type="text"
                                                id="billing_address_address1"
                                                name="billing_address[address1]"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-content">
                                <div class="fieldset">
                                    <form
                                        id="form_update_location"
                                        class="clearfix order-checkout__loading"
                                        accept-charset="UTF-8"
                                        method="post"
                                    >
                                        <input
                                            name="selected_customer_shipping_province"
                                            type="hidden"
                                            value=""
                                        />
                                        <input
                                            name="selected_customer_shipping_district"
                                            type="hidden"
                                            value=""
                                        />
                                        <input
                                            name="selected_customer_shipping_ward"
                                            type="hidden"
                                            value=""
                                        />
                                        <input
                                            name="utf8"
                                            type="hidden"
                                            value="✓"
                                        />
                                        <div
                                            class="order-checkout__loading--box"
                                        >
                                            <div
                                                class="order-checkout__loading--circle"
                                            ></div>
                                        </div>

                                        <div
                                            class="field field-show-floating-label field-required field-half "
                                        >
                                            <div
                                                class="field-input-wrapper field-input-wrapper-select"
                                            >
                                                <label
                                                    class="field-label"
                                                    for="customer_shipping_province"
                                                >
                                                    Tỉnh / thành
                                                </label>
                                                <select
                                                    class="field-input"
                                                    id="customer_shipping_province"
                                                    name="customer_shipping_province"
                                                >
                                                    <option
                                                        data-code="null"
                                                        value="null"
                                                        selected=""
                                                    >
                                                        Chọn tỉnh / thành
                                                    </option>

                                                    <option
                                                        data-code="HC"
                                                        value="50"
                                                        >Hồ Chí Minh</option
                                                    >

                                                    <option
                                                        data-code="HI"
                                                        value="1"
                                                        >Hà Nội</option
                                                    >

                                                    <option
                                                        data-code="DA"
                                                        value="32"
                                                        >Đà Nẵng</option
                                                    >

                                                    <option
                                                        data-code="AG"
                                                        value="57"
                                                        >An Giang</option
                                                    >

                                                    <option
                                                        data-code="BV"
                                                        value="49"
                                                        >Bà Rịa - Vũng
                                                        Tàu</option
                                                    >

                                                    <option
                                                        data-code="BG"
                                                        value="15"
                                                        >Bắc Giang</option
                                                    >

                                                    <option
                                                        data-code="BK"
                                                        value="4"
                                                        >Bắc Kạn</option
                                                    >

                                                    <option
                                                        data-code="BL"
                                                        value="62"
                                                        >Bạc Liêu</option
                                                    >

                                                    <option
                                                        data-code="BN"
                                                        value="18"
                                                        >Bắc Ninh</option
                                                    >

                                                    <option
                                                        data-code="BT"
                                                        value="53"
                                                        >Bến Tre</option
                                                    >

                                                    <option
                                                        data-code="BD"
                                                        value="35"
                                                        >Bình Định</option
                                                    >

                                                    <option
                                                        data-code="BI"
                                                        value="47"
                                                        >Bình Dương</option
                                                    >

                                                    <option
                                                        data-code="BP"
                                                        value="45"
                                                        >Bình Phước</option
                                                    >

                                                    <option
                                                        data-code="BU"
                                                        value="39"
                                                        >Bình Thuận</option
                                                    >

                                                    <option
                                                        data-code="CM"
                                                        value="63"
                                                        >Cà Mau</option
                                                    >

                                                    <option
                                                        data-code="CN"
                                                        value="59"
                                                        >Cần Thơ</option
                                                    >

                                                    <option
                                                        data-code="CB"
                                                        value="3"
                                                        >Cao Bằng</option
                                                    >

                                                    <option
                                                        data-code="DC"
                                                        value="42"
                                                        >Đắk Lắk</option
                                                    >

                                                    <option
                                                        data-code="DO"
                                                        value="43"
                                                        >Đắk Nông</option
                                                    >

                                                    <option
                                                        data-code="DB"
                                                        value="7"
                                                        >Điện Biên</option
                                                    >

                                                    <option
                                                        data-code="DN"
                                                        value="48"
                                                        >Đồng Nai</option
                                                    >

                                                    <option
                                                        data-code="DT"
                                                        value="56"
                                                        >Đồng Tháp</option
                                                    >

                                                    <option
                                                        data-code="GL"
                                                        value="41"
                                                        >Gia Lai</option
                                                    >

                                                    <option
                                                        data-code="HG"
                                                        value="2"
                                                        >Hà Giang</option
                                                    >

                                                    <option
                                                        data-code="HM"
                                                        value="23"
                                                        >Hà Nam</option
                                                    >

                                                    <option
                                                        data-code="HT"
                                                        value="28"
                                                        >Hà Tĩnh</option
                                                    >

                                                    <option
                                                        data-code="HD"
                                                        value="19"
                                                        >Hải Dương</option
                                                    >

                                                    <option
                                                        data-code="HP"
                                                        value="20"
                                                        >Hải Phòng</option
                                                    >

                                                    <option
                                                        data-code="HU"
                                                        value="60"
                                                        >Hậu Giang</option
                                                    >

                                                    <option
                                                        data-code="HO"
                                                        value="11"
                                                        >Hòa Bình</option
                                                    >

                                                    <option
                                                        data-code="HY"
                                                        value="21"
                                                        >Hưng Yên</option
                                                    >

                                                    <option
                                                        data-code="KH"
                                                        value="37"
                                                        >Khánh Hòa</option
                                                    >

                                                    <option
                                                        data-code="KG"
                                                        value="58"
                                                        >Kiên Giang</option
                                                    >

                                                    <option
                                                        data-code="KT"
                                                        value="40"
                                                        >Kon Tum</option
                                                    >

                                                    <option
                                                        data-code="LI"
                                                        value="8"
                                                        >Lai Châu</option
                                                    >

                                                    <option
                                                        data-code="LD"
                                                        value="44"
                                                        >Lâm Đồng</option
                                                    >

                                                    <option
                                                        data-code="LS"
                                                        value="13"
                                                        >Lạng Sơn</option
                                                    >

                                                    <option
                                                        data-code="LO"
                                                        value="6"
                                                        >Lào Cai</option
                                                    >

                                                    <option
                                                        data-code="LA"
                                                        value="51"
                                                        >Long An</option
                                                    >

                                                    <option
                                                        data-code="ND"
                                                        value="24"
                                                        >Nam Định</option
                                                    >

                                                    <option
                                                        data-code="NA"
                                                        value="27"
                                                        >Nghệ An</option
                                                    >

                                                    <option
                                                        data-code="NB"
                                                        value="25"
                                                        >Ninh Bình</option
                                                    >

                                                    <option
                                                        data-code="NT"
                                                        value="38"
                                                        >Ninh Thuận</option
                                                    >

                                                    <option
                                                        data-code="PT"
                                                        value="16"
                                                        >Phú Thọ</option
                                                    >

                                                    <option
                                                        data-code="PY"
                                                        value="36"
                                                        >Phú Yên</option
                                                    >

                                                    <option
                                                        data-code="QB"
                                                        value="29"
                                                        >Quảng Bình</option
                                                    >

                                                    <option
                                                        data-code="QM"
                                                        value="33"
                                                        >Quảng Nam</option
                                                    >

                                                    <option
                                                        data-code="QG"
                                                        value="34"
                                                        >Quảng Ngãi</option
                                                    >

                                                    <option
                                                        data-code="QN"
                                                        value="14"
                                                        >Quảng Ninh</option
                                                    >

                                                    <option
                                                        data-code="QT"
                                                        value="30"
                                                        >Quảng Trị</option
                                                    >

                                                    <option
                                                        data-code="ST"
                                                        value="61"
                                                        >Sóc Trăng</option
                                                    >

                                                    <option
                                                        data-code="SL"
                                                        value="9"
                                                        >Sơn La</option
                                                    >

                                                    <option
                                                        data-code="TN"
                                                        value="46"
                                                        >Tây Ninh</option
                                                    >

                                                    <option
                                                        data-code="TB"
                                                        value="22"
                                                        >Thái Bình</option
                                                    >

                                                    <option
                                                        data-code="TY"
                                                        value="12"
                                                        >Thái Nguyên</option
                                                    >

                                                    <option
                                                        data-code="TH"
                                                        value="26"
                                                        >Thanh Hóa</option
                                                    >

                                                    <option
                                                        data-code="TT"
                                                        value="31"
                                                        >Thừa Thiên Huế</option
                                                    >

                                                    <option
                                                        data-code="TG"
                                                        value="52"
                                                        >Tiền Giang</option
                                                    >

                                                    <option
                                                        data-code="TV"
                                                        value="54"
                                                        >Trà Vinh</option
                                                    >

                                                    <option
                                                        data-code="TQ"
                                                        value="5"
                                                        >Tuyên Quang</option
                                                    >

                                                    <option
                                                        data-code="VL"
                                                        value="55"
                                                        >Vĩnh Long</option
                                                    >

                                                    <option
                                                        data-code="VT"
                                                        value="17"
                                                        >Vĩnh Phúc</option
                                                    >

                                                    <option
                                                        data-code="YB"
                                                        value="10"
                                                        >Yên Bái</option
                                                    >
                                                </select>
                                            </div>
                                        </div>

                                        <div
                                            class="field field-show-floating-label field-required field-half "
                                        >
                                            <div
                                                class="field-input-wrapper field-input-wrapper-select"
                                            >
                                                <label
                                                    class="field-label"
                                                    for="customer_shipping_district"
                                                    >Quận / huyện</label
                                                >
                                                <select
                                                    class="field-input"
                                                    id="customer_shipping_district"
                                                    name="customer_shipping_district"
                                                >
                                                    <option
                                                        data-code="null"
                                                        value="null"
                                                        selected=""
                                                        >Chọn quận /
                                                        huyện</option
                                                    >
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="section-content section-customer-information fieldset"
                                    id="div_country_not_vietnam"
                                    style="display: none;"
                                >
                                    <div class="field field-two-thirds">
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="billing_address_city"
                                                >Thành phố</label
                                            >
                                            <input
                                                placeholder="Thành phố"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                type="text"
                                                id="billing_address_city"
                                                name="billing_address[city]"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    <div class="field field-third">
                                        <div class="field-input-wrapper">
                                            <label
                                                class="field-label"
                                                for="billing_address_zip"
                                                >Mã bưu chính</label
                                            >
                                            <input
                                                placeholder="Mã bưu chính"
                                                autocapitalize="off"
                                                spellcheck="false"
                                                class="field-input"
                                                size="30"
                                                type="text"
                                                id="billing_address_zip"
                                                name="billing_address[zip]"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="change_pick_location_or_shipping">
                                <div id="section-shipping-rate">
                                    <div class="section-header">
                                        <h2 class="section-title">
                                            Phương thức vận chuyển
                                        </h2>
                                    </div>
                                    <div class="section-content">
                                        <div class="content-box  blank-slate">
                                            <i
                                                class="blank-slate-icon icon icon-closed-box "
                                            ></i>
                                            <p>
                                                Vui lòng chọn tỉnh / thành để có
                                                danh sách phương thức vận
                                                chuyển.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    id="section-payment-method"
                                    class="section"
                                >
                                    <div class="section-header">
                                        <h2 class="section-title">
                                            Phương thức thanh toán
                                        </h2>
                                    </div>
                                    <div class="section-content">
                                        <div class="content-box">
                                            <div
                                            id="showMethod"
                                                class="radio-wrapper content-box-row"
                                            >
                                                <label
                                                    class="radio-label"
                                                    for="payment_method_id_1000721619"
                                                >
                                                    <div class="radio-input">
                                                        <input
                                                            id="payment_method_id_1000721619"
                                                            class="input-radio"
                                                            name="toggler"
                                                            type="radio"
                                                            value="1"
                                                            checked=""
                                                        />
                                                    </div>
                                                    <span
                                                        class="radio-label-primary"
                                                        >Thanh toán khi giao
                                                        hàng (COD)</span
                                                    >
                                                </label>
                                            </div>

                                            <div
                                                id="showMethod"
                                                class="radio-wrapper content-box-row"
                                            >
                                                <label
                                                    class="radio-label"
                                                    for="payment_method_id_243094"
                                                >
                                                    <div class="radio-input">
                                                        <input
                                                            id="payment_method_id_243094"
                                                            class="input-radio"
                                                            name="toggler"
                                                            type="radio"
                                                            value="2"
                                                        />
                                                    </div>
                                                    <span
                                                        class="radio-label-primary"
                                                        >Chuyển khoản qua ngân
                                                        hàng</span
                                                    >
                                                </label>
                                            </div>

                                            <div
                                                class="content-box-row-secondary"
                                                for="payment_method_id_243094"
                                            >
                                                <div id="blk-2" class="blank-slate toHide" style="display:none">
                                                    VO QUOC HUY STK
                                                    19020502048025 Ngân hàng
                                                    TECHCOMBANK TPHCM STK
                                                    0251002017674 Ngân hàng
                                                    VIETCOMBANK BINH TAY
                                                </div>
                                                <div id="blk-1" class="toHide" style="display:none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step-footer">
                        <form
                            id="form_next_step"
                            accept-charset="UTF-8"
                            method="post"
                        >
                            <input name="utf8" type="hidden" value="✓" />
                            <button
                                type="submit"
                                class="step-footer-continue-btn btn"
                            >
                                <span class="btn-content"
                                    >Hoàn tất đơn hàng</span
                                >
                                <i
                                    class="btn-spinner icon icon-button-spinner"
                                ></i>
                            </button>
                        </form>
                        <a class="step-footer-previous-link" href="/cart">
                            <svg
                                class="previous-link-icon icon-chevron icon"
                                xmlns="http://www.w3.org/2000/svg"
                                width="6.7"
                                height="11.3"
                                viewBox="0 0 6.7 11.3"
                            >
                                <path
                                    d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"
                                ></path>
                            </svg>
                            Giỏ hàng
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-footer"></div>
        </div>
    </div>
</div>
<script>

$(function() {
    $("[name=toggler]").click(function(){
            $('.toHide').hide('slow');
            $("#blk-"+$(this).val()).show('slow');
    });
 });
</script>
