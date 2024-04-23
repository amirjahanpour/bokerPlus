@extends('layouts.app')
@section('content')
        <section class="bg-half d-table w-100" style="background: url({{ asset('asset/images/index/dollar.jpg') }}) center center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title text-white title-dark"> تماس با ما </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('index')}}">بروکر پلاس</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Start Contact -->
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
        <section class="section pb-0">
            <div class="container">
                <div class="row">
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card border-0 text-center features feature-clean">--}}
{{--                            <div class="icons text-primary text-center mx-auto">--}}
{{--                                <i class="uil uil-phone d-block rounded h3 mb-0"></i>--}}
{{--                            </div>--}}
{{--                            <div class="content mt-3">--}}
{{--                                <h5 class="fw-bold">تلفن </h5>--}}
{{--                                <p class="text-muted">شماره تماس بروکر پلاس</p>--}}
{{--                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!--end col-->--}}

{{--                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">--}}
{{--                        <div class="card border-0 text-center features feature-clean">--}}
{{--                            <div class="icons text-primary text-center mx-auto">--}}
{{--                                <i class="uil uil-envelope d-block rounded h3 mb-0"></i>--}}
{{--                            </div>--}}
{{--                            <div class="content mt-3">--}}
{{--                                <h5 class="fw-bold">ایمیل </h5>--}}
{{--                                <p class="text-muted">ایمیل پشتیبانی بروکر پلاس</p>--}}
{{--                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!--end col-->--}}
                    <div class="col-md-12 mt-12 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="icons text-primary text-center mx-auto">
                                <i class="uil uil-telegram d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-3">
                                <h5 class="fw-bold">تلگرام </h5>
                                    <p class="text-muted">پشتیبانی بروکر پلاس در تلگرام </p>
                                    <a href="https://t.me/alparigroup_persian" data-type="iframe" target="_blank"
                                       class="video-play-icon text-primary lightbox">
                                        ارسال پیام به پشتیبانی
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card shadow rounded border-0">
                            <div class="card-body py-5">
                                <h4 class="card-title">در تماس باشید !</h4>
                                <div class="custom-form mt-3">
                                    <form method="POST" action="{{route('contactDetail.create')}}">
                                        @csrf
                                        <p id="error-msg" class="mb-0"></p>
                                        <div id="simple-msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">نام شما <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="نام :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">نام خانوادگی شما <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="family" id="family" type="text" class="form-control ps-5" placeholder="نام خانوادگی :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">تلفن همراه</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                                        <input name="phone" id="phone" type="text" class="form-control ps-5" placeholder="تلفن همراه :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">آیدی تلگرام </label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="send" class="fea icon-sm icons"></i>
                                                        <input name="telegram" id="telegram" type="text" class="form-control ps-5" placeholder="آیدی تلگرام :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">نام بروکر </label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="dollar-sign" class="fea icon-sm icons"></i>
                                                        <input name="brokerName" id="brokerName" type="text" class="form-control ps-5" placeholder="نام بروکر :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">شماره کابین </label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="hexagon" class="fea icon-sm icons"></i>
                                                        <input name="cabinNumber" id="cabinNumber" type="text" class="form-control ps-5" placeholder="شماره کابین :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">نظرات  </label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                        <textarea name="message" id="message" rows="2" class="form-control ps-5" placeholder="پیام :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" id="submit" name="send" class="btn btn-primary">ارسال پیام</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end custom-form-->
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <img src="{{asset('asset/images/index/contact.svg')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@endsection
