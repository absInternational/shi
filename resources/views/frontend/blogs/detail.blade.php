@extends('frontend.layouts.app')

@section('title')
{{ $blog->meta_title ? $blog->meta_title : 'Opps Title is Not Availabe' }}
@endsection

@section('meta_description')
{{ $blog->meta_description }}
@endsection

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">{{ $blog->post_name }}</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <span>
                                <span>Blog</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--========== blog details Start ==============-->
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a href="blog-details.html">
                                    <img src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                            </div>
                            <div class="active-text">
                                <span class="p-2">
                                    <span><i class="fa-light fa-user"></i></span> <span style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                    <span><i class="flaticon-calendar"></i></span> <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                </span>
                                
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="blog-details.html">
                                            {{ $blog->post_name }}
                                        </a>
                                    </h3>
                                </div>
                                <!-- <div class="blog-meta">
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#">
                                                    {{ $blog->user->name }}</a></li>
                                            <li><i class="flaticon-calendar"></i> <span>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <p>
                                {!! $blog->post_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-search">
                            <form action="#">
                                <input type="text" class="form-control" name="search" id="searchOne"
                                    placeholder="Search" />
                                <i class="flaticon-loupe"></i>
                            </form>
                        </div>
                        <div class="tj-sidebar-widget sidebar-post">
                            <h5 class="details_title">Recent Blogs</h5>
                            @foreach ($recent_blogs as $blog)
                                <div class="tj-post-content">
                                    <div class="tj-auother-img">
                                        <a
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            <img src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                                    </div>
                                    <div class="tj-details-text">
                                        <!-- <div class="details-meta">
                                            <ul class="list-gap">
                                                <li><i class="flaticon-calendar"></i>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</li>
                                            </ul>
                                        </div> -->
                                        <div class="tj-details-header">
                                            <h6>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    {{ $blog->post_name }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="tj-sidebar-widget sidebar-catagory">
                            <h5 class="details_title">All Catagory</h5>
                            <ul class="list-gap">
                                <li>
                                    <a href="#">Introductions
                                        <span> 15</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Engineering
                                        <span> 14</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Transport
                                        <span> 07</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Logistics
                                        <span> 04</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Business
                                        <span> 06</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Work Permits
                                        <span> 08</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget sidebar-tags">
                            <h5 class="details_title">Popular Tags</h5>
                            <div class="tagcloud">
                                <a href="#"> Business</a>
                                <a href="#"> Career</a>
                                <a href="#"> Logistics</a>
                                <a href="#"> Delivery</a>
                                <a href="#"> Consulting</a>
                                <a href="#"> Travel</a>
                                <a href="#">Education</a>
                                <a href="#">America</a>
                                <a href="#">Maintenance</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection
