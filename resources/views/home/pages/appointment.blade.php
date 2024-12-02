@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Appointment</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home') }}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


<!-- contact area start -->
<div class="rts-contact-area contact-one appoinment background-contact-appoinment rts-section-gap">
    <div class="">
        <div class="row g-0 align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one appoinment">
                    <img src="assets/images/appoinment/02.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <div class="rts-title-area contact-appoinment text-start">
                        {{-- <p class="pre-title">
                            Make An Appointment
                        </p> --}}
                        <h2 class="title">Make An Appointment</h2>
                    </div>
                    <form action="#">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name">
                            <input type="email" placeholder="Email Address">
                        </div>
                        <div class="name-email">
                            <input type="text" placeholder="Phone Number">
                            <input type="text" placeholder="Business Topic">
                        </div>
                        {{-- <input type="text" placeholder="Business Topic"> --}}
                        <label class="text-white" for="meeting_date">Select Solution</label>

                        <div class="name-email">
                            <select name="solution_id" id="solution" required>
                                @foreach($solutions as $solution)
                                    <option value="{{ $solution->id }}">{{ $solution->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="meeting_date" class="text-white">Select Date & Time:</label>
                        <input type="datetime-local" name="meeting_date" required>

                        <label for="duration" class="text-white">Meeting Duration:</label>
                        <select name="meeting_duration" id="duration" required>
                            <option value="15">15 Minutes</option>
                            <option value="30">30 Minutes</option>
                            <option value="60">60 Minutes</option>
                        </select>
                        <div class="name-email">
                            <textarea placeholder="Type Your Message"></textarea>
                        </div>
                    </form>
                    <a href="#" class="rts-btn btn-primary">Submit Message</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->


@endsection
