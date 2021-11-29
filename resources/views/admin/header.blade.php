<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href='{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/fontawesome-free/css/all.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/jqvmap/jqvmap.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('dist/css/adminlte.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/daterangepicker/daterangepicker.css') }}'>
    <link rel="stylesheet" href='{{ asset('plugins/summernote/summernote-bs4.min.css') }}'>
</head>

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src='{{ asset('dist/img/AdminLTELogo.png') }}' alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href='{{ asset('index3.html') }}' class="brand-link">
        <img src='{{ asset('dist/img/AdminLTELogo.png') }}' alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src='{{ asset('dist/img/user2-160x160.jpg') }}' class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Dima Stolyarchyk</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Бренди
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_brands') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка брендів</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('brands_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий бренди</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Категорії
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Категорій</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий Категорії</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Продукти
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Продуктів</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий Продукти</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<script src='{{ asset('plugins/jquery/jquery.min.js') }}'></script>
<script src='{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}'></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src='{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}'></script>
<script src='{{ asset('plugins/chart.js/Chart.min.js') }}'></script>
<script src='{{ asset('plugins/sparklines/sparkline.js') }}'></script>
<script src='{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}'></script>
<script src='{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}'></script>
<script src='{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}'></script>
<script src='{{ asset('plugins/moment/moment.min.js') }}'></script>
<script src='{{ asset('plugins/daterangepicker/daterangepicker.js') }}'></script>
<script src='{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}'></script>
<script src='{{ asset('plugins/summernote/summernote-bs4.min.js') }}'></script>
<script src='{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}'></script>
<script src='{{ asset('dist/js/adminlte.js') }}'></script>
<script src='{{ asset('dist/js/demo.js') }}'></script>
<script src='{{ asset('dist/js/pages/dashboard.js') }}'></script>


