@extends('layout')
@section('content')
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
          <li><a href="{{URL::to('/')}}'">Trang chủ /</a></li>
        <li class="active">&nbsp;Kết quả tìm kiếm</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<div class="container-limitter">
	Kết quả tìm kiếm cho từ khóa: <b>{{$key}}</b>
</div>
<section class="products-container products-container__collection">
  @if($products)
  <div class="container-limitter">
    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="product-item product-item__grid">
          <div >
            <div class="product-media">
              <div class="product-thumbnail">
                <a
                  href="{{URL::to('/chi-tiet/'.$product->slug)}}"
                  title="{{$product->name}}"
                >
                </a>
                <a
                  href="{{URL::to('/chi-tiet/'.$product->slug)}}"
                  title="{{$product->name}}"
                >
                  <img
                    class="/chi-tiet/{{$product->id}}"
                    src="{{asset('upload/products/'.$product->id.'/'.$product->image)}}"
                    alt="{{$product->name}}"
                  />
                </a>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-name">
                <a
                  href="{{URL::to('/chi-tiet/'.$product->slug)}}"
                  title="{{$product->name}}"
              >{{$product->name}}</a
                >
              </h2>
              <div class="product-price">
                <span class="price">
                  {{number_format($product->price,0,',','.')}}
                </span>
                {{-- <span class="compare-price"><del>(380,000₫)</del></span> --}}
              </div>
              <a
                class="ts-viewdetail"
                href="{{URL::to('/chi-tiet/'.$product->slug)}}"
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
    </div>
  </div>
  @endif
</section>
@endsection
