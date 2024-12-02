<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- @viteReactRefresh --}}
    {{-- @vite(['resources/js/app.js']) --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset($contactUs->favicon)}}">
    <!-- App css -->
    <link href="{{ asset('portal/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('portal/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('portal/css/app.min.css')}}" rel="stylesheet" type="text/css" />
     <!-- Toastr CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <!-- jQuery (required for Toastr) -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- Toastr JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     {{-- recaptcha --}}
     <script src="https://www.google.com/recaptcha/api.js"></script>
 

</head>
<body id="body" class="dark-sidebar">
    @include('portal.partials.sidebar')
    @include('portal.partials.topbar')
 
    @yield('content')
    <!-- Javascript  -->   
    <script src="{{ asset('portal/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('portal/pages/analytics-index.init.js')}}"></script>
    <script src="{{ asset('portal/plugins/datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('portal/pages/datatable.init.js')}}"></script>


    <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            </script>  <span class="text-muted d-none d-sm-inline-block float-end">  {{ $contactUs->company_name }}- Copyright {{ date('Y') }} . All rights reserved.</span>
        </footer>
        <!-- end Footer -->                 
        <!--end footer-->
    <!-- App js -->
    <script src="{{ asset('portal/js/app.js')}}"></script>
    <style>
        /* Increase font size of Toastr */
        #toast-container > .toast {
            font-size: 18px; /* You can change 18px to any size you want */
        }
    </style>
    <script>
        @if(session('status'))
            $(document).ready(function() {
                toastr.success("{{ session('status') }}");
            });
        @endif
        @if(session('success'))
            $(document).ready(function() {
                toastr.success("{{ session('success') }}");
            });
        @endif
    
        @if($errors->any())
            $(document).ready(function() {
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            });
        @endif
    </script>
     
 </body>
</html>
