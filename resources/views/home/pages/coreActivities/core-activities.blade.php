@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Core Activities</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Core Activities</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->



 <!-- start core values -->
 <div class="rts-service-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area service text-center">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">CORE ACTIVITIES OF IFPN</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
        <div class="background-service row">
            @foreach ($coreActivities as $index => $activity)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner {{ 'service-' . ($index + 1) }}">
                        <div class="thumbnail">
                            <img src="{{ asset($activity->image) }}" alt="{{ $activity->title }}">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('coreActivities-details', $activity->slug) }}">
                                <h5 class="title">{{ $activity->title }}</h5>
                            </a>
                            <p class="disc">{!! Str::limit($activity->content, 60) !!}</p>
                            <a class="rts-read-more btn-primary" href="{{ route('coreActivities-details', $activity->slug) }}">
                                <i class="far fa-arrow-right"></i> Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
<!-- start core values -->



@endsection
