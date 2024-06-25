@extends('frontend.layouts.app')

@section('title')
Ship A1 Blog Page
@endsection

@section('content')
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Blog Standard</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
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
<section class="tj-blog-standard">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-details-wrapper">
                    @foreach ($blogs as $blog)
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a
                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                    
                                    {{-- <img src="{{ asset('frontend/images/blog/blog-14.jpg') }}" alt="Blog" /></a> --}}
                                    <img src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                            </div>
                            <div class="active-text">
                                <span class="p-2">
                                    <span><i class="fa-light fa-user"></i></span> <span style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                    <span><i class="flaticon-calendar"></i></span> <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                </span>
                                <!-- <a
                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                    {{ $blog->meta_title }}</a> -->
                            </div>
                            <div class="tj-content-box">
                                <div class="blog-content-area">
                                    <div class="blog-header">
                                        <h3>
                                            <a class="title-link"
                                                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                {{ $blog->post_name }}
                                                
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- <div>
                                        {{ Illuminate\Support\Str::limit($blog->post_short_description, 120, '...') }}
                                    </div> -->
                                    <div>
                                        {!! Illuminate\Support\Str::limit($blog->post_short_description ?: $blog->post_description, 120, '...') !!}
                                    </div>
                                    <!-- <div class="blog-meta">
                                        <div class="meta-list">
                                            <ul class="list-gap">
                                                <li><i class="fa-light fa-user"></i> <a href="#">
                                                        {{ $blog->user->name }}</a></li>
                                                <li>
                                                    <i class="flaticon-calendar"></i> <span>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                                {{-- <p>
                                    {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                </p> --}}
                                <div class="read-more">
                                    <a
                                        @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                        Read More<i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="tj-blog-item-three">
                        <div class="tj-blog-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('frontend/images/blog/blog-15.jpg') }}" alt="Blog" /></a>
                        </div>
                        <div class="active-text">
                            <a href="blog-details.html"> Logistics</a>
                        </div>
                        <div class="tj-content-box">
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="blog-details.html">
                                            Companies in Their Green Transition</a>
                                    </h3>
                                </div>
                                <div class="blog-meta">
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#"> Admin</a></li>
                                            <li>
                                                <i class="flaticon-calendar"></i> <span> Mar 12, 2023</span>
                                            </li>
                                            <li>
                                                <i class="fa-light fa-comment"></i> <span> Comment (4)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, atomorum ds sosidon ium est as Id vim rrem princi
                                pes suas molesti interpretarisLorem ipsum dolor sit amet, atomorum ds sosidon
                                ium est as Id vim rrem princi pes suas molesti interpretaris
                            </p>
                            <div class="read-more">
                                <a href="blog-details.html">
                                    Read More <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="details-quote-content">
                        <div class="details-quote-box">
                            <img src="{{ asset('frontend/images/icon/quote.svg ') }}" alt="Icon" />
                            <p>
                                Tosser argy-bargy mush loo at public school Elizabeth up the duff buggered
                                chinwag on your bike mate don’t get shirty with me super, Jeffrey bobby Richard
                                cheesed off spend a penny a load of old tosh blag horseTosser argy-bargy mush
                                loo at public school Elizabeth up the duff buggered chinwag on your bike mate
                                don’t get
                            </p>
                            <h5 class="title">David Smith</h5>
                        </div>
                    </div>
                    <div class="tj-blog-item-three">
                        <div class="tj-blog-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('frontend/images/blog/blog-16.jpg ') }}" alt="Blog" /></a>
                        </div>
                        <div class="active-text">
                            <a href="blog-details.html"> Logistics</a>
                        </div>
                        <div class="tj-content-box">
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="blog-details.html">
                                            Introduce new suas in this spring</a>
                                    </h3>
                                </div>
                                <div class="blog-meta">
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#"> Admin</a></li>
                                            <li>
                                                <i class="flaticon-calendar"></i> <span> Aug 11, 2023</span>
                                            </li>
                                            <li>
                                                <i class="fa-light fa-comment"></i> <span> Comment (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, atomorum ds sosidon ium est as Id vim rrem princi
                                pes suas molesti interpretarisLorem ipsum dolor sit amet, atomorum ds sosidon
                                ium est as Id vim rrem princi pes suas molesti interpretaris
                            </p>
                            <div class="read-more">
                                <a href="blog-details.html">
                                    Read More <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    {{ $blogs->links('partials.custom_pagination') }}

                    <!-- <div class="tj-sidebar-pagination text-center">
                        <ul class="list-gap">
                            <li><a class="active-color" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a href="#"><i class="flaticon-right-chevron"></i></a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        <div class="col-lg-4">
            <div class="details-sidebar-inner">
                      <div class="tj-sidebar-widget sidebar-search">
                        <form action="#">
                            <input type="text" class="form-control" name="search" id="searchOne" placeholder="Search">
                            <i class="flaticon-loupe"></i>
                        </form>
                      </div>
                      <div class="tj-sidebar-widget sidebar-post">
                        <h5 class="details_title">Recent Blogs</h5>

                        @foreach($recent_blogs as $blog)
                            <div class="tj-post-content">
                                <div class="tj-auother-img">
                                    <a href="">
                                        <img src="{{ asset($blog->post_image) }}" alt="Blog Image"></a>
                                </div>
                                <div class="tj-details-text">
                                    <!-- <div class="details-meta">
                                        <ul class="list-gap">
                                            <li><i class="flaticon-calendar"></i>
                                                {{ $blog->created_at->diffForHumans() }}</li>
                                        </ul>
                                    </div> -->
                                    <div class="tj-details-header">
                                        <h6>
                                            <a @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>

                                                {{$blog->post_name}}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                                   
                            
                            
                            </div>
                    
            </div>

            <div class="tj-appointment-box" data-bg-image="/assets/images/service/service-15.jpg">
                        <div class="tj-appointment-bg" data-bg-image="/assets/images/banner/service_shape.png"></div>
                        <div class="tj-appointment-body">
                            <div class="appointment-percent text-center">
                                <span class="text-uppercase">100% <br />Quality
                                </span>
                            </div>
                            <div class="appointment-content text-center">
                                <h4 class="title">Make An Appointment</h4>
                                <!-- <a class="tel-link" href="tel:+51-(0)-888-455-369"> +51-(0)-888-455-369</a> -->
                                <a class="tel-link" href="tel:+18444744721">1 (844) 474-4721</a>
                                <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                <div class="tj-theme-button">
                                    <a href="{{ route('quote.form.combine') }}" target="_blank">
                                    <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                        Get a Quote <i class="fa-light fa-arrow-right"></i>
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>

                <!-- <div class="details-sidebar-inner">
                    <div class="tj-sidebar-widget sidebar-search">
                        <form action="#">
                            <input type="text" class="form-control" name="search" id="search"
                                placeholder="Search" />
                            <i class="flaticon-loupe"></i>
                        </form>
                    </div>
                    <div class="tj-sidebar-widget sidebar-post">
                        <h5 class="details_title">Popular Post</h5>
                        <div class="tj-post-content">
                            <div class="tj-auother-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/images/blog/blog-13.png') }}" alt="Blog" /></a>
                            </div>
                            <div class="tj-details-text">
                                <div class="details-meta">
                                    <ul class="list-gap">
                                        <li><i class="flaticon-calendar"></i> Jun 13</li>
                                        <li><i class="fa-light fa-comment"></i> (05)</li>
                                    </ul>
                                </div>
                                <div class="tj-details-header">
                                    <h6>
                                        <a href="blog-details.html">This Place Really Place For</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="tj-post-content">
                            <div class="tj-auother-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/images/blog/blog-14.png') }}" alt="Blog" /></a>
                            </div>
                            <div class="tj-details-text">
                                <div class="details-meta">
                                    <ul class="list-gap">
                                        <li><i class="flaticon-calendar"></i> Feb 24</li>
                                        <li><i class="fa-light fa-comment"></i> (02)</li>
                                    </ul>
                                </div>
                                <div class="tj-details-header">
                                    <h6>
                                        <a href="blog-details.html">Place For Awesome Really</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="tj-post-content">
                            <div class="tj-auother-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/images/blog/blog-15.png') }}" alt="Blog" /></a>
                            </div>
                            <div class="tj-details-text">
                                <div class="details-meta">
                                    <ul class="list-gap">
                                        <li><i class="flaticon-calendar"></i> Dec 27</li>
                                        <li><i class="fa-light fa-comment"></i> (06)</li>
                                    </ul>
                                </div>
                                <div class="tj-details-header">
                                    <h6>
                                        <a href="blog-details.html">Awesome Moment This Place Really</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tj-sidebar-widget sidebar-catagory">
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
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!--========== blog details End ==============-->

<!--=========== Newsletter Section Start =========-->
@include('partials.newsletter')
<!--=========== Newsletter Section End =========-->
@endsection
