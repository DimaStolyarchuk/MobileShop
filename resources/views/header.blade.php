<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href='{{ asset('/') }}'><img src='{{ asset('images/logo.png') }}' alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-5 col-md-5 col-sm-5">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="/">Головна сторинка</a> </li>
                                    <li> <a href="about">Про нас</a> </li>
                                    <li> <a href="brand">Бренд</a> </li>
                                    <li> <a href="basket">Корзина</a> </li>
                                    <li> <a href="contact">Контакти</a> </li>
                                    @guest
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="registration">Реєстрація</a>
                                            </li>
                                        @endif
                                        <li> <a href="entry">Вхід</a> </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #0a0e14!important"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Вихід
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li><img src='{{ asset('icon/call.png') }}' />(097)456 16 60</li>
                            <li><img src='{{ asset('icon/email.png') }}' />dima@gmail.com</li>
                            <li><img src='{{ asset('icon/loc.png') }}' />Адреса: Симиренко 2в</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
