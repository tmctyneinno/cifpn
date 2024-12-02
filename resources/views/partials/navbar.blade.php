 <!-- start header area -->
 <header class="header-two header--sticky">
    <div class="header-top">
        <div class="content">
            <div class="left-header-top">
                <p class="top-details">
                    Admission Going On, Hurry To  <a href="{{ route('home.pages', 'membership-login') }}">Enroll Now <i class="fal fa-arrow-right"></i></a>
                </p>
            </div> 
            <div class="right-header-top">
                <div class="working-time">
                    <i class="far fa-clock"></i>
                    <span>Working: 8:00am - 5pm</span>
                </div>
                <div class="ht-social">
                    <span>Visit Us:</span>
                    <ul>
                        <li>
                            <a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $sociallink->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

 


    <div class="main-header">
        <div class="content">
            <div class="header-left">
                <a class="thumbnail" href="{{ route('home') }}">
                    <img src="{{ asset($contactUs->site_logo)}}"  alt="" style="object-fit: cover; width: 80%;">
                </a> 
                <nav class="nav-main mainmenu-nav d-none d-xl-block">
                    <ul class="mainmenu">
                        @forelse ($menuItems as $item)
                            <li class="menu-item {{ $item->dropdownItems->count() > 0 ? 'has-droupdown' : '' }}">
                                <a class="menu-link" href="{{ route('home.pages', $item->slug) }}">{{ $item->name }}</a>
                                
                                @if($item->dropdownItems->count() > 0)
                                    <ul class="submenu">
                                        @foreach ($item->dropdownItems as $dropdownItem)
                                            <li >
                                                <a href="{{ route('home.pages', $dropdownItem->slug) }}">{{ $dropdownItem->name }}</a>
                                                 
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @empty
                            <p>No data found</p>
                        @endforelse
                        
                     </ul>
                </nav>
            </div>
            <div class="header-right">
                <a href="{{ route('home.pages','membership-login')}}" class="rts-btn btn-primary ml--10  header-one-btn quote-btn">Enroll Now</a>
                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                    <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png')}}" alt="Menu-icon">
                    <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png')}}" alt="Menu-icon">
                </button> 
            </div>
        </div>
    </div>

</header>

<div id="anywhere-home"></div>
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img style="object-fit: cover; width: 100%; height: 51px;" class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-2" href="{{ route('home') }}"><img style="object-fit: cover; width: 100%; height: 51px;"  class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-3" href="{{ route('home') }}"><img style="object-fit: cover; width: 100%; height: 51px;"  class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <a class="logo-4" href="{{ route('home') }}"><img style="object-fit: cover; width: 100%; height: 51px;"  class="logo" src="{{ asset($contactUs->footer_logo)}}" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                The Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN) is a leading professional body dedicated to the advancement of financial crime prevention and fraud control in Nigeria. ...
                           
                <snap ><a href="{{ route('home.pages', 'about-us') }}" class="" style="font-weight: bold">Read more</a></snap>
           </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">{{$contactUs->first_phone}} |<br/> <snap class="ml--30">{{$contactUs->second_phone}}</snap></a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">{{$contactUs->first_email}}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="https://cifpn.org/">https://cifpn.org/</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">{{$contactUs->first_address}}</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $sociallink->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>

        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    @forelse ($menuItems as $item)
                        <li class="menu-item {{ $item->dropdownItems->count() > 0 ? 'has-droupdown' : '' }}">
                            <a class="menu-link" href="{{ route('home.pages', $item->slug) }}">{{ $item->name }}</a>
                            @if($item->dropdownItems->count() > 0)
                                <ul class="submenu">
                                    @foreach ($item->dropdownItems as $dropdownItem)
                                        <li class=" ">
                                            <a href="{{ route('home.pages', $dropdownItem->slug) }}">{{ $dropdownItem->name }}</a> 
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        
                    @empty
                        <p>No data found</p>
                    @endforelse
                </ul>
            </nav>
            
            <div class="social-wrapper-two menu mobile-menu">
                <a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a>
                <a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a>
                <a href="{{ $sociallink->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
           
            <a href="{{ route('home.pages', 'membership-login') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Enroll Now</a>
        </div>

    </div>
    <!-- inner menu area desktop End -->
</div>