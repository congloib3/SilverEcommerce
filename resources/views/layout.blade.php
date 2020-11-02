<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="icon" href="https://www.simmonsfinejewelry.com/wp-content/uploads/2019/02/fav.png" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/general.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/collection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
    <header class="header-container" id="header">
        <div class="container-limitter">
            <div class="header-container-inner">
                <div class="header-container__left">
                    <!--Dropdown menu-->
                    <div class="block-element display-mode__mobile display-mode__tablet mobile-navigator-container">
                        <ul class="nav-menu-container">
                            <li id="menu_show" class="nav-menu-item"><a href="#"><span class="far fa-bars nav-menu-item__icon"></span></a></li>
                        </ul>
                    </div>
                    <nav class="navigator-container">
                        <ul class="nav-menu-container">
                            <li class="nav-menu-item nav-menu-container__level-0"><a href="{{URL::to('/')}}">TRANG CHỦ</a></li>
                            <li id="product_show" class="nav-menu-item nav-menu-container__level-0 nav-menu-item__has-sub">
                                <a href="#">SẢN PHẨM<span class="fas fa-plus nav-menu-item__expand"></span></a>
                                <ul class="nav-menu-container__sub nav-menu-container__level-1">
                                    <li class="nav-menu-item active nav-menu-item__has-sub">

                                        <a href="#">Bạc&nbsp;<span class="fas fa-plus nav-menu-item__expand"></span></a>

                                        <ul class="nav-menu-container__sub nav-menu-container__level-2">
                                            @foreach($silvers as $silver)
                                            <li class="nav-menu-item">
                                                <a href="{{URL::to('/san-pham/'.$silver->id)}}">{{$silver->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-menu-item active nav-menu-item__has-sub">

                                        <a href="#">Đồng Hồ&nbsp;<span class="fas fa-plus nav-menu-item__expand"></span></a>

                                        <ul class="nav-menu-container__sub nav-menu-container__level-2">
                                            @foreach($watchs as $watch)
                                            <li class="nav-menu-item">
                                                <a href="{{URL::to('/san-pham/'.$watch->id)}}">{{$watch->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu-item nav-menu-container__level-0">
                                <a href="{{URL::to('/news')}}">BLOG</a>
                            </li>
                            <li class="nav-menu-item nav-menu-container__level-0">
                                <a href="{{URL::to('/lien-he')}}">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-container__right">
                    <div class="user-navigation-container">
                        <ul class="user-menu-container">
                            <li class="user-menu-item">
                                <a href="/cart" class="user-menu-item__icon"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" class="user-menu-item__icon"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="" id="search_popup" class="user-menu-item__icon"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="user-menu-item">
                                <a href="{{URL::to('admin/login')}}" class="user-menu-item__icon"><i class="far fa-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="main">
        @yield('content')
    </section>

    <footer class="footer-container" id="footer">
        <section class="bottom-nav-container">
            <div class="container-limitter">
                <hr>
                <a href="/" title="Trang chủ">TRANG CHỦ</a>
                <a href="/" title="Sản phẩm">SẢN PHẨM</a>
                <a href="/" title="Blog">BLOG</a>
                <a href="/" title="Liên hệ">LIÊN HỆ</a>
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

    <div id="search-box">
        <div class="container">
            <a class="close" href="#close"></a>
            <div class="search-main">
                <div class="search-inner">
                    <input
                        type="text"
                        id="inputSearch"
                        name="firstname"
                        placeholder=""
                    />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v8.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="115380577027482"
theme_color="#0A7CFF"
logged_in_greeting="Mình có thể tư vấn gì cho bạn?"
logged_out_greeting="Mình có thể tư vấn gì cho bạn?">
    </div>

    <script src="{{asset('js/zoomsl.min.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('js/sweetalert.js')}}"></script>
    <script>
        $("#menu_show").click(function(){
            $(".navigator-container").toggle();
        });
        $("#product_show").click(function(){
            $(".navigator-container .nav-menu-container__level-1").toggle();
        });
        $('#search_popup').click(function() {
            event.preventDefault();
            $("#search-box").addClass("-open");
            setTimeout(function() {
                inputSearch.focus();
            }, 800);
        });

        $('a[href="#close"]').click(function() {
            event.preventDefault();
            $("#search-box").removeClass("-open");
        });

        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $("#search-box").removeClass("-open");
            }
        });
    </script>
</body>

</html>
