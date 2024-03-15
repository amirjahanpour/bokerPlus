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
                            <form method="POST" action="{{route('contactDetail.create')}}">
                                @csrf
                                <label for="message"></label>
                                <input type="text" id="message" name="email" class="border bg-white rounded-pill"
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
    @if ($errors->any())
        <section class="section pb-0">
            <div class="row">
                <div class="alert alert-success error_message">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if(session()->has('success'))
        <section class="section pb-0">
            <div class="row">
                <div class="alert alert-success error_message">
                    {{ session('success') }}
                </div>
            </div>
        </section>
    @endif
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">مزایای کانال سیگنال بروکر پلاس</h4>
                        <h5 class="text-muted para-desc mx-auto mb-0">بدون نیاز به پرداخت هزینه</h5>
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
                            <i class="uil uil-phone-volume d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">پشتیبان آنلاین</a>
                            <p class="text-muted mt-2">پشتیبانی آنلاین 24 ساعته در تلگرام برای معامله گران بازار فارکس</p>
                            <a href="javascript:void(0)" class="text-primary read-more"></a>
                            <i class="uil uil-phone-volume text-primary full-img"></i>
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
                        <h4 class="title mb-4">
                            مدیریت رمزنگاری برای مشاغل
                        </h4>
                        <p class="text-muted">
                            به دلیل استفاده گسترده از آن به عنوان متن پر کننده برای طرح بندی, غیرقابل
                            خواندن از اهمیت زیادی برخوردار است: ادراک انسان برای شناسایی الگوها و تکرارهای خاص در متن
                            تنظیم
                            شده است. اگر توزیع حروف تأثیر بصری داشته باشد.
                        </p>
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
                    <img src="{{asset('asset/images/index/mobile_telegram.png')}}" class="img-fluid" alt="">
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
                        <form method="POST" action="{{route('contactDetail.create')}}">
                            @csrf
                            <div class="mb-2">
                                <input type="email" id="message" name="message" class="rounded-pill" placeholder="ایمیل:">
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
@endsection
