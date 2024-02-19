@extends('layouts.app')
@section('content')
    <section class="bg-home d-flex align-items-center"
             style="background: url({{asset('asset/images/crypto/image.jpg')}}) top;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h4 class="heading fw-bold text-white title-dark mb-3">
                            جلوتر از همه، با بروکر پلاس
                            <br>
                        </h4>
                        <h5 class="para-desc mx-auto text-light title-dark">
                            با مجموعه بروکر پلاس درآمد دلاری داشته باشید و از نظر اقتصادی یک گام جلوتر از بقیه باشید. ما در این مسیر تا رسیدن شما به درآمد دلاری در کنارتان خواهیم ماند.
                        </h5>
                        <div class="subcribe-form mt-4 pt-2">
                            <form>
                                <label for="email"></label>
                                <input type="text" id="email" name="email" class="border bg-white rounded-pill"
                                       required placeholder="شماره همراه یا آیدی تلگرام">
                                <button type="submit" class="btn btn-pills btn-primary">
                                    عضویت در کانال VIP
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">مزایای کانال سیگنال فارکس پلاس</h4>
                        <h5 class="text-muted para-desc mx-auto mb-0">استفاده رایگان از کانال سیگنال</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-game-structure d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">تیم تحلیل قدرتمند</a>
                            <p class="text-muted mt-2">تیم تخصصی تحلیل که از بین بهترین تریدرهای ایران برگزیده شده‌اند.</p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-game-structure text-primary full-img"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-focus-target d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">ارائه سیگنال واقعی</a>
                            <p class="text-muted mt-2">سیگنال‌ها همگی دارای حد سود و ضرر مشخص هستند و برآیند واقعی دارند.</p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-focus-target text-primary full-img"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-chart-bar d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">بازدهی بالا</a>
                            <p class="text-muted mt-2">
                                ریسک به ریوارد تمام سیگنال‌ها بالای ۱:۲ هستند که باعث بازدهی بالا معاملات می‌شود.
                            </p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-chart-bar text-primary full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-moneybag-alt d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">بدون نیاز به پرداخت هزینه</a>
                            <p class="text-muted mt-2">این کانال کاملا رایگان است و نیازی به پرداخت اشتراک ماهیانه نیست.</p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-moneybag-alt text-primary full-img"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-exchange d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">ایده‌های معاملاتی</a>
                            <p class="text-muted mt-2">
                                در کانال سیگنال به ایده‌ها و تحلیل‌های بزرگترین تریدرهای جهان دسترسی خواهید داشت.
                            </p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-exchange text-primary full-img"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-clean course-feature p-4 overflow-hidden shadow text-center">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-comment-alt-message d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">ارائه گزارش هفتگی</a>
                            <p class="text-muted mt-2">
                                در پایان هر هفته، نتیجه و عملکرد سیگنال‌های هفته گذشته به صورت شفاف ارائه خواهد شد.
                            </p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-comment-alt-message text-primary full-img"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('asset/images/index/forex_laptop.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">مدیریت رمزنگاری برای مشاغل</h4>
                        <p class="text-muted">به دلیل استفاده گسترده از آن به عنوان متن پر کننده برای طرح بندی, غیرقابل
                            خواندن از اهمیت زیادی برخوردار است: ادراک انسان برای شناسایی الگوها و تکرارهای خاص در متن
                            تنظیم
                            شده است. اگر توزیع حروف تأثیر بصری داشته باشد.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>راه حل های بازاریابی
                                دیجیتال
                                برای فردا
                            </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>پوست خود را متناسب با نام
                                تجاری
                                خود ایجاد کنید
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">اطلاعات بیشتر <i
                                class="uil uil-angle-left-b"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">ابزارهای هوشمند برای تیم های مالی</h4>
                        <p class="text-muted">این مانع از تأثیرگذاری الگوهای تکراری در تصور بصری کلی می شود و مقایسه
                            انواع
                            مختلف را تسهیل می کند. بعلاوه ، وقتی متن ساختگی نسبتاً واقع بینانه باشد ، سودمند است.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>راه حل های بازاریابی
                                دیجیتال
                                برای فردا
                            </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>پوست خود را متناسب با نام
                                تجاری
                                خود ایجاد کنید
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">اطلاعات بیشتر <i
                                class="uil uil-angle-left-b"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="{{asset('asset/images/crypto/iphone.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 border-bottom border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/amazon.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/google.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/lenovo.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/paypal.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/shopify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('asset/images/client/spotify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section pb-0" style="background: url({{asset('asset/images/crypto/bg.jpg')}}) center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title text-white title-dark mb-4">از صفر تا رمزنگاری در دقیقه.</h4>
                        <p class="text-light para-dark para-desc mx-auto">کار با لنـدریــک را شروع کنید که می تواند همه
                            چیزهایی را که برای ایجاد آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                    </div>
                    <div class="subcribe-form mt-4">
                        <form>
                            <div class="mb-2">
                                <input type="email" id="email" name="email" class="rounded-pill" placeholder="ایمیل:">
                                <button type="submit" class="btn btn-pills btn-primary">مشترک شدن</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 pt-2">
                        <img src="{{asset('asset/images/crypto/cta.png')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
