@extends('layouts.app')
@section('content')
        <section class="bg-half d-table w-100" style="background: url({{ asset('asset/images/index/2.jpg') }}) center center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title text-white title-dark"> وبلاگ </h4>
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
        <!-- Hero End -->
        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->
        <!-- Blog Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-12 mb-4 pb-2">
                                    <div class="card blog rounded border-0 shadow overflow-hidden">
                                        <div class="row align-items-center g-0">
                                            <div class="col-md-6">
                                                <a href="{{route('post.show',['title' => $post->slugTitle])}}">
                                                    <img src="{{ url('storage/'.$post->posterSID) }}" class="img-fluid" alt="">
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="card-body content">
                                                    <h5>
                                                        <a href="{{route('post.show',['title' => $post->slugTitle])}}" class="card-title title text-dark">
                                                            {{$post->description}}
                                                        </a>
                                                    </h5>
                                                    <div class="post-meta float-end d-flex justify-content-between mt-3 align-content-end">
                                                        <a href="{{route('post.show',['title' => $post->slugTitle])}}" class="text-muted readmore">
                                                            ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end row-->
                                    </div><!--end blog post-->
                                </div><!--end col-->
                            @endforeach
                            <!-- PAGINATION START -->
                            <div class="col-12">
                                <ul class="pagination justify-content-center mb-0">
                                    {{$posts->links("pagination::bootstrap-4")}}
                                </ul>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div><!--end col-->
                    <!-- BLog End -->
                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">
                                <!-- Categories -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">دسته بندی ها </h5>
                                    <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                        @foreach($tags as $tag)
                                        <li class="active"><a href="{{route('post.index',$tag->id)}}">{{$tag->name}}</a> <span class="float-end">{{$tag->countPost}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Categories -->
                                <!-- SOCIAL -->
                                <div class="widget">
                                    <h5 class="widget-title">دنبال کردن ما</h5>
                                    <ul class="list-unstyled social-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@endsection
