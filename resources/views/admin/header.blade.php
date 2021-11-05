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

{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-copy"></i>--}}
{{--                        <p>--}}
{{--                            Головна сторінка--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_home') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Головна сторінка</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('home_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нова головна сторінка</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Головна Apple
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_apple') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Apple</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('apple_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий категорія Apple</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Головна Asus
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_asus') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Asus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('asus_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий категорія Asus</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Головна Huawei
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_huawei') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Huawei</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('huawei_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий категорія Huawei</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Головна Nokia
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_nokia') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Nokia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('nokia_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий категорія Nokia</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Головна Samsung
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_samsung') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Сторінка Samsung</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('samsung_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Новий категорія Samsung</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-chart-pie"></i>--}}
{{--                        <p>--}}
{{--                            Про нас--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_about') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Про нас</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('about_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нова інформація</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-tree"></i>--}}
{{--                        <p>--}}
{{--                            Бренд--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_brand') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Бренд</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('brand_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Новий бренд</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p>--}}
{{--                            Пропозиції--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/general.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Пропозиції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/forms/advanced.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нові пропозиції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-table"></i>--}}
{{--                        <p>--}}
{{--                            Контакти--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/tables/simple.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Контакти</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/tables/data.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нові контакти</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-tree"></i>--}}
{{--                        <p>--}}
{{--                            Акції--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_action') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Акції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('action_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нові акції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_secondaction') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Другі акції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('secondaction_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нові другі акції</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-table"></i>--}}
{{--                        <p>--}}
{{--                            Товар--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_product') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Товар</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('product_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Новий товар</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Сторінка категорій
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категорії</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Нова категорія</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Коментарі
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin_comment') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Коментарі</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('comment_form') }}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Нові коментарі</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
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


