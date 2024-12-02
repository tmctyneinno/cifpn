@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                {{-- <h1 class="title">Solution Details</h1> --}}
                <h2 class="title">Partners and Affiliates</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home') }}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Partners and Affiliates</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

  <!-- rts services area start -->
  <div class="rts-service-area rts-section-gapBottom">
    <div class="container-fluid service-main about-service-width-controler">
        <div class="background-service service-three row">
            <div class="row g-5">
                <div class="rts-title-area service-four text-center pt--40 pt_md--0 mt_sm--0 mt_md--0">
                    <p class="pre-title">
                        Our Partners and Affiliates
                    </p>
                    <h4 class="title">We collaborate with leading organizations, institutions, and professionals to drive forward our mission of combating financial crime.</h4>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                    <div class="service-one-inner-four">
                        <div class="">
                            <a href="#" class="thumbnail">
                                <img style="object-fit: contain;  height: 219px;" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" alt="Business-service">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                    <div class="service-one-inner-four">
                        <div class="">
                            <a href="#" class="thumbnail">
                                <img style="object-fit: contain;  height: 219px;" src="https://banner2.cleanpng.com/20181108/vqy/kisspng-youtube-google-logo-google-images-google-account-consulting-crm-the-1-recommended-crm-for-g-suite-1713925083723.webp" alt="Business-service">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80">
                    <div class="service-one-inner-four">
                        <div class="">
                            <a href="#" class="thumbnail">
                                <img style="object-fit: contain;  height: 219px;" src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Business-service">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
    </div>
</div>
<!-- rts services area End -->



@endsection