<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo-->
            <div>
                <a href=" {{route('dashboard')}} " class="logo">
                     <img src="{{ asset('assets/images/kacusa-logo.png')}}" class="logo-lg" alt="" height="75">
                    <img src="{{ asset('assets/images/kacusa-logo.png')}}" class="logo-sm" alt="" height="75">
                </a>
            </div>
            <!-- End Logo-->

            <div class="menu-extras topbar-custom navbar p-0">
                <ul class="list-inline d-none d-lg-block mb-0">

                        <li class="hide-phone app-search float-left">
                            <form role="search" class="navbar-form">
                                <input type="text" placeholder="Search..." class="form-control search-bar">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                </ul>

                <ul class="mb-0 nav navbar-right ml-auto list-inline">
                    <li class="list-inline-item dropdown notification-list">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                            <li class="list-group">
                                <a href="javascript:void(0);" class="dropdown-item notify-item mt-2">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Emails Delivered<span class="text-muted"> The first batch of emails sent!</span></p>
                                </a>
                                <!-- item-->

                                <!-- last list item -->
                                <a href="javascript:void(0);" class="list-group-item text-center">
                                    <small class="text-primary mb-0">View all </small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-inline-item notification-list d-none d-sm-inline-block">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt=" {{Auth::user()->name}} " class="rounded-circle">
                            <span class="profile-username">
                                                        {{Auth::user()->first_name}} <span class="mdi mdi-chevron-down font-15"></span>
                                                    
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" class="dropdown-item"> Profile <small>Coming Soon</small></a></li>
                            {{-- <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings </a></li> --}}
                            {{-- <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li> --}}
                            <li class="dropdown-divider"></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <li><a href="href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"" class="dropdown-item"> Logout</a></li>
                            </form>
                        </ul>
                    </li>

                    <li class="menu-item dropdown notification-list list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>

            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div>
        <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">

            <div id="navigation">

                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    @member
                    <li class="has-submenu">
                        <a href=" {{route('home')}} "><i class="fas fa-home"></i> Home</a>
                    </li>
                    @endmember
                    @leader
                    <li class="has-submenu">
                        <a href=" {{route('dashboard')}} "><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('user.index')}} "><i class="fas fa-users"></i> Members</a>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="{{route('leadership.index')}} "><i class="fas fa-users"></i> Leadership</a>
                    </li>
                    @endleader
                </ul>
                <!-- End navigation menu -->
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>