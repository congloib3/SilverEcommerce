@extends('layout') @section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/product.css') }}">
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

          <li class="active">&nbsp;Chi tiết sản phẩm</li>
        </ol>
      </div>
      <div class="col-sm-6 col-xs-12 pull-right text-right"></div>
    </div>
  </div>
</section>
<div class="product-container product-container__product">
  <div class="container-limitter">
    <div class="row" id="product-1028367663">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="top-section">
          <img
            class="big_img"
            src="{{asset('upload/products/'.$product->id.'/'.$product->image)}}"
            alt=""
          />
        </div>
        <div class="nav">
          @foreach( $product->thumbnails as $thumbnail)
          <img
            class="small_img"
            src="{{asset('upload/thumbnails/'.$thumbnail->id.'/'.$thumbnail->img_path)}}"
            alt=""
          />
          @endforeach
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="product-detail">
          <h3 class="product-name">
            <a
              href="/products/bong-tai-bac-925-hanada-g7119-n34-e-2-s-220-0614-tron-da-giua"
              title=" Bông Tai Bạc 925 Jewelry Silver Shop N34.E.2.S.220.0614 Tròn Đá Giữa"
            >
              {{$product->name}}</a
            >
          </h3>
          <div class="product-block product-type">
            <span>{{$product->category->name}}</span>
          </div>
          <div class="product-block product-price">
            <span class="price" id="price" data-variant-price="19800000"
              >{{number_format($product->price).'₫'}}</span
            >

            <span class="compare-price">
              <del id="compare-price">220,000₫</del>
              <span class="discount-percent" id="discount-percent">(-10%)</span>
            </span>
          </div>
          <div class="product-form">
            <form
              action="/cart/add"
              method="post"
              enctype="multipart/form-data"
              id="add-to-cart-form"
            >
              <div class="product-block product-variants">
                <div class="selector-wrapper" style="display: none;">
                  <label for="productSelect-option-0">Tiêu đề</label
                  ><select
                    class="single-option-selector form-control input-sm"
                    data-option="option1"
                    id="product-variant-option-0"
                    ><option value="Default Title"
                      >Default Title</option
                    ></select
                  >
                </div>
                <select
                  class="single-option-selector"
                  id="product-variant"
                  name="id"
                  style="display: none;"
                >
                  <option selected="selected" data-sku="" value="1061667445">
                    DEFAULT TITLE
                  </option>
                </select>
                <div class="product-quantity selector-wrapper" style="">
                  <label for="Quantity">Số lượng</label>
                  <input
                    class="form-control input-sm"
                    id="quantity"
                    min="1"
                    name="quantity"
                    type="text"
                    value="1"
                  />
                </div>
              </div>
              <div class="product-block product-action">
                <button class="btn btn-primary" id="add-to-cart" name="add">
                  Thêm vào giỏ
                </button>
                <button class="btn btn-primary" id="buy-now" name="buy">
                  Mua ngay
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <div class="product-tabs-container">
      <div class="product-tabs2">
        <ul class="tabs clearfix  display-mode__desktop">
          <li class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
            <a class="">Thông số sản phẩm</a>
          </li>

          <li class="tablinks" onclick="openCity(event, 'Paris')">
            <a class="">Chính sách bảo hành</a>
          </li>
          <li class="tablinks" onclick="openCity(event, 'Tokyo')">
            <a class="">Giao hàng &amp; Thanh toán</a>
          </li>
        </ul>
      </div>
      <div id="London" class="tabcontent">
        <div
          class="tabs-content product-tab"
          id="tab-description"
          style="overflow-x:hidden;"
        >
          <div class="clearfix block-element display-mode__mobile">
            <h3>THÔNG SỐ SẢN PHẨM</h3>
          </div>
          <p><strong>BÔNG TAI BẠC CAO CẤP Jewelry Silver Shop. </strong></p>
          <ul>
            <li>Màu đá: Trắng</li>
            <li>Đá: CZ</li>
            <li>Kích thước:&nbsp;&nbsp;</li>
          </ul>
          <p><strong>&nbsp;</strong></p>
          <p><strong>KẾT QUẢ TEST QUANG PHỔ THÀNH PHẦN BẠC</strong></p>
          <p><strong>Analyzer Mode:</strong> Precious Metals</p>
          <p><strong>Test Results:</strong> 59.5 sec, 0 karat</p>
          <table width="419" class="mce-item-table">
            <tbody>
              <tr>
                <td><p>EL</p></td>
                <td><p>%</p></td>
                <td><p>+/-</p></td>
              </tr>
              <tr>
                <td><p>Ag(Bạc)</p></td>
                <td><p>98.31</p></td>
                <td><p>0.02</p></td>
              </tr>
              <tr>
                <td><p>Zn</p></td>
                <td><p>0.63</p></td>
                <td><p>0.01</p></td>
              </tr>
              <tr>
                <td><p>Cu</p></td>
                <td><p>1.06</p></td>
                <td><p>0.02</p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div id="Paris" class="tabcontent">
        <div class="tabs-content product-tab" id="tab-warrantypolicy">
          <div class="clearfix block-element display-mode__mobile">
            <hr />
            <h3>CHÍNH SÁCH BẢO HÀNH</h3>
          </div>
          <p class="title">
            CÔNG TY TNHH Jewelry Silver Shop CAM KẾT QUYỀN LỢI CHO KHÁCH HÀNG NHƯ SAU:
          </p>
          <p class="section-1">1. Đổi mới sản phẩm do lỗi từ Jewelry Silver Shop</p>
          <ul style="list-style-type:none;">
            <li>
              Khi sản phẩm bị hư hỏng trong vòng 7 ngày kể từ ngày mua do lỗi kỹ
              thuật từ <strong>Jewelry Silver Shop</strong>. Khách hàng được đổi lại sản phẩm
              mới hoặc lựa chọn sản phẩm khác.
            </li>
          </ul>
          <p class="section-1">2. Làm sạch SP vĩnh viễn</p>
          <ul style="list-style-type:none;">
            <li>
              Thời gian đánh sáng sẽ từ 1-5 ngày tùy tình trạng đơn hàng và tình
              trạng SP.
            </li>
            <li>
              <strong>Jewelry Silver Shop</strong> sẽ nhắn tin báo khách hàng biết khi sản
              phẩm đã đánh bóng xong.
            </li>
          </ul>
          <p class="section-1">3. Hỗ trợ chi phí xi/ sửa chữa sản phẩm</p>
          <ul style="list-style-type:none;">
            <li>
              <strong>Jewelry Silver Shop</strong> hỗ trợ chi phí sữa chữa cho khách hàng mua
              sản phẩm của shop.
            </li>
            <li>
              Trường hợp đối với sản phầm không phải của
              <strong>Jewelry Silver Shop</strong>, chi phí sửa chữa được tính như sau.
            </li>
          </ul>
          <table
            border="1"
            style="margin-right:30px; max-width:500px; width:100%;"
          >
            <tbody>
              <tr>
                <td style="width:200px;" rowspan="2">
                  <strong>SẢN PHẨM</strong>
                </td>
                <td style="text-align:center; width:150px;">
                  <strong>HÀNG NGOÀI</strong>
                </td>
                <td style="text-align:center; width:150px;">
                  <strong>HÀNG SHOP</strong>
                </td>
              </tr>
              <tr>
                <td style="text-align:center;"><strong>GIÁ</strong></td>
                <td style="text-align:center;"><strong>GIÁ</strong></td>
              </tr>
              <tr>
                <td>HỘT TẤM NHỎ</td>
                <td style="text-align:center">10</td>
                <td style="text-align:center">10</td>
              </tr>
              <tr>
                <td>HỘT LỚN</td>
                <td style="text-align:center">30-40-50</td>
                <td style="text-align:center">30-40-50</td>
              </tr>
              <tr>
                <td>HÀN + ĐÁNH SÁNG</td>
                <td style="text-align:center">40</td>
                <td style="text-align:center">20</td>
              </tr>
              <tr>
                <td>ĐÁNH SÁNG</td>
                <td style="text-align:center">20</td>
                <td style="text-align:center">MIỄN PHÍ</td>
              </tr>
              <tr>
                <td>XI VÀNG TRẮNG</td>
                <td style="text-align:center">50</td>
                <td style="text-align:center">30</td>
              </tr>
              <tr>
                <td>XI VÀNG HỒNG</td>
                <td style="text-align:center">50</td>
                <td style="text-align:center">30</td>
              </tr>
              <tr>
                <td>XI VÀNG 18</td>
                <td style="text-align:center">50</td>
                <td style="text-align:center">30</td>
              </tr>
              <tr>
                <td>LÀM NI (MỚI MUA)</td>
                <td style="text-align:center">-</td>
                <td style="text-align:center">MIỄN PHÍ</td>
              </tr>
              <tr>
                <td>LÀM NI</td>
                <td style="text-align:center">40</td>
                <td style="text-align:center">30</td>
              </tr>
              <tr>
                <td>XI BT NHỎ</td>
                <td style="text-align:center">20-30</td>
                <td style="text-align:center">10-20</td>
              </tr>
              <tr>
                <td>XI BT LỚN</td>
                <td style="text-align:center">30-50</td>
                <td style="text-align:center">20-30</td>
              </tr>
              <tr>
                <td colspan="3" style="text-align:center">
                  KHẮC CHỮ ĐẦU 30K, CHỮ THỨ 2 : 10K
                </td>
              </tr>
              <tr>
                <td colspan="3" style="text-align:center">
                  vd: Jewelry Silver Shop (30K) + SILVER (10K) = 40K.
                </td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
          <p>
            Mọi vấn đề thắc mắc về sản phẩm hay các chế độ chăm sóc khách hàng,
            bảo hành sản phẩm, khách hàng vui lòng liên hệ
            <em>hotline: <strong></strong></em>
          </p>
        </div>
      </div>

      <div id="Tokyo" class="tabcontent">
        <div class="tabs-content product-tab" id="tab-delivery-payment">
          <div class="clearfix block-element display-mode__mobile">
            <hr />
            <h3>GIAO HÀNG VÀ THANH TOÁN</h3>
          </div>
          <p class="title">I. Giao hàng Toàn Quốc</p>
          <p>
            <strong>Jewelry Silver Shop</strong> giao hàng toàn quốc với phí ship ưu đãi như
            sau:
          </p>
          <ul style="list-style-type: disc;">
            <li>
              <strong>10.000 vnd</strong> cho đơn hàng dưới
              <strong>350.000 vnd</strong> trong khu vực nội thành TP.HCM.
            </li>
            <li>
              <strong>ĐỒNG GIÁ 15.000 vnd</strong> cho đơn hàng dưới
              <strong>350.000 vnd</strong> với khu vực ngoại thành TP.HCM và tất
              cả các tỉnh thành.
            </li>
            <li>
              <strong>FREESHIP</strong> cho đơn hàng trên
              <strong>350.000 vnd</strong>.
            </li>
          </ul>
          <p>&nbsp;</p>
          <p>Thông tin chuyển khoản:</p>
          <ul style="list-style-type: none;">
            <li><strong>LS</strong></li>
            <li><strong>123456789</strong></li>
            <li><strong>ACB</strong></li>
          </ul>
          <p class="title">II. Thời gian giao hàng</p>
          <p>
            Thời gian giao hàng được bắt đầu tính từ lúc
            <strong>Jewelry Silver Shop</strong> liên hệ quý khách xác nhận đơn hàng thành
            công.
          </p>
          <ul style="list-style-type: disc;">
            <li>
              <strong>Khu vực Hồ Chí; Minh</strong>: 1 - 2 ngày làm việc (không
              tính cuối tuần)
            </li>
            <li>
              <strong>Khu vực tỉnh thành khác</strong>: 3 - 7 ngày làm việc
              (không tính cuối tuần)
            </li>
          </ul>
          <p>
            Thời gian giao hàng trên là theo dự kiến. Thực tế có thể dao động
            sớm hoặc muộn hơn tùy theo sản phẩm, địa chỉ giao hàng và một số
            điều kiện khách quan mà <strong>Jewelry Silver Shop</strong> không thể kiểm soát
            được (Ví dụ: công ty vận chuyển, hỏng hóc phương tiện, thiên tai, lũ
            lụt,...).
          </p>
          <p>
            Trong những trường hợp thời gian giao không đúng dự kiến. Vui lòng
            liên hệ trực tiếp <em>hotline: <strong></strong></em>
          </p>
        </div>
      </div>
    </div>
    <h2>Sản phẩm cùng danh mục</h2>
    <div class="container">
        <div class="carousel slide multi-item-carousel" data-ride="carousel" id="theCarousel">
          <div class="carousel-inner row w-100 mx-auto">
            @foreach ($related_products as $related_product)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }} col-md-4">
                <section class="products-container products-container__collection">
                    <div class="container-limitter">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="product-item product-item__grid">
                            <div >
                              <div class="product-media">
                                <div class="product-thumbnail">
                                  <a
                                    href="{{URL::to('/products/'.$related_product->id)}}"
                                    title="{{$related_product->name}}"
                                  >
                                  </a>

                                  <a
                                    href="{{URL::to('/products/'.$related_product->id)}}"
                                    title="{{$related_product->name}}"
                                  >
                                    <img
                                      class="/products/{{$related_product->id}}"
                                      src="{{asset('upload/products/'.$related_product->id.'/'.$related_product->image)}}"
                                      alt=""
                                    />
                                  </a>
                                </div>
                              </div>
                              <div class="product-flag">
                                <div
                                  class="product-status product-status__new"
                                  style="display: none;"
                                ></div>

                                <div class="product-status product-status__sale"></div>
                              </div>
                              <div class="product-action">
                                <a
                                  href="javascript:void(0)"
                                  data-id="products/{{$related_product->id}}"
                                  class="awe-button product-quick-view btn-quickview"
                                  data-toggle="tooltip"
                                  data-placement="left"
                                  title="products.product.quickview"
                                >
                                  <i class="line quickview"></i>
                                </a>
                                <form
                                  action="/cart/add"
                                  method="post"
                                  class="variants AddToCartForm-1028367663"
                                  enctype="multipart/form-data"
                                >
                                  <input type="hidden" name="id" value="1062004568" />
                                  <a
                                    class="btn-addToCart  product-add-cart"
                                    data-toggle="tooltip"
                                    data-placement="left"
                                    title="Them vao gio"
                                    href="javascript:void(0)"
                                    ><i class="line addcart"></i
                                  ></a>
                                </form>
                              </div>
                              <div class="product-info">
                                <h2 class="product-name">
                                  <a
                                    href="{{URL::to('/products/'.$related_product->id)}}"
                                    title="{{$related_product->name}}"
                                >{{$related_product->name}}</a
                                  >
                                </h2>
                                <div class="product-price">
                                  <span class="price">
                                    {{number_format($related_product->price)}}
                                  </span>

                                  <span class="compare-price"><del>(380,000₫)</del></span>
                                </div>
                                <a
                                  class="ts-viewdetail"
                                  href="{{URL::to('/products/'.$related_product->id)}}"
                                  ><span class="icon icon-arrows-slim-right"></span
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".small_img").click(function() {
        $(".big_img").attr("src", $(this).attr("src"));
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".big_img").imagezoomsl({
        zoomrange: [3, 3],
      });
    });
  </script>
  <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();


    $('.multi-item-carousel').on('slide.bs.carousel', function (e) {
  let $e = $(e.relatedTarget),
      itemsPerSlide = 3,
      totalItems = $('.carousel-item', this).length,
      $itemsContainer = $('.carousel-inner', this),
      it = itemsPerSlide - (totalItems - $e.index());
  if (it > 0) {
    for (var i = 0; i < it; i++) {
      $('.carousel-item', this).eq(e.direction == "left" ? i : 0).
        // append slides to the end/beginning
        appendTo($itemsContainer);
    }
  }
});
  </script>
  @endsection
</div>
