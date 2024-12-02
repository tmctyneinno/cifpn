@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Membership Tiers</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Membership Tiers</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


 <!-- rts blog mlist area -->
 <div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- rts blo post area -->
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- single post -->
                <div class="blog-single-post-listing details mb--0">
                   
                    <div class="blog-listing-content">
                     
                        {{-- <h3 class="title"> Members Benefit</h3> --}}
                        
                        <h5 class="disc para-1">
                            {{ $membershipTiers->title }}
                        </h5>
                        <div class="disc">
                           {!! $membershipTiers->content !!}
                        </div>
                     
                       
                        
                    </div>
                </div>
                <!-- single post End-->
            </div>
            <!-- rts-blog post end area -->
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <!-- single wizered start -->
               
                <!-- single wizered start -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>
                    <div class="wized-body">
                       
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Menu<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">
                            Recent Posts
                        </h5>
                    </div>
                    <div class="wized-body">
                        @forelse ($posts as $post)
                             <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href=""><img src="{{ asset($post->image) }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>{{ $post->created_at->format('d M, Y')  }}</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title"> {{ $post->title }} </h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                        @empty
                            <p>No data found</p>
                        @endforelse
                       
                     
                  
                    </div>
                </div>
                <!-- single wizered End -->
                
                <!-- single wizered start -->
                <div class="rts-single-wized contact">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset($contactUs->site_logo)}}" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You</h5>
                        <a class="rts-btn btn-primary" href="contactus.html">Contact Us</a>
                    </div>
                </div>
                <!-- single wizered End -->
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- rts blog mlist area End -->


@endsection
