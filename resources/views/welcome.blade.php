<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>

    <header class="header-container" id="header">
        <div class="container-limitter">
            <div class="header-container-inner">
                <div class="header-container__left">
                    <!--Dropdown menu-->
                    <div style="display: none;" class="block-element display-mode__mobile display-mode__tablet mobile-navigator-container">
                        <ul class="nav-menu-container">
                            <li class="nav-menu-item"><a href="#"><span class="far fa-bars nav-menu-item__icon"></span></a></li>
                        </ul>
                    </div>
                    <nav class="navigator-container">
                        <ul class="nav-menu-container">
                            <li class="nav-menu-item nav-menu-container__level-0"><a href="/">TRANG CHỦ</a></li>
                            <li class="nav-menu-item nav-menu-container__level-0 nav-menu-item__has-sub">
                                <a href="#">SẢN PHẨM<span class="fas fa-plus nav-menu-item__expand"></span><span class="fas fa-minus nav-menu-item__collapse"></span></a>
                                <ul class="nav-menu-container__sub nav-menu-container__level-1">
                                    <li class="nav-menu-item active nav-menu-item__has-sub">

                                        <a href="#">Bạc 925&nbsp;<span class="fas fa-plus nav-menu-item__expand"></span><span class="fas fa-minus nav-menu-item__collapse"></span></a>

                                        <ul class="nav-menu-container__sub nav-menu-container__level-2">

                                            <li class="nav-menu-item">
                                                <a href="/collections/nhan">Nhẫn</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/bong-tai">Bông tai</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/lac-tay">Lắc tay</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/lac-chan">Lắc chân</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/kieng-tay">Kiềng tay</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/day-chuyen">Dây chuyền</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-menu-item active nav-menu-item__has-sub">

                                        <a class="block-element display-mode__desktop" href="#">&nbsp;</a>

                                        <ul class="nav-menu-container__sub nav-menu-container__level-2">

                                            <li class="nav-menu-item">
                                                <a href="/collections/nhan-cap">Nhẫn Cặp</a>
                                            </li>

                                            <li class="nav-menu-item">
                                                <a href="/collections/me-va-be">Mẹ và Bé</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-menu-item active nav-menu-item__has-sub">

                                        <a href="#">Vàng&nbsp;<span class="fas fa-plus nav-menu-item__expand"></span><span class="fas fa-minus nav-menu-item__collapse"></span></a>

                                        <ul class="nav-menu-container__sub nav-menu-container__level-2">

                                            <li class="nav-menu-item">
                                                <a href="/collections/trang-suc-vang">Nhẫn Vàng</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu-item nav-menu-container__level-0">
                                <a href="/blogs/news">BLOG</a>
                            </li>
                            <li class="nav-menu-item nav-menu-container__level-0">
                                <a href="/pages/lien-he">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-container__right">
                    <div class="user-navigation-container">
                        <ul class="user-menu-container">
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="far fa-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <modal aria-labelledby="add-to-cart-modal" class="modal modal-centered fade" id="add-to-cart-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                Bạn đã thêm sản phẩm vào giỏ hàng thành công.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <form class="cart-form" action="/cart" method="post" novalidate="">
                                    <button class="btn btn-primary form-control" name="checkout" type="submit">Thanh toán</button>
                                </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <a class="btn btn-info form-control" href="/cart">Thay đổi giỏ hàng</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <button class="btn btn-info form-control" data-dismiss="modal">Tiếp tục mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
        <modal aria-labelledby="cart-modal" class="modal fade" id="cart-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="col-xs-5">
                            <h4 class="text-uppercase">Giỏ hàng <span class="badge inline" id="mini-cart-item-count">0</span></h4>
                        </div>
                        <div class="col-xs-7" style="text-align:right">
                            <h4>Tổng: <span id="mini-cart-total-price" style="font-size:17px">0</span></h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <ul id="mini-cart" class="shopping-cart-container">
                                    <li>Giỏ hàng trống</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group row hide" id="mini-cart-action">
                            <div class="col-xs-12">
                                <form class="cart-form" action="/cart" method="post" novalidate="">
                                    <button class="btn btn-primary form-control" name="checkout" type="submit">Thanh toán</button>
                                </form>
                                <div class="divider divider-md"></div>
                            </div>
                            <div class="col-xs-6">
                                <a class="btn btn-default form-control" href="/cart">Thay đổi giỏ hàng</a>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-default form-control">Tiếp tục mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
        <modal aria-labelledby="login-modal" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">

                    <form accept-charset="UTF-8" action="/account/login" id="customer_login" method="post">
                        <input name="form_type" type="hidden" value="customer_login">
                        <input name="utf8" type="hidden" value="✓">

                        <div class="modal-header">
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Đăng nhập</h4>

                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="user-menu__username">Tên đăng nhập</label>
                                </div>
                                <div class="col-sm-12">
                                    <input autofocus="" class="form-control" id="user-menu__username" name="customer[email]" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="user-menu__password">Mật khẩu</label>
                                </div>
                                <div class="col-sm-12">
                                    <input class="form-control" id="user-menu__password" name="customer[password]" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary form-control" type="submit">Đăng nhập</button>
                                    <div class="divider divider-md"></div>
                                    <button class="btn btn-info form-control">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </modal>
        <modal aria-labelledby="search-modal" class="modal fade" id="search-modal" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <form class="ts-search-form search-form" action="/search" method="get">
                        <div class="modal-header">
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Tìm kiếm</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input name="type" type="hidden" value="product">
                                        <input autofocus="" class="form-control" id="search-product-1" name="q" type="search" value="">
                                        <input type="hidden" name="options[prefix]" value="last">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit"><i class="far fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </modal>
    </header>

    <section class="main">
        @yield('home')
    </section>

    <footer class="footer-container" id="footer">
        <section class="bottom-nav-container">
            <div class="container-limitter">
                <hr>
                <a href="/" title="Trang chủ">TRANG CHỦ</a>
                <a href="/collections/all" title="Sản phẩm">SẢN PHẨM</a>
                <a href="/blogs/news" title="Blog">BLOG</a>
                <a href="/lien-he" title="Liên hệ">LIÊN HỆ</a>
            </div>
        </section>

        <section class="branding-container">
            <div class="container-limitter">
                <div class="branding-container-inner">
                    <div class="row">
                        <div class="col-xs-12">
                            Copyright © LS 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
