<style>
    .active {
        color: #8fc445 !important;
    }
</style>

<header class="tj-header-section" id="header-sticky">
    <div class="container" style=" border-radius: 12px; ">
        <div class="row">
            <div class="col-lg-12" >
                <div class="bg-color d-flex flex-wrap">
                    <!-- Logo Area Start -->
                    <div class="logo-area">
                        <div class="logo-box">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/logo.png') }}"
                                    alt="Logo" /></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->

                    <div class="header-content-area">
                        <!-- Topbar Section Start -->
                        <div class="header-topbar">
                            <div
                                class="topbar-content-area d-flex flex-wrap align-items-center justify-content-between">
                                <div class="header-content-left">
                                    <span> Mon - Sat: 8 AM - 7 PM, Sunday: Closed</span>
                                </div>
                                <div class="header-content-right">
                                    <div class="header-social-icon">
                                        <ul class="list-gap social-list">
                                            <li>
                                                <a href="https://www.facebook.com/ShipA1/"> <i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/@shipA1392"> <i
                                                        class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/shipa1-transport/"> <i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/ShipA1Transport"> <i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.yelp.com/biz/ship-a1-hunt-valley"> <i
                                                        class="fa-brands fa-yelp"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/+14107184031"> <i
                                                        class="fa-brands fa-whatsapp"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/@shipA1392"> <i
                                                        class="fa-brands fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Topbar Section End-->

                        <!-- Header menu Start -->
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="mobile-logo-area d-lg-none">
                                <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/logo.png') }}"
                                        alt="Logo" /></a>
                            </div>
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu">
                                    @php
                                    $navbars = App\Models\Menu::where('status',1)->orderBy('id', 'ASC')->get();
                                    @endphp


                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 1)

                                    
                                    <li class="ab-gap">
                                        <a href="{{ route('welcome') }}"
                                            class="{{ Request::routeIs('welcome') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
                                    </li>
                                
                                @endif
                                    @endforeach



                                    {{-- <li class="ab-gap">
                                        <a href="{{ route('welcome') }}"
                                            class="{{ Request::routeIs('welcome') ? ' active' : '' }}"> Home</a>
                                    </li> --}}
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 2)
                                    <li class="ab-gap">
                                        <a href="{{ route('quote.form.combine') }}"
                                            class="{{ Request::routeIs('quote.form.combine') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
                                        <ul class="list-gap sub-menu-list" >
                                            <div class="row">
                                                <div class="col-sm-4 bd-l bd-r">
                                                    <a class=" mb-3"
                                                        style="
                                                             letter-spacing: 1px;
                                                              font-size: larger;
                                                              text-decoration: none;
                                                              font-weight: bold;
                                                         "
                                                        href="">Vehicle Transportation</a>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.atv_utv') }}"> Atv Utv
                                                            Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.car') }}"> Car </a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.golf_cart') }}"> Golf Cart</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.form.vehicle.car') }}">
                                                            Motorcycle </a>
                                                    </li>


                                                </div>

                                                <div class="col-sm-4 bd-r">
                                                    <a class=" mb-3"
                                                        style="
                                                          letter-spacing: 1px;
                                                          font-size: larger;
                                                          text-decoration: none;
                                                          font-weight: bold;
                                                      "
                                                        href="#">Heavy Equipment</a>
                                                    <!-- <li>
                                                        <a class="title" target="_blank" href=""> Heavy    </a>
                                                    </li> -->

                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.boat') }}"> Boat Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('commercial.truck.transport') }}">
                                                            Commercial
                                                            Truck Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('frontend.forms.construction_transport') }}">
                                                            Construction Transport</a>
                                                    </li>

                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('frontend.forms.excavator') }}"> Excavator
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('frontend.forms.farm_transport') }}"> Farm
                                                            Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('frontend.forms.rv_transport') }}"> RV
                                                            Transport</a>
                                                    </li>

                                                </div>
                                                <div class="col-sm-4">
                                                    <a class=" mb-3"
                                                        style="
                                                             letter-spacing: 1px;
                                                            font-size: larger;
                                                            text-decoration: none;
                                                            font-weight: bold;
                                                         "
                                                        href="">Freight Transportation</a>

                                                    <li>
                                                        <a class="title" target="_blank" href="{{ route('frontend.forms.hazmattransport') }}" target="_blank"> Hazmat
                                                            Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.dryvan') }}" target="_blank"> Dry Van
                                                            Transportation</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" target="_blank" href="{{ route('frontend.forms.reefertrucking') }}"> Reefer
                                                            Trucking</a>
                                                    </li>
                                                    <a class=" mb-3"
                                                        style="
                                                             letter-spacing: 1px;
                                                            font-size: larger;
                                                            text-decoration: none;
                                                            font-weight: bold;
                                                         "
                                                        href="">RORO</a>
                                                    <li>
                                                        <a class="title" target="_blank"
                                                            href="{{ route('form.vehicle.roro') }}"> Roro
                                                            Transportation</a>
                                                    </li>
                                                </div>
                                                <!-- <div class="col-sm-3">
                                                    <a class=" mb-3" style="
                                                             letter-spacing: 1px;
                                                             font-size: medium;
                                                             text-decoration: underline;
                                                             font-weight: bold;
                                                         " href="">RORO</a>
                                                    <li>
                                                        <a class="title" target="_blank" href="{{ route('form.vehicle.roro') }}" > Roro Transportation</a>
                                                    </li>
                                                </div> -->
                                            </div>
                                        </ul>

                                    </li>
                                    @endif
                                    @endforeach

                                    {{-- <li class="ab-gap">
                                        <a href="{{ route('services') }}"> Service</a>
                                    </li> --}}
                                    @php
                                        $categories = \App\Models\ServiceCategory::has('services')->get();
                                        $services = \App\Models\Service::all();
                                    @endphp
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 3)
                                    <li class="current-menu-item menu-item-has-children">
                                        <a href="{{ route('services') }}"
                                            class="{{ Request::routeIs('services*') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                        <ul class="list-gap sub-menu-list sub-menu-list-2" >
                                            <div class="row">
                                                <div class="col-sm-4 bd-l bd-r">
                                                    {{-- <a class=" mb-3"
                                                        href="{{ route('services', ['category' => $category->slug]) }}">{{ $category->name }}</a> --}}
                                                    <a class=" mb-3 "style=" letter-spacing: 1px;font-size: larger;text-decoration: none;font-weight: bold;" 
                                                    href="">Vehicle Transportation</a>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Vehicle Transportation')
                                                            <li>
                                                                <a class="title" target="_blank"
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="col-sm-4 bd-r">
                                                   
                                                    <a class=" mb-3" style=" letter-spacing: 1px;font-size: larger;text-decoration: none;font-weight: bold;" href="">Heavy Equipment</a>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Heavy Equipment')
                                                            <li>
                                                                <a class="title" target="_blank"
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="col-sm-4 ">
                                                    {{-- <a class=" mb-3"
                                                        href="{{ route('services', ['category' => $category->slug]) }}">{{ $category->name }}</a> --}}
                                                    <a class=" mb-3" style=" letter-spacing: 1px;font-size: larger;text-decoration: none;font-weight: bold;" href="">Freight Transportation</a>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Freight Transportation')
                                                            <li>
                                                                <a class="title" target="_blank"
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                    <a class=" mb-3" href="" style=" letter-spacing: 1px;font-size: larger;text-decoration: none;font-weight: bold; ">RORO</a>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'RORO')
                                                            <li>
                                                                <a class="title"  target="_blank"
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                
                                            </div>
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 4)
                                    <li class="ab-gap">
                                        <a href="{{ route('autoAuction') }}"
                                            class="{{ Request::routeIs('autoAuction') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 5)
                                    <li class="ab-gap">
                                        <a href="{{ route('blogs') }}"
                                            class="{{ Request::routeIs('blogs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 6)
                                    <li>
                                        <a href="{{ route('contactUs') }}"
                                            class="{{ Request::routeIs('contactUs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Mainmenu Item End -->

                            <div class="header-menu-select d-flex align-items-center justify-content-end">
                        {{-- <div class="header-language">
                                    <ul class="languages dropdown">
                                        <li class="activated"></li>
                                        <li>
                                            <ul class="lang_lists">
                                                <li>
                                                    <a><img src="{{ asset('frontend/images/icon/flag-1.png')}}"
                                alt="Icon" /></a>
                                </li>
                                <li>
                                    <a><img src="{{ asset('frontend/images/icon/flag-2.png')}}" alt="Icon" /></a>
                                </li>
                                <li class="active">
                                    <a><img src="{{ asset('frontend/images/icon/flag4.png')}}" alt="Icon" /></a>
                                </li>
                                </ul>
                                </li>
                                </ul>
                            </div> --}}
                                <div class="tj-header-button d-none d-lg-block">
                                    <a class="tj-header-btn" href="{{ route('order.tracking') }}">
                                        TRACK ORDER <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                                <div class="tj-hambagur-icon d-lg-none">
                                    <a class="canva_expander nav-menu-link menu-button" href="#">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Header end End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
