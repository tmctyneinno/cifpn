@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">About Us</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages','about-us') }}" class="active">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- start about our company -->
<div class="rts-about-our-company-h2 rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                
                <div class="title-area about-company">
                    <h6>About Us</h6>
                    {{-- <h2 class="title">Professional And Dedicated <br>Consulting Services</h2> --}}
                </div>
                <div class="about-company-wrapper " style="text-align: justify">
                    {!! $aboutUs->content !!}
                </div> 
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                <div class="about-company-thumbnail">
                    <img src=" {{ $aboutUs->image }}" alt="Business_company">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start about our company End -->

<!-- Objectives -->
<div class="rts-business-goal rts-business-goal5 mt--0 rts-section-gapBottom">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="title-area">
                    <h2 class="title">
                        Objectives
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <!-- business goal left -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 first-child">
                <ul class="content-box first">
                    <li class="content left">
                        <p class="desc">
                            To promote excellence and professional competence in financial crime prevention and fraud control.
                        </p>
                    </li>
                    <li class="content left one">
                        <p class="desc">
                            To enhance the understanding and implementation of compliance frameworks across sectors.
                        </p>
                    </li>
                    <li class="content left">
                         <p class="desc">
                            To foster cooperation and collaboration between public and private institutions in combating financial crime.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="business-goal-one">
                    <img src="assets/images/business-goal/characters.png" alt="Business_Goal">
                    <div class="shape"><img src="assets/images/business-goal/icon/line.png" alt=""></div>
                </div>
            </div>
            <!-- business goal right -->

            <!-- right area business -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                <ul class="content-box last">
                    <li class="content right">
                        <p class="desc">
                            To provide education, training, and certification for professionals to build capacity in fraud detection and prevention.
                        </p>
                    </li>
                    <li class="content right two">
                        <p class="desc">
                            To advocate for the development and enforcement of robust anti-fraud regulations and policies in Nigeria.
                        </p>
                    </li>
                    <li class="content right">
                        <p class="desc">
                            To create a network of experts and practitioners who can share insights, research, and best practices in combating financial crime.
                        </p>
                    </li>
                </ul>
            </div>
            <!-- right area business ENd -->
        </div>
    </div>
</div>
<!-- Objectives End -->


<!-- Committees -->
<div class="rts-about-area rts-section-gap about-home-seven ">
    <div class="container">
       
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="thumbnail">
                    <img src="assets/images/about/main/about-05.jpg" alt="about_image">
                    <img src="assets/images/about/main/about-02-sm.jpg" alt="small" class="small">
                   
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-start home-seven-about">
                    
                    <h2 class="title">Committees</h2>

                </div>
                <div class="inner-about-home-7">
                    <div class="disc" style="text-align: justify">
                        <ol >
                            <li>
                                <b>Education & Professional Development Committee:</b> 
                                Responsible for the design and delivery of IFPN's educational programs, certifications, and professional development activities.
                            </li>
                            <li>
                                <b>Research & Policy Advocacy Committee:</b>
                                Manages membership services, including recruitment, retention, and adherence to the IFPN's ethical standards.
                            </li>
                            <li>
                                <b>Conferences & Events Committee:</b>
                                Organizes and manages IFPN’s events, conferences, seminars, and other networking activities to foster engagement among members and stakeholders.
                            </li>
                            <li>
                                <b>Compliance & Disciplinary Committee:</b>
                                Ensures members adhere to the highest standards of professionalism and ethical conduct, investigating breaches and implementing disciplinary actions where necessary.
                            </li>
                            <li>
                                <b>Joint Working Committee:</b>
                                Facilitates collaboration with industry regulators and stakeholders across all sectors, promoting coordinated efforts in financial crime prevention and enhancing the overall effectiveness of initiatives.
                            </li>
                            <li>
                                <b>Mentorship Committee:</b>
                                Oversees the mentorship program, ensuring effective mentor-mentee matching, providing guidance, and monitoring progress to support the professional growth of both mentors and mentees.
                            </li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Committees -->



@endsection
