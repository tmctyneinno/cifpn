@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Event</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}} ">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages','events') }}" class="active">Latest Event</a>
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
                    <span>Events</span>
                    <h2 class="title">Exclusive updates on latest events and happenings in the IFPN</h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                @foreach($events as $event)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- single service start -->
                        <div class="rts-single-service-h2 inner">
                            <a href="{{ route('event.details', $event->slug) }}" class="thumbnail">
                                <img src="{{ asset( $event->image) }}" alt="{{ $event->title }}" style="object-fit: cover; width: 100%; height: 219px;">
                            </a>
                           
                            <br>
                            <!-- single info -->
                            <div class="">
                                <i class="far fa-clock"></i>
                                <span>{{ $event->created_at->format('d M, Y')}}</span>
                            </div>
                            <!-- single infoe end -->
                            
                            <div class="body">
                                <a href="{{ route('event.details', $event->slug) }}">
                                    <h5 class="title">{{ $event->title }}</h5>
                                </a>
                                <p class="disc">
                                    {!! Str::limit($event->content, 100, '...') !!}
                                </p>
                                <a href="{{ route('event.details', $event->slug) }}" class="btn-red-more">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single service End -->
                    </div>
                @endforeach
               
            </div>
            <!-- pagination area -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <div class="pagination">
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- pagination area End -->
        </div>
    </div>
    <!-- latest service area End -->



@endsection
