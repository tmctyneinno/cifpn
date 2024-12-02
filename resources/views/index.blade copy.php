@extends('layouts.app')

@section('content')
 <!-- banner blank space area -->
 <div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Make <span>Business Unique </span> <br>
                        With Great Ideas</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide two">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Launch <span>Ultra Modern</span> <br> Effective Business</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide three">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title ">Make <span>Business Growth</span> <br> With Next Level</h1>
                    <p class="disc banner-para">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="animation-img">
        <img class="shape-img two" src="assets/images/banner/shape/02.png" alt="banner_business">
        <img class="shape-img three" src="assets/images/banner/shape/03.png" alt="banner_business">
    </div>
</div>
<!-- banner blank space area end -->


<!-- start about our company -->
<div class="rts-about-our-company-h2 rts-section-gap">
    <div class="container">
        <div class="row">
            <div
                class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                <div class="title-area about-company">
                    <span>About Us</span>
                </div>
                <div class="about-company-wrapper">
                    <p class="disc" style="text-align: justify">
                        {!! Str::limit($aboutUs->content, 400) !!} <snap> <a href="{{ route('home.pages', 'about-us') }}"  class="font-weight: bold" style="font-weight: bold">Read More</a></snap>
                    </p>
                    <div class="rts-tab-style-one">
                        <div class="d-flex align-items-start contoler-company">
                            <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Our Mission</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Our Vision</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align: justify">
                                            {!! Str::limit($visionMission->mission, 150) !!}
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'mission') }}">Read More</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align: justify">
                                            {!! Str::limit($visionMission->vision, 150) !!}

                                        </p>
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'vison') }}">Read More</a>
                                    </div>   
                                    <!-- start tab content End -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                <div class="about-company-thumbnail">
                    <img src="{{ $aboutUs->image }}" alt="Business_company">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start about our company End -->


<!-- start service area -->
<div class="rts-service-areah2-im-3 rts-section-gap bg-service-h2">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="image-area">
                    <img src="assets/images/service/h2/03.jpg" alt="Service_Image">
                    <img class="two"  src="assets/images/service/h2/02.jpg" alt="Service_Image">
                    <img class="three" style="object-fit: cover; width: 60%; height: 400px;" src="assets/images/service/h2/01.jpg" alt="Service_Image">
                    <div class="ratio-area">
                        <h3 class="ratio">85%</h3>
                        <span>Successful Ratio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-h2-content pl--30">
                    <div class="title-area  service-h2 service">
                        <span>Who we are</span>
                        <h2 class="title">We focus to get excellent
                            performance </h2>
                    </div>
                    <div class="content-wrapper">
                        <p class="disc" style="text-align: justify">
                            IFPN is an institute comprised of professionals in the fields of financial crime prevention, anti-money laundering (AML), know your customer (KYC) processes, transaction monitoring, and fraud control. Our members range from financial institutions, law enforcement agencies, compliance officers, and consultants to legal professionals and academics. We are dedicated to promoting best practices and standards across industries to tackle financial crime and safeguard the integrity of Nigeria’s and Africa' s economy
                        </p>
                        <div class="feature-one-wrapper mt--40">
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Fast Growing Sells</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>24/7 Quality Services</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Expert Members</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Best Quality Services</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start service area End -->

 <!-- core activities -->
 <div class="working-process-area rts-section-gap working-process-bg">
    <div class="container">
        <div class="row mt--40">
            <div class="title-area text-center working-process">
                
                <h2 class="title">Core Activities</h2>
            </div>
        </div>
        <div class="row g-5 mt--20 align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/01.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">EDUCATION & CERTIFICATION</h6>
                        <p class="disc">
                            Offering courses, workshops, and certification programs to enhance professional expertise in fraud prevention, AML, KYC, and compliance.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner two">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/02.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">RESEARCH & ADVOCACY</h6>
                        <p class="disc">
                            Conducting research on emerging trends in financial crime and advocating for sound policies and regulations.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner three">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/03.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">CONFERENCES & SEMINARS</h6>
                        <p class="disc">
                            Hosting events, conferences, and roundtable discussions to promote knowledge sharing and collaboration between industries.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1  text-center">
                    <div class="inner four">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/04.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">MEMBER SERVICES</h6>
                        <p class="disc">
                            Providing a range of services to support members’ professional growth, including mentorship, networking, and continuing professional development.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner five">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/05.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">REGULATION & ENFORCEMENT SUPPORT</h6>
                        <p class="disc">
                            Working closely with regulatory bodies, law enforcement agencies, and financial institutions to support the development and enforcement of anti-fraud measures.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner six">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/06.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">CONSULTANCY SERVICES</h6>
                        <p class="disc">
                            Offering expert consultancy in financial crime prevention strategies, compliance frameworks, and risk assessment to organizations seeking to enhance their security and regulatory measures.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
        </div>
    </div>
</div>
<!-- our working Process End -->


<!-- cta section start -->
<div class="rts-cta-section-start rts-section-gap cta-bg-h2">
    <div class="container">
        <div class="row">
            <div class="cta-h2-wrapper text-center">
                <div class="icon">
                    <a href="{{ route('home.pages', 'contactus') }}"><i class="fas fa-phone-alt"></i></a>
                </div>
                <div class="body">
                    <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7 Available)</span></p>
                    <a href="#" class="number">{{$contactUs->first_phone}} | {{$contactUs->second_phone}}</a>
                    <a href="{{ route('home.pages', 'contactus') }}" class="rts-btn btn-primary-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->






@endsection
