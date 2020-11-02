@extends('layout')
@section('content')
<section class="banner-container">
    <div class="container-limitter">
        <div class="main-logo">
            <a href="{{URL::to('/')}}" title="My Shop - Trang suc bac">
                <h1>Jewelry</h1>
            </a>
        </div>
    </div>
</section>
<div class="collections-container collections-container__collection">
    <div class="container-limitter">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="collection-item collection-item__collection">
                    <a href="{{URL::to('/chi-tiet/'.$category->id)}}">
                        <img src="{{asset('upload/categories/'.$category->id.'/'.$category->image)}}" alt="{{$category->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="products-container products-container__index">
    <div class="container-limitter">
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="product-item product-item__grid">
                    <div>
                        <div class="product-media">
                            <div class="product-thumbnail">
                                <a href="{{URL::to('/chi-tiet/'.$product->id)}}"
                                    title="{{$product->name}}">
                                    <img class="product-thumbnail-image"
                                        src="{{asset('upload/products/'.$product->id.'/'.$product->image)}}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-name">
                                <a href="{{URL::to('/chi-tiet/'.$product->id)}}"
                                    title="{{$product->name}}">{{$product->name}}</a>
                            </h2>
                            <div class="product-price">
                                <span class="price">
                                    {{number_format($product->price)}}
                                </span>
                                {{-- <span class="compare-price"><del>(250,000₫)</del></span> --}}
                            </div>
                            <a class="ts-viewdetail"
                                href="{{URL::to('/chi-tiet/'.$product->id)}}"><span
                                    class="icon icon-arrows-slim-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
