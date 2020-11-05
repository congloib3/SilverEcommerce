@extends('layout')
@section('content')
<div class="collections-container collections-container__index">
    <div id="carousel_jewelry" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            @foreach (range(0, count($banners)-1) as $i)
                <li data-target="#carousel_jewelry" data-slide-to="{{$i}}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach ($banners as $banner)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img style="max-height:380px" class="d-block w-100" src="{{asset('upload/banners/'.$banner->id.'/'.$banner->image)}}" alt="First slide">
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel_jewelry" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel_jewelry" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <div class="container-limitter">
        <div class="row">
            @foreach($commodities as $commodity)
            <div class="col-sm-6 col-xs-12">
                <div class="collection-item collection-item__index">
                    <a href="{{URL::to('/jewelry/'.$commodity->id.'-'.Str::slug($commodity->name))}}">
                    <img src="{{asset('upload/commodities/'.$commodity->id.'/'.$commodity->image)}}" alt="{{$commodity->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<section class="policies-container policies-container__index">
  <div class="container-limitter">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__payment">
          <div class="policy-content">
            <h3><i class="fas fa-phone"></i> Liên hệ</h3>
            <p>
              <strong>My Shop</strong>: Q.1
            </p>
            <p>
              <strong>Hotline</strong>: <a href="tel:+842873096968">037.7777.7777</a>
            </p>
            <p>
              <strong>Giờ mở cửa</strong> 24/24
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__warranty">
          <div class="policy-content">
            <h3><i class="far fa-question-circle"></i> Trợ giúp</h3>
            <p>
                <i class="fas fa-angle-double-right"></i> <a href="/cach-do-size-nhan">Cách đo size nhẫn</a>
            </p>
            <p>
                <i class="fas fa-angle-double-right"></i> <a href="/cach-do-size-day-chuyen">Cách do size dây chuyền</a>
            </p>
            <p>
                <i class="fas fa-angle-double-right"></i> <a href="/cach-do-size-lac">Cách do size lắc</a>
            </p>
            <p>
                <i class="fas fa-angle-double-right"></i></span> <a href="/cach-do-size-lac">Cách đo size vòng tay</a>
            </p>
            <p>
                <i class="fas fa-angle-double-right"></i></span> <a href="/cach-giu-cho-trang-suc-bac-sang-dep">Cách giữ cho trang sức bạc sáng đẹp.</a>
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__shipping">
          <div class="policy-content">
            <h3><i class="fas fa-book-open"></i> Chính sách</h3>
            <p>
                <i class="fas fa-angle-double-right"></i><a href="#">Chính sách bảo hành</a>
            </p>
            <p>
                <i class="fas fa-angle-double-right"></i><a href="#">Giao hàng và thanh toán</a>
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
