<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>بروکر پلاس</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template"/>
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/index/IMG_20230602_163909_037.png')}}">
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
            <a class="logo" href="{{route('index')}}">
                <img src="{{asset('asset/images/index/IMG_20230602_163909_037.png')}}" class="l-dark" height="80" alt="">
                <img src="{{asset('asset/images/index/IMG_20230602_163909_037.png')}}" class="l-light" height="100" alt="">
            </a>
        </div>
        <ul class="buy-button list-inline mb-0">
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
                <li><a href="{{route('index')}}" class="sub-menu-item">صفحه اصلی </a></li>
                <li><a href="{{route('post.index')}}" class="sub-menu-item">وبلاگ</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>

@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="{{asset('asset/images/logo-light.png')}}" height="24" alt="">
                </a>
                <p class="mt-4">کار با لنـدریــک را شروع کنید که می تواند همه چیزهایی را که برای ایجاد آگاهی ، ایجاد
                    ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                data-feather="facebook"
                                class="fea icon-sm fea-social"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                data-feather="twitter"
                                class="fea icon-sm fea-social"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                data-feather="linkedin"
                                class="fea icon-sm fea-social"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">شرکت </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>
                            درباره
                            ما </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>
                            خدمات
                        </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تیم
                        </a>
                    </li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> قیمت
                            گذاری </a></li>
                    <li><a href="#" class="text-foot"><i
                                class="uil uil-angle-left-b me-1"></i>
                            پروژه </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> مشاغل
                        </a>
                    </li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>
                            وبلاگ
                        </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>
                            ورود
                        </a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">لینک های مفید </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات
                            سایت
                        </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> حریم
                            خصوصی </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>
                            مستند
                        </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تغییرات
                        </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> اجزاء
                        </a>
                    </li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">خبرنامه </h5>
                <p class="mt-4">ثبت نام کنید و آخرین نکات را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe mb-3">
                                <label class="form-label">ایمیل خود را بنویسید <span
                                        class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe"
                                           class="form-control ps-5 rounded" placeholder="ایمیل شما: " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary"
                                       value="خبرنامه">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-start">
                    <p class="mb-0">©
                        <script>document.write(new Date().getFullYear())</script>
                        لنـدریــک. طراحی شده با <i class="mdi mdi-heart text-danger"></i> توسط <a
                            href="https://www.rtl-theme.com/author/tn_plugin/" target="_blank" class="text-reset">جعفر
                            عباسی </a>.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled text-sm-end mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                src="{{asset('asset/images/payments/american-ex.png')}}"
                                class="avatar avatar-ex-sm"
                                title="آمریکن اکسپرس" alt=""></a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                src="{{asset('asset/images/payments/discover.png')}}"
                                class="avatar avatar-ex-sm"
                                title="کشف کردن" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                src="{{asset('asset/images/payments/master-card.png')}}"
                                class="avatar avatar-ex-sm"
                                title="مستر کارت" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                src="{{asset('asset/images/payments/paypal.png')}}"
                                class="avatar avatar-ex-sm"
                                title="پی پال" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img
                                src="{{asset('asset/images/payments/visa.png')}}"
                                class="avatar avatar-ex-sm"
                                title="ویزا" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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
                <a class="color1" href="javascript: void(0);" onclick="setColor('default','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color2" href="javascript: void(0);" onclick="setColor('green','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color3" href="javascript: void(0);" onclick="setColor('purple','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color4" href="javascript: void(0);" onclick="setColor('red','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color7" href="javascript: void(0);" onclick="setColor('cyan','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue','{{url('/asset/css/')}}')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
            </li>
        </ul>

        <h6 class="title text-center pt-3 mb-0 border-top">تنظیمات قالب </h6>
        <ul class="text-center list-unstyled mb-0">
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-rtl','{{url('/asset/css/')}}')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style','{{url('/asset/css/')}}')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark-rtl','{{url('/asset/css/')}}')"> </a>
            </li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark','{{url('/asset/css/')}}')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)"
                                  class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2"
                                  onclick="setTheme('style-dark','{{url('/asset/css/')}}')">تیره </a></li>
            <li class="d-grid"><a href="javascript:void(0)"
                                  class="btn btn-sm btn-block btn-dark light-version t-light mt-2"
                                  onclick="setTheme('style','{{url('/asset/css/')}}')">روشن </a></li>
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
