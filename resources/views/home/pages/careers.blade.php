@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Careers</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}} ">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages','careers') }}" class="active">Careers</a>
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
                    {!! $career->content !!}
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
                 <div class="rts-single-wized Categories service">
                    <div class="wized-header">
                        <h5 class="title">
                            Industries
                        </h5>
                    </div>
                    <div class="wized-body">
                        @forelse ($industries as $industries)
                             <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="{{ route('industries.detail', ['slug' => $industries->slug] ) }}">{{ $industries->title }} <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        @empty
                            <p>No data found</p>
                        @endforelse
                       
                       
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
