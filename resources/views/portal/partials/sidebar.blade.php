 <!-- leftbar-tab-menu -->
 <div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand" style="background-color: #fff">
        <a href="{{ route('admin.index')}}" class="logo" >
            {{-- <span>
                <img src="{{ asset('assets/img/logo/nav-log.png')}}" alt="logo-small" class="logo-sm">
            </span> 
            <span>
                <img src="{{ asset('assets/img/logo/nav-log.png')}}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('assets/img/logo/nav-log.png')}}" alt="logo-large" class="logo-lg logo-dark">
            </span> --}}
        </a>
    </div> 
    <div class="sidebar-user-pro media border-end">                    
        <div class="position-relative mx-auto">
            <img src="{{ asset('portal/images/users/user-avatar.png')}}" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">{{ Auth::user()->name}} </h5>  
            <p class="opacity-50 mb-0">{{ Auth::user()->email}}</p>          
        </div>                    
    </div>
   
    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.dashboard')}}" role="button"
                            aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!--end nav-item-->
                   
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.application.create') }}">
                            <i class="ti ti-file menu-icon"></i>
                            <span>Application </span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-asana menu-icon"></i>
                            <span>Courses</span>
                        </a>
                        <div class="collapse " id="sidebarProjects">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></a>
                                </li><!--end nav-item-->
                               
                            </ul><!--end nav-->
                        </div><!--end sidebarProjects-->
                    </li><!--end nav-item-->

                    <!-- Transaction Log -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.transaction') }}">
                            <i class="ti ti-wallet menu-icon"></i>
                            <span>Transaction Log</span>
                        </a>
                    </li><!--end nav-item-->

                  

                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">S<span>etting</span></li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarElements">
                            <i class="ti ti-settings menu-icon"></i>
                        <span>Setting</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Profile</a>
                                </li><!--end nav-item--> 
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <a class="nav-link" href="{{ route('logout') }}" 
                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                            Logout
                                        </a>
                                    </form>
                                </li>
                                <!--end nav-item-->
                                
                                
                            </ul><!--end nav-->
                        </div><!--end sidebarElements-->
                    </li><!--end nav-item-->

                </ul>
                
            </div><!--end sidebarCollapse-->
        </div>
    </div>    
</div>
<!-- end left-sidenav-->
<!-- end leftbar-menu-->
