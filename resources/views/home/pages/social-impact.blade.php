@extends('layouts.app')

@section('content') 

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Social Impact</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html">Home</a>
                    <span> / </span>
                    <a href="#" class="active">social impact</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

 <!-- start service details area -->
 <div class="rts-service-details-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="thumbnail">
                        <img src="{{ asset($socialImpact->image)}}" alt="business-area">
                    </div>
                    
                    <div class="disc" >
                        {!! $socialImpact->content !!} 
                    </div>
                </div>
               
                
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
               <!-- single wizered start -->
               <div class="rts-single-wized Categories service">
                <div class="wized-header">
                    <h5 class="title">
                        Solutions
                    </h5>
                </div>
                <div class="wized-body">
                    @forelse ($solutions as $solution)
                         <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}">{{ $solution->title }} <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                    @empty
                        <p>No data found</p>
                    @endforelse
                   
                   
                </div>
            </div> 
            <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized download service">
                    <div class="wized-header">
                        <h5 class="title">Download</h5>
                    </div>
                    <div class="wized-body">
                        <!-- single downlaod area start -->
                        <div class="single-download-area">
                            <img src="{{ asset('assets/images/service/icon/07.svg')}}" alt="Business_downlaod">
                            <div class="mid">
                                <h6 class="title">
                                    Our Brochures
                                </h6>
                                <span>Downlaod</span>
                            </div>
                            <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <!-- single downlaod area End -->
                        <!-- single downlaod area start -->
                        <div class="single-download-area">
                            <img src="{{ asset('assets/images/service/icon/08.svg')}}" alt="Business_downlaod">
                            <div class="mid">
                                <h6 class="title">
                                    Company Details
                                </h6>
                                <span>Downlaod</span>
                            </div>
                            <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <!-- single downlaod area End -->
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized contact service">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset('assets/images/logo/logo.jpeg')}}" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                    </div>
                </div>
                <!-- single wizered End -->
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- End service details area -->




@endsection
