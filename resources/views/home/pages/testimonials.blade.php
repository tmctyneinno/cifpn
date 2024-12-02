
@extends('layouts.app')

@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Testimonial</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Testimonial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start client feed back section -->
    <div class="rts-client-feedback inner pt--120">
        <div class="container">
            <div class="row">
                <!-- start testimonials area -->
                <div class="col-lg-7">
                    <div class="rts-title-area reviews text-start pl--30 pt--70">
                        <p class="pre-title"> 
                            Our Testimonials
                        </p>
                        <h2 class="title">Client’s Feedbacks</h2>

                        <!-- swiper area start -->
                        <div class="swiper mySwipertestimonial">
                            <div class="swiper-wrapper">
                                @forelse ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-inner" >
                                        <p class="disc text-start" style="text-align: justify">
                                            {!! $testimonial->content !!}
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="{{ $testimonial->image }}" alt="business-testimonials">
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">{{ $testimonial->author_name }}</h5>
                                                </a>
                                                <span>{{ $testimonial->author_title  }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p>No data</p>
                                @endforelse
                                
                              
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- swiper area end -->
                    </div>
                </div>  
                <!-- end testimonials are -->
                <!-- images area -->
                <div class="col-lg-5">
                    <div class="rts-test-one-image-inner">
                        <img src="assets/images/testimonials/01.png" alt="business_testimobials">
                    </div>
                </div>
                <!-- image area end -->
            </div>
        </div>
    </div>
    <!-- start client feed back section End -->

    @endsection