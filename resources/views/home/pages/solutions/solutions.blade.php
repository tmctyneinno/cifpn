@extends('layouts.app')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Solutions</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Solutions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

 

<!-- our service area end -->
<div class="rts-project-area rts-section-gap">
    <div class="container">
        <div class="row g-5 ">
            @forelse ($solutions as $solution) 
            <!-- single service area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single -product area -->
                <div class="rts-product-one">
                    <div class="thumbnail-area">
                        <img src="{{ asset($solution->image) }}" alt="{{ $solution->title }}" style="object-fit: cover; width: 100%; height: 250px;">
                        <a class="rts-btn btn-primary rounded" href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}"><i class="far fa-arrow-right"></i></a>
                    </div> 
                    <div class="product-contact-wrapper">
                        {{-- <span>Business Solution</span> --}}
                        <a href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}">
                            <h5 class="title">{{ $solution->title }}</h5>
                        </a>
                        <p class="disc">
                            {!! Str::limit($solution->content, 50) !!}
                        </p>
                    </div>
                </div>
                <!-- single -product area End -->
            </div>
            <!-- single service area end-->
            @empty
                <p> No data found</p>
            @endforelse
        </div>
           
    </div>
</div>




@endsection
