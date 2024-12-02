@extends('layouts.app')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Our Industries</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}} ">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages', 'industries') }}" class="active">Our Industries</a>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- end breadcrumb area -->

<!-- latest service area -->
<div class="rts-service-area rts-section-gap bg-service-h2 ptb--120 mt--0">
    <div class="container">
        <div class="row">
            <div class="title-area service-h2">
                {{-- <span>Empowering Industries with Technology & Social Impact</span> --}}
                <h2 class="title">Empowering Industries with Technology & Social Impact</h2>
            </div>
            <p class="disc">
                Infoscert Xpression Streams Limited delivers cutting-edge technology solutions across a wide range of industries while embedding social impact at the core of every innovation. Explore how we help industries thrive and create positive change through responsible business practices and digital transformation.
            </p>
        </div>
       
        <div class="row g-5 mt--10">
            @forelse ($industries as $item)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single service start -->
                <div class="rts-single-service-h2 inner">
                    <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}" class="thumbnail">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="object-fit: cover; width: 100%; height: 219px;">
                    </a> 
                    <div class="body"> 
                        <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}">
                            <h5 class="title">{{ $item->title }}</h5>
                        </a>
                        <p class="disc">
                            {!! Str::limit($item->content, 65) !!} 
                        </p>
                        <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service End -->
            </div>
            @empty
                <p>No data found</p>
            @endforelse
        </div>
        
        
        
    </div>
</div>
<!-- latest service area End -->





@endsection
