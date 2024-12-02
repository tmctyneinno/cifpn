@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h2 class="title">Membership {{ __('Reset Password') }}</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Membership {{ __('Reset Password') }}</a>
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
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one">
                    <img src="{{ asset('assets/images/contact/01.jpg')}}" alt="Login Image">
                </div>
            </div>
             
            <!-- Login Form Section -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <!-- Title and Instructions -->
                    <div class="rts-title-area contact text-start" style="text-align: justify">
                        <p class="pre-title">Membership {{ __('Reset Password') }}</p>
                         <p style="text-align: justify">
                            Please enter your registered email address, and password to reset your password.
                        </p>
                       
                    </div>
                    
                    <!-- Form Messages Area (for feedback) -->
                    <div id="form-messages"></div>

                    <!-- register Form -->
                    <form id="register-form" action="{{ route('password.update') }}" method="POST" class="mb-3">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- Email -->
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control" required autocomplete="off" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                       <!-- Password -->
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" id="password" name="password" required autocomplete="new-password">
                                <span class="input-group-text" style="height: 55px">
                                    <div id="togglePassword1"  style="cursor: pointer">
                                        <i class="fa fa-eye fs-3"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <!-- Confirm Password -->
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input  id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="input-group-text" style="height: 55px">
                                    <div id="togglePassword2"  style="cursor: pointer">
                                        <i class="fa fa-eye fs-3"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                   
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

                            // Password visibility toggle for the confirm password field
                            const togglePassword2 = document.getElementById('togglePassword2');
                            const passwordField2 = document.getElementById('password_confirmation');

                            togglePassword2.addEventListener('click', function () {
                                const type = passwordField2.type === 'password' ? 'text' : 'password';
                                passwordField2.type = type;

                                this.innerHTML = type === 'password' 
                                    ? '<i class="fa fa-eye"></i>'  // Eye icon when password is hidden
                                    : '<i class="fa fa-eye-slash"></i>';  // Slash-eye icon when password is visible
                            });
                        </script>

                        
                        <!-- Submit Button -->
                        <button type="submit" class="rts-btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                     
                   
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact area end -->

@endsection