<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <!-- <a href="{{ url('/') }}" class="mobile-logo"><img src="{{ asset('assets/images/logo_bizi.png') }}"  class="img-fluid" alt="logo"></a> -->
                    Admin
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }} "
                                        class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ asset('assets/images/svg-icon/verticle.svg') }} "
                                        class="img-fluid menu-hamburger-vertical" alt="verticle">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();"
                                    data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                    <img src="{{ asset('assets/images/svg-icon/collapse.svg') }} "
                                        class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }} "
                                        class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <!-- <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="logobar">
                                    <a href="{{ url('/') }}" class="logo logo-large"><img src="{{ asset('assets/images/logo_bizi.png') }}" class ="img-fluid" alt="logo"></a>
                                </div>
                            </li>
                           
                        </ul>
                    </div> -->
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                            class="img-fluid menu-hamburger-collapse" alt="collapse" style="">
                                        <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                            class="img-fluid menu-hamburger-close" alt="close" style="display: none;">
                                    </a>
                                </div>
                            </li>
                            <!-- <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li> -->
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">

                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <div class="toggle">
                                        <span>🌙</span>
                                        <input type="checkbox" id="toggle-switch" />
                                        <label for="toggle-switch"><span class="screen-reader-text">Toggle Color
                                                Scheme</span></label>
                                        <span>☀️</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="/assets/images/users/profile.svg" class="img-fluid"
                                                alt="profile"><span
                                                class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink"
                                            style="">
                                            <div class="dropdown-item">
                                                <div class="profilename">
                                                    <h5>{{ \Auth::user()->name }}</h5>
                                                </div>
                                            </div>
                                            <div class="userbox">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            <img src="{{ asset('assets/images/svg-icon/logout.svg') }} "
                                                                class="img-fluid" alt="logout">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- <li class="list-inline-item menubar-toggle">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="{{ asset('assets/images/svg-icon/collapse.svg') }} " class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{ asset('assets/images/svg-icon/close.svg') }} " class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                 </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Topbar -->
    <!-- Start Breadcrumbbar -->
   
        <div class="breadcrumbbar">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="page-title">@yield('title')</h4>
                    <div class="breadcrumb-list">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widgetbar">
                        @yield('rightbar-action')

                    </div>
                </div>
            </div>
        </div>
 
    <!-- End Breadcrumbbar -->
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    {{-- <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2021 choco - All Rights Reserved.</p>
        </footer>
    </div> --}}
    <!-- End Footerbar -->
</div>
