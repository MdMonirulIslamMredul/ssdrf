<style>
    /* Nav item spacing */
    ul.nav-menu > li {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>

<div class="full-width-header home8-style4 main-home">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container-fluid">
                <div class="row y-middle">
                    <div class="col-lg-2">
                        <div class="logo-cat-wrap">
                            <div class="logo-part">
                                <a href="{{route('front.page')}}">
                                    @php $logo = \App\Models\Logo::latest()->first() @endphp
                                    @php $menus = \App\Models\Menu::get() @endphp
                                    @php $results = \App\Models\Result::get() @endphp


                                    <img class="normal-logo" src="{{asset($logo->logo_image1??null)}}" alt="">
                                    <img class="sticky-logo" src="{{asset($logo->logo_image??null)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <li class="menu-item {{Request::routeIs('front.page') ? 'current-menu-item' : ''}}"> <a href="{{route('front.page')}}">Home</a>

                                        </li>
                                        {{-- <li class="menu-item {{Request::routeIs('about.page') ? 'current-menu-item' : ''}}">--}}
                                        {{-- <a href="{{route('about.page')}}">About</a>--}}
                                        {{-- </li>--}}
                                        <li class="menu-item-has-children">
                                            <a href="#">About</a>
                                            @php $abouts = \App\Models\About::get() @endphp
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ route('message.page') }}">Message</a>
                                                </li>
                                                @foreach($abouts as $about)
                                                <li class="menu-item">
                                                    <a href="{{route('about.page',['id'=>$about->id])}}">{{$about->title}}</a>
                                                </li>
                                                @endforeach

                                                <li class="menu-item {{Request::routeIs('team.page') ? 'current-menu-item' : ''}}">
                                                    <a href="{{route('team.page')}}">Our Team Members</a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="menu-item-has-children">
                                            {{-- use service table data as course list --}}
                                            <a href="{{route('services')}}">Our Courses</a>
                                            @php $nav_services = \App\Models\Service::where('status', 1)->get() @endphp
                                            <ul class="sub-menu">
                                                @foreach($nav_services as $nav_service)
                                                <li class="menu-item">
                                                    <a href="{{route('services.details', ['id' => $nav_service->id])}}">{{$nav_service->service_title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @foreach($menus as $menu)
                                        @php $sub_menus = \App\Models\SubMenu::Where('menu_id',$menu->id)->get() @endphp

                                        <li class="menu-item-has-children">
                                            <a href="#">{{$menu->title}}</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{route('menu.sub_menus',['menu_id'=>$menu->id])}}" style="color:#FF5421; font-weight:600;">See All {{$menu->title}}</a>
                                                </li>
                                                @foreach($sub_menus as $sub_menu)
                                                <li class="menu-item">
                                                    <a href="{{route('submenu.details',['id'=>$sub_menu->id])}}">{{$sub_menu->title}}</a>
                                                </li>
                                                @if($menu->title_bangla == "Project")
                                                <li class="menu-item">
                                                    <a href="{{route('research.page')}}">Research or Publication</a>
                                                </li>

                                                @endif

                                                @endforeach
                                                @if($menu->title_bangla == "Services")
                                                <li class="menu-item">
                                                    <a href="{{route('consultancy.page')}}">Student Consultancy</a>
                                                </li>

                                                @endif
                                            </ul>
                                        </li>
                                        @endforeach



                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">Results</a>
                                            <ul class="sub-menu">

                                                <li class="menu-item">
                                                    <a href="{{route('create.result')}}">Create Result</a>
                                        <a href="{{route('blogs.page')}}">Upload Result</a>
                                        <a href="">Edit Result</a>
                                        </li>

                                    </ul>
                                    </li> --}}
                                    <li class="menu-item {{Request::routeIs('blogs.page') ? 'current-menu-item' : ''}}">
                                        <a href="{{route('blogs.page')}}">Blog</a>

                                    </li>

                                    <li class="menu-item {{Request::routeIs('membership.page') ? 'current-menu-item' : ''}}">
                                        <a href="{{route('membership.page')}}">Join Us</a>
                                    </li>


                                    <li class="menu-item {{Request::routeIs('gallery.page') ? 'current-menu-item' : ''}}">
                                        <a href="{{route('gallery.page')}}">Gallery</a>
                                    </li>
                                    <!-- <li class="menu-item {{Request::routeIs('media.page') ? 'current-menu-item' : ''}}">
                                        <a href="{{route('media.page')}}">MEDIA</a>
                                    </li> -->
                                    <li class="menu-item {{Request::routeIs('contacts') ? 'current-menu-item' : ''}}">
                                        <a href="{{route('contacts')}}">Contact</a>
                                    </li>

                                    @if(Auth::user()!=null)
                                    @if(Auth::user()->is_admin == 0)
                                    <!--<li class="menu-item-has-children d-inline d-lg-none">-->
                                    <!--    <a href="#">Profile</a>-->
                                    <!--    <ul class="sub-menu">-->
                                    <!--        <li class="menu-item">-->
                                    <!--            <a href="{{route('user.profile.settings')}}" class="crt-btn btn2 w-100">Profile Settings</a>-->
                                    <!--        </li>-->
                                    <!--        <li class="menu-item">-->
                                    <!--            <a href="{{route('enrollment.page')}}" class="crt-btn btn2 w-100">Enrollments</a>-->
                                    <!--        </li>-->
                                    <!--        <div class="cart-btn text-center">-->
                                    <!--            <a class="crt-btn btn2 w-100" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="">Logout Out</a>-->
                                    <!--            <form action="{{route('logout')}}" id="logoutForm" method="POST">-->
                                    <!--                @csrf-->
                                    <!--            </form>-->
                                    <!--        </div>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    @endif
                                    @else

                                    <!--<a class="readon orange-btn main-home btn-sm d-block text-center d-lg-none" href="{{route('login')}}">Login</a>-->

                                    @endif




                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->

                        </div>
                    </div>
                    <div class="col-lg-1 text-right">
                        <div class="expand-btn-inner">
                            <ul>
                                @if(Auth::user()!=null)
                                @if(Auth::user()->is_admin == 0)
                                <!--<li class="user-icon cart-inner no-border mini-cart-active">-->
                                <!--    <a href="#"><i class="fa fa-user"></i></a>-->
                                <!--    <div class="woocommerce-mini-cart text-left">-->
                                <!--        <div class="cart-bottom-part">-->

                                <!--            <div class="total-price text-center">-->
                                <!--                <a href="{{route('user.profile.settings')}}" class="crt-btn btn2 w-100">Profile</a>-->
                                <!--            </div>-->
                                <!--            <div class="total-price text-center">-->
                                <!--                <a href="{{route('enrollment.page')}}" class="crt-btn btn2 w-100">Enrollments</a>-->
                                <!--            </div>-->

                                <!--            <div class="cart-btn text-center">-->
                                <!--                <a class="crt-btn btn2 w-100" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="">Logout Out</a>-->
                                <!--                <form action="{{route('logout')}}" id="logoutForm" method="POST">-->
                                <!--                    @csrf-->
                                <!--                </form>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</li>-->
                                @endif
                                @else
                                <!--<a class="readon orange-btn main-home btn-sm" href="{{route('login')}}">Login</a>-->
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

    </header>
    <!--Header End-->
</div>