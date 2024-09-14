@extends('layouts.app')  <!-- Extends the main layout of the application to inherit the structure, styles, and scripts -->

@section('content')  <!-- Marks the beginning of the 'content' section to be injected into the layout -->

<!-- Hero section with a full-height background image -->
<div class="hero-wrap js-fullheight" style="margin-top: -25px; background-image: url('{{ asset('assets/images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>  <!-- Adds a dark overlay on top of the image to enhance text readability -->
    
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <!-- Placeholder for future content: introduction, welcome text, and call-to-action buttons (commented out) -->
                <!-- 
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Rent an apartment for your vacation</h1>
                <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
                -->
            </div>
        </div>
    </div>
</div>

<!-- Registration form section -->
<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <!-- Align the registration form to the center of the page -->
        <div class="row justify-content-middle" style="margin-left: 397px;">
            <div class="mt-5 col-md-6">
                <!-- Registration form for new users -->
                <form action="{{ route('register') }}" method="POST" class="appointment-form" style="margin-top: -568px;">
                    @csrf <!-- Include CSRF protection for security, required in all Laravel forms -->

                    <!-- Form heading -->
                    <h3 class="mb-3">Register</h3>
                    
                    <div class="row">
                        <!-- Name input field with validation handling -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <!-- Display validation error if 'name' input is invalid -->
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email input field with validation handling -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <!-- Display validation error if 'email' input is invalid -->
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password input field with validation handling -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <!-- Display validation error if 'password' input is invalid -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm password input field -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit button to register the user -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Register" class="px-4 py-3 btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form> <!-- End of the registration form -->
            </div>
        </div>
    </div>
</section>

@endsection <!-- End of content section -->
