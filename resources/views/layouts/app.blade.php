<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contactUs->company_name }}</title> 
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($contactUs->favicon)}}">
     
    
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/fontawesome-5.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/plugins/unicons.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body class="home-blue">

    @include('partials.navbar')
       
    <main class="py-4">
        @yield('content')
    </main> 

    @include('partials.footer')
    

</body>
</html>
