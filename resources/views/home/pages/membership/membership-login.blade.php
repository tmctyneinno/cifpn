@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h2 class="title">Membership Login</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Membership Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

  <!-- contact area start -->
  <div class="rts-contact-area contact-one">
    <div class="container">
        <div class="row align-items-center g-0">
            <!-- Contact Image Section -->
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one">
                    <img src="{{ asset('assets/images/contact/01.jpg')}}" alt="Login Image">
                </div>
            </div>
            
            <!-- Login Form Section -->
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <!-- Title and Instructions -->
                    <div class="rts-title-area contact text-start">
                        <p class="pre-title">Membership Login</p>
                        <h5>Please enter your email and password to log in.</h5>
                    </div>
                    
                    <!-- Form Messages Area (for feedback) -->
                    <div id="form-messages"></div>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-success">{{ session('error') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
 
                    <!-- register Form -->
                    <form id="register-form" action="{{ route('login') }}" method="POST" class="mb-3">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control" required autocomplete="off" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <!-- Password -->
                         <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                                <span class="input-group-text" style="height: 55px">
                                    <div id="togglePassword1" style="cursor: pointer">
                                        <i class="fa fa-eye fs-3"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group text-end">
                            <a href="{{ route('password.request') }}" class="forgot-password">
                                <span style="text-decoration: underline; color:#D4AF37">Forgot your password?</span>
                            </a>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Login</button>
                    </form>
                    <!-- JavaScript to toggle password visibility -->
                    <script>
                        // Password visibility toggle for the first password field
                        const togglePassword1 = document.getElementById('togglePassword1');
                        const passwordField1 = document.getElementById('password');

                        togglePassword1.addEventListener('click', function () {
                            const type = passwordField1.type === 'password' ? 'text' : 'password';
                            passwordField1.type = type;

                            this.innerHTML = type === 'password' 
                                ? '<i class="fa fa-eye"></i>'  // Eye icon when password is hidden
                                : '<i class="fa fa-eye-slash"></i>';  // Slash-eye icon when password is visible
                        });

                    </script>

                    
                     
                    <div class="form-group mb-3">
                        Don't have a profile?<a href="{{ route('membership.signup')}}" class="forgot-password"> <snap style="text-decoration: underline; color:#D4AF37">Join IFPN?</snap></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact area end -->

@endsection
