<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>لندریک - قالب چندمنظوره ای مدرن html</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template"/>
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern"/>
    <meta name="author" content="JafarAbbasi"/>
    <meta name="email" content="jabasi26@gmail.com"/>
    <meta name="website" content="https://www.rtl-theme.com/author/tn_plugin/"/>
    <meta name="Version" content="v3.2.1"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">
    <!-- Bootstrap -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons -->
    <link href="{{asset('asset/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('asset/css/line.css')}}">
    <!-- Slider -->
    <link rel="stylesheet" href="{{asset('asset/css/tiny-slider.css')}}"/>
    <!-- Main Css -->
    <link href="{{asset('asset/css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt"/>
    <link href="{{asset('asset/css/colors/default.css')}}" rel="stylesheet" id="color-opt">
</head>
<body>
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">
                <img src="{{asset('asset/images/logo-dark.png')}}" class="l-dark" height="24" alt="">
                <img src="{{asset('asset/images/logo-light.png')}}" class="l-light" height="24" alt="">
            </a>
        </div>
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pe-2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-search text-muted"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0"
                         style="width: 300px;">
                        <form>
                            <input type="text" id="text" name="name" class="form-control border bg-white"
                                   placeholder="جستجو...">
                        </form>
                    </div>
                </div>
            </li>
            <li class="list-inline-item mb-0">
                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-user icons"></i></a>
            </li>
            <li class="list-inline-item mb-0">
                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-twitter icons"></i></a>
            </li>
        </ul><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="index.html" class="sub-menu-item">صفحه اصلی </a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">اسناد </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="documentation.html" class="sub-menu-item">مستند </a></li>
                        <li><a href="changelog.html" class="sub-menu-item">تغییرات </a></li>
                        <li><a href="components.html" class="sub-menu-item">اجزاء </a></li>
                        <li><a href="widget.html" class="sub-menu-item">ابزارک </a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="https://www.rtl-theme.com/?p=133270" target="_blank" class="btn btn-primary">خرید از راست
                    چین </a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>

@yield('content')

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
        data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- Style switcher -->
<div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
    <div>
        <h6 class="title text-center">رنگ خود را انتخاب کنید </h6>
        <ul class="pattern">
            <li class="list-inline-item">
                <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color4" href="javascript: void(0);" onclick="setColor('red')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color7" href="javascript: void(0);" onclick="setColor('cyan')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
            </li>
        </ul>

        <h6 class="title text-center pt-3 mb-0 border-top">تنظیمات قالب </h6>
        <ul class="text-center list-unstyled mb-0">
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-rtl')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark-rtl')"> </a>
            </li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)"
                                  class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2"
                                  onclick="setTheme('style-dark')">تیره </a></li>
            <li class="d-grid"><a href="javascript:void(0)"
                                  class="btn btn-sm btn-block btn-dark light-version t-light mt-2"
                                  onclick="setTheme('style')">روشن </a></li>
        </ul>
    </div>
    <div class="bottom">
        <a href="javascript: void(0);" class="settings bg-white shadow d-block">
            <i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i>
        </a>
    </div>
</div>
<!-- end Style switcher -->
<!-- javascript -->
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<!-- SLIDER -->
<script src="{{asset('asset/js/tiny-slider.js')}}"></script>
<!-- Icons -->
<script src="{{asset('asset/js/feather.min.js')}}"></script>
<!-- Switcher -->
<script src="{{asset('asset/js/switcher.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('asset/js/plugins.init.js')}}"></script>
<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{asset('asset/js/app.js')}}"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>
</html>
