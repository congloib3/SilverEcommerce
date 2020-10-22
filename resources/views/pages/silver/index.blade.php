@extends('layout')
@section('content')
<section class="banner-container">
    <div class="container-limitter">
        <div class="main-logo">
            <a href="/" title="My Shop - Trang suc bac">
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
                    <a href="{{'/jewelry-silver/'.$category->id}}">
                        <img src="{{$category->image}}" alt="{{$category->name}}">
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
                    <div data-id="product-1022948948" data-publish-date="">
                        <div class="product-media">
                            <div class="product-thumbnail">

                                <a href="/products/lac-tay-bac-hanada-lac-unisex-moc-xich-ban-dep"
                                    title="Lắc Tay Bạc 925 Hanada N1234.B.0.B250.0260 Lắc Unisex Móc Xích Bản Dẹp">
                                    <img class="product-thumbnail-image"
                                        src="{{$product->image}}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="product-flag">
                            <div class="product-status product-status__new" style="display: none;">
                            </div>

                            <div class="product-status product-status__sale">
                            </div>

                        </div>
                        <div class="product-action">
                            <a href="javascript:void(0)" data-id="lac-tay-bac-hanada-lac-unisex-moc-xich-ban-dep"
                                class="awe-button product-quick-view btn-quickview" data-toggle="tooltip"
                                data-placement="left" title="products.product.quickview">
                                <i class="line quickview"></i>
                            </a>
                            <form action="/cart/add" method="post" class="variants AddToCartForm-1022948948"
                                enctype="multipart/form-data">

                                <a class="btn-select-option  product-add-cart" data-toggle="tooltip"
                                    data-placement="left" title="Ban het"
                                    href="/products/lac-tay-bac-hanada-lac-unisex-moc-xich-ban-dep"><i
                                        class="line addcart"></i></a>

                            </form>
                        </div>
                        <div class="product-info">
                            <h2 class="product-name">
                                <a href="/products/lac-tay-bac-hanada-lac-unisex-moc-xich-ban-dep"
                                    title="Lắc Tay Bạc 925 Hanada N1234.B.0.B250.0260 Lắc Unisex Móc Xích Bản Dẹp">{{$product->name}}</a>
                            </h2>
                            <div class="product-price">
                                <span class="price">
                                    {{number_format($product->price)}}
                                </span>
                                <span class="compare-price"><del>(250,000₫)</del></span>
                            </div>
                            <a class="ts-viewdetail"
                                href="/products/lac-tay-bac-hanada-lac-unisex-moc-xich-ban-dep"><span
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
