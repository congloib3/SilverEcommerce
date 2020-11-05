<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="{{asset('css/styles_admin.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{URL::to('admin/dashboard')}}">Jewelry Silver Shop</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="{{URL::to('admin/dashboard')}}"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('getLogout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{URL::to('/admin/categories')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Danh mục sản phẩm
                            </a>
                            <a class="nav-link" href="{{URL::to('/admin/products')}}">
                                <div class="sb-nav-link-icon"><i class="fab fa-buffer"></i></div>
                                Sản phẩm
                            </a>
                            <a class="nav-link" href="{{URL::to('/admin/commodities')}}">
                                <div class="sb-nav-link-icon"><i class="fab fa-trello"></i></div>
                                Loại sản phẩm
                            </a>
                            <a class="nav-link" href="{{URL::to('/admin/banners')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-angle-double-right"></i></div>
                                Banner
                            </a>
                            <a class="nav-link" href="{{URL::to('/admin/delivery')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                Vận chuyển
                            </a>
                            <a class="nav-link" href="{{URL::to('/admin/manage-order')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-scroll"></i></div>
                                Quản lý đơn hàng
                            </a>
                            <a class="nav-link" href="{{URL::to('/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Webstie của tôi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Jewelry
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('admin_content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Jewelry Silver Shop</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>

    </body>
</html>
