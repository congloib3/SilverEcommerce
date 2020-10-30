@extends('layout')
@section('content')
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

          <li class="active">&nbsp;Tất cả sản phẩm</li>
        </ol>
      </div>
      <div class="col-sm-6 col-xs-12 pull-right text-right">
        Hiển thị tới của sản phẩm
        <select
          class="form-control input-sm pagination-sort-dropdown"
          style="display:inline-block;max-width:125px;"
        >
          <option value="manual">Đặc biệt</option>
          <option value="best-selling">Bán chạy nhất</option>
          <option value="title-ascending">Tên từ A-Z</option>
          <option value="price-descending">Giá giảm dần</option>
          <option value="price-ascending">Giá tăng dần</option>
          <option value="created-descending">Mới nhất</option>
          <option value="created-ascending">Cũ nhất</option>
        </select>
      </div>
    </div>
  </div>
</section>
<section class="products-container products-container__collection">
  <div class="container-limitter">
    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="product-item product-item__grid">
          <div >
            <div class="product-media">
              <div class="product-thumbnail">
                <a
                  href="{{URL::to('/products/'.$product->id)}}"
                  title="{{$product->name}}"
                >
                </a>

                <a
                  href="{{URL::to('/products/'.$product->id)}}"
                  title="{{$product->name}}"
                >
                  <img
                    class="/products/{{$product->id}}"
                    src="{{asset('upload/products/'.$product->id.'/'.$product->image)}}"
                    alt=""
                  />
                </a>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-name">
                <a
                  href="{{URL::to('/products/'.$product->id)}}"
                  title="{{$product->name}}"
              >{{$product->name}}</a
                >
              </h2>
              <div class="product-price">
                <span class="price">
                  {{number_format($product->price)}}
                </span>
                {{-- <span class="compare-price"><del>(380,000₫)</del></span> --}}
              </div>
              <a
                class="ts-viewdetail"
                href="{{URL::to('/products/'.$product->id)}}"
                ><span class="icon icon-arrows-slim-right"></span
              ></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
        <div class="col-xs-12 col-6">
            {{ $products->links() }}
          </div>
      <div class="col-xs-12 col-6 pull-right text-right">
        <div class="pagination-sort">
          Hiển thị 1 tới 20 của 100 sản phẩm
          <select
            class="form-control input-sm pagination-sort-dropdown"
            style="display:inline-block;max-width:125px;"
          >
            <option value="manual">Đặc biệt</option>
            <option value="best-selling">Bán chạy nhất</option>
            <option value="title-ascending">Tên từ A-Z</option>
            <option value="price-descending">Giá giảm dần</option>
            <option value="price-ascending">Giá tăng dần</option>
            <option value="created-descending">Mới nhất</option>
            <option value="created-ascending">Cũ nhất</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
