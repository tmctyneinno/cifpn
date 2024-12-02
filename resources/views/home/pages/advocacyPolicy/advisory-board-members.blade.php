@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h2 class="title">Advisory Board Members</h2>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Advisory Board Members</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->



 
 <!-- team area start-->
    <div class="rts-team-area rts-section-gap bg-team-color">
        <div class="container">
            <div class="row g-5">
                <!-- team single start -->
                @forelse ($advisoryBoardMember as $data)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img 
                                    style="object-fit: cover; max-width:100%; max-height:100%; width:250px; height:250px " 
                                    src="{{asset($data->image)}}" alt="Business_Team_single">
                                    
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">{!! Str::limit($data->name, 70) !!}</h5>
                                </a>
                                {{-- <p>{{ $data->name }}</p> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No data available</p>
                @endforelse
                
               
            </div>
        </div>
    </div>
    <!-- team area End -->

@endsection
