@extends('layouts.app')

@section('content')
 
 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Contact Us</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="#">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


  <!-- contact single area start -->
  <div class="rts-contact-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="contact__us--info__list d-flex align-items-center">
                        <div class="content">
                            <div class="icone" style="background-color: #5264F3; -webkit-mask: url('{{ asset('assets/images/contact/shape/01.svg') }}') no-repeat center; mask: url('{{ asset('assets/images/contact/shape/01.svg') }}') no-repeat center; width: 100px; height: 100px;">
                            </div>
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel:+18475555555">
                                    <h6>{{ $contactUs->first_phone}} | {{ $contactUs->second_phone}}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-contact-one-inner">
                    <div class="contact__us--info__list d-flex align-items-center">
                        <div class="content">
                            <div class="icone" style="background-color: #5264F3; -webkit-mask: url('{{ asset('assets/images/contact/shape/02.svg') }}') no-repeat center; mask: url('{{ asset('assets/images/contact/shape/02.svg') }}') no-repeat center; width: 100px; height: 100px;">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:{{ $contactUs->first_email}} ">
                                    <h5>{{ $contactUs->first_email}} {{ $contactUs->second_email}} </h5>
                                    <br/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-contact-one-inner">
                    <div class="contact__us--info__list d-flex align-items-center">
                        <div class="content">
                            <div class="icone" style="background-color: #5264F3; -webkit-mask: url('{{ asset('assets/images/contact/shape/03.svg') }}') no-repeat center; mask: url('{{ asset('assets/images/contact/shape/03.svg') }}') no-repeat center; width: 100px; height: 100px;">
                            </div>
                            
                            <div class="info">
                                
                                <h6>{{ $contactUs->first_address}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="contact-map-area-fluid">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.408009985622!2d3.344683!3d6.5961068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b922431bb3a15%3A0xc7b0fa06a5f9ff0b!2s2nd%20Floor%2C%201%20Adeola%20Adeoye%20St%2C%20Opebi%2C%20Ikeja%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1731414482384!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
           
        </div>
    </div>
</div>
<!-- conact single area end -->




<!-- conact us form fluid start -->
<div class="rts-contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-contact-fluid rts-section-gap">
                    <div class="rts-title-area contact-fluid text-center mb--50">
                        <p class="pre-title">
                            Get In Touch
                        </p>
                        <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                    </div>
                     
                    <div class="form-wrapper">
                        {{-- <div id="form-messages"></div> --}}
                        <form  action="{{ route('contact.submit') }}" method="post" id="contactUsForm">
                            @csrf 
                            <div class="name-email">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="name-email">
                                <input type="text" name="subject" placeholder="Your Subject" required>
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>
                            <textarea placeholder="Type Your Message" name="message"></textarea>

                            <button type="submit" class="rts-btn btn-primary g-recaptcha"
                                    data-sitekey="{{ config('services.recaptcha.siteKey') }}"
                                    data-callback="onContactUsSubmit" data-action="submit" id="submit2">Send Message
                            </button>
                        </form>
                        <script>
                            function onContactUsSubmit(token) {
                                if (navigator.onLine) {
                                    // Proceed to submit the form if online
                                    document.getElementById('g-recaptcha-response').value = token;
                                    document.getElementById("contactUsForm").submit();
                                } else {
                                    alert("You need an active internet connection to submit the form.");
                                }
                                // document.getElementById("contactUsForm").submit();
                            }
                         
                            grecaptcha.ready(function() {
                                grecaptcha.execute('{{ config('services.recaptcha.siteKey') }}', { action: 'submit' }).then(function(token) {
                                    document.getElementById("submit2").disabled = false; // Enable button after token is received
                                }).catch(function(error) {
                                    console.error("reCAPTCHA error:", error);
                                    document.getElementById("submit2").disabled = false; // Enable button on error
                                });
                            });
                        </script>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- conact us form fluid end -->

@endsection
