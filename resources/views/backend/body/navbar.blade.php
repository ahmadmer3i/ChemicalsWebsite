<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i
            class="flaticon-menu-line-2"></i></a>


    <ul class="navbar-nav flex-row ml-lg-auto">

        <li class="nav-item  d-lg-block d-none">
            <form class="form-inline" role="search">
                <input type="text" class="form-control search-form-control" placeholder="Search...">
            </form>
        </li>


        <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-user-12"></span>
            </a>
            <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                <a class="dropdown-item" href="user_profile.html">
                    <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                </a>
                <a class="dropdown-item" href="user_lockscreen_1.html">
                    <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('admin.logout')}}">
                    <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                </a>
            </div>
        </li>


    </ul>
</header>
