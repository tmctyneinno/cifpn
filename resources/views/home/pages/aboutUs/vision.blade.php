@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Our Vision</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages', 'vision') }}" class="active">Vision</a>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

 <!-- rts about us section start -->
 <div class="rts-about-area rts-section-gap">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-image-v-inner">
                    <div class="image-area">
                        <img class="mt--110 img-1" src="{{ asset('assets/images/about/main/about-03.jpg')}}" alt="BUsiness_image">
                        <img class="img-over" src="{{ asset('assets/images/about/main/about-04.jpg')}}" alt="BUsiness_image">
                        {{-- <img class="img-over" src="{{ $visionMission->vision_img}}" alt="BUsiness_image"> --}}

                        <div class="goal-button-wrapper">
                            <div class="vedio-icone">
                                <a id="play-video" class="video-play-button" href="#">
                                    <span></span>
                                </a>
                                <div id="video-overlay" class="video-overlay">
                                    <a class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-progress-inner">
                    <div class="title-area">
                        {{-- <span>JUST A CONSULTANCY</span> --}}
                        <h2 class="title">Vision Statement</h2>
                    </div>
                    <!-- inner start -->
                    <div class="inner"  style="text-align: justify; width: 100%;">
                        <p class="disc">
                            {!! $visionMission->vision !!}
                        </p>
                        
                        
                        {{-- <a href="{{ route('home.pages', 'appointment') }}" class="rts-btn btn-primary">Make an Appointment</a> --}}
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts about us section end -->

@endsection