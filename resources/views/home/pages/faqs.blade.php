@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">FAQ</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home') }}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">FAQ</a>
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
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 order-xl-1 order-md-2 order-sm-2 order-2">
                        <div class="accordion-area inner">
                          
                            <div class="accordion-one-inner">
                                <div class="accordion" id="accordionExample2">
                                    @forelse ($faqs as $index => $faq)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $index }}">
                                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" 
                                                        type="button" 
                                                        data-bs-toggle="collapse" 
                                                        data-bs-target="#collapse{{ $index }}" 
                                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                                        aria-controls="collapse{{ $index }}">
                                                    <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span> {{ $faq->question }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $index }}" 
                                                 class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                                 aria-labelledby="heading{{ $index }}" 
                                                 data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    {!! $faq->answer !!} 
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p>No FAQs available at the moment.</p>
                                    @endforelse
                                </div>
                            </div>
                            
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
