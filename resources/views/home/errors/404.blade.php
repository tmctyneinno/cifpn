@extends('layouts.app')

@section('content')


<div id="anywhere-home">
</div>
<!-- ENd Header Area -->

<!-- rts- 404 area start -->
<div class="rts-404-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="404wrapper text-center">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/contact/shape/404.png')}}" alt="">
                    </div>
                    <h2 class="title mt--40">
                        Oops! Nothing Was Found
                    </h2>
                    <p class="disc">Sorry, we couldn’t find the page you where looking for. We suggest <br> that you
                        return to homepage.</p>
                    <a class="rts-btn btn-primary" href="{{ route('home')}}">Back To Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts- 404 area end -->

@endsection