@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">{{$coreActivitiesItem->title }}</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home') }}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Core Activities Details</a>
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
                   
                    <h4 class="title">{{$coreActivitiesItem->title }} </h4>
                    <div class="disc" >
                        {!! $coreActivitiesItem->content !!} 
                    </div>
                    
                </div>
               
                
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                <!-- single wizered start -->
                <div class="rts-single-wized Categories service">
                    <div class="wized-header">
                        <h5 class="title">
                            Related Core Activities
                        </h5>
                    </div>
                    <div class="wized-body">
                        @forelse ($relatedCoreActivities as $relatedCoreActivities)
                             <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="{{ route('coreActivities-details', ['slug' => $relatedCoreActivities->slug] ) }}">{{ $relatedCoreActivities->title }} <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        @empty
                            <p>No data found</p>
                        @endforelse
                       
                       
                    </div>
                </div>
                <!-- single wizered End -->
                
                <!-- single wizered start -->
                <div class="rts-single-wized contact service">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset($contactUs->site_logo)}}" alt="Business_logo"></a>
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