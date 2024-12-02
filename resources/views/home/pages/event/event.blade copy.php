@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Latest Event</h1>
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



 <!-- rts blog list area -->
 <div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- rts blog Event area -->
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                @foreach($events as $event)
                    <!-- single post -->
                    <div class="blog-single-post-listing">
                        <div class="thumbnail">
                            <img src="{{ asset( $event->image) }}" alt="{{ $event->title }}">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by {{ $event->author ?? 'Admin' }}</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>{{ $event->created_at->format('d M, Y') }}</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>{{ $event->category->name ?? 'Uncategorized' }}</span>
                                </div>
                                <!-- single info end -->
                            </div>
                            <a class="blog-title" href="{{ route('event.details', $event->slug) }}">
                                <h3 class="title">{{ $event->title }}</h3>
                            </a>
                            <p class="disc">
                                {!! Str::limit($event->content, 150, '...') !!}
                            </p>
                            <a class="rts-btn btn-primary" href="{{ route('event.details', $event->slug) }}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                @endforeach
            
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
            
            <!-- rts-blog post end area -->
            <!--rts blog wized area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60">
               
                
                <!-- single wized start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Event
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/02.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/03.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="#"><img src="assets/images/blog/details/recent-post/04.png" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="#">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="gallery-inner">
                            <div class="row-1 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/01.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/02.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/03.png" alt="Gallery"></a>
                            </div>
                            <div class="row-2 single-row">
                                <a href="#"><img src="assets/images/blog/details/gallery/04.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/05.png" alt="Gallery"></a>
                                <a href="#"><img src="assets/images/blog/details/gallery/06.png" alt="Gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized">
                    <div class="wized-header">
                        <h5 class="title">
                            Popular Tags
                        </h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            <a href="#">Services</a>
                            <a href="#">Business</a>
                            <a href="#">Growth</a>
                            <a href="#">Finance</a>
                            <a href="#">UI/UX Design</a>
                            <a href="#">Solution</a>
                            <a href="#">Speed</a>
                            <a href="#">Strategy</a>
                            <a href="#">Technology</a>
                        </div>
                    </div>
                </div>
                <!-- single wized End -->
                <!-- single wized start -->
                <div class="rts-single-wized contact">
                    <div class="wized-header">
                        <a href="#"><img src="assets/images/logo/logo-2.svg" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary" href="contactus.html">Contact Us</a>
                    </div>
                </div>
                <!-- single wized End -->
            </div>
            <!-- rts- blog wized end area -->
        </div>
    </div>
</div>
<!-- rts blog list area End -->


@endsection
