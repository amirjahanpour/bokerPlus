@extends('layouts.app')
@section('content')
        <!-- start -->
        <section class="bg-half d-table w-100" style="background: url({{ asset('storage/'.$postContent->post->posterSID) }}) center center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title">{{$postContent->post->description}}</h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{route('post.index')}}">وبلاگ بروکر پلاس</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- end -->
        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->
        <!-- Start Privacy -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card shadow rounded border-0">
                            <div class="card-body">
                                {!! tiptap_converter()->asHTML($postContent->content) !!}
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Privacy -->
        <!-- TAG CLOUDS -->
        <section class="section">
            <div class="container">
            <div class="card border-0 sidebar sticky-bar rounded shadow">
                <div class="card-body">
                    <div class="widget mb-4 pb-2">
                        <h5 class="widget-title">برچسب ها</h5>
                        <div class="tagcloud mt-4">
                            @foreach($postContent->hashtag as $hashtag)
                                <a class="rounded">{{$hashtag}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--end TAG CLOUDS-->
@endsection
