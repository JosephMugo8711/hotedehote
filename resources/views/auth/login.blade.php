@extends('layouts.app')  <!-- Extends the main layout of the application -->

@section('content')  <!-- Start of the content section, this will be injected into the layout -->

<!-- Hero section with a full-height background image -->
<div class="hero-wrap js-fullheight" style="margin-top: -25px; background-image: url('{{ asset('assets/images/image_2.jpg')}}');">
    <div class="overlay"></div> <!-- Adds a semi-transparent overlay to the background image -->
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <!-- 
                Placeholder for the heading and call-to-action buttons.
                These are commented out but can be easily reintroduced when needed.
                -->
                <!-- 
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Rent an apartment for your vacation</h1>
                <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> 
                -->
            </div>
        </div>
    </div>
</div>

<!-- Booking section where users can log in -->
<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <!-- Centering the login form by applying margin to the row -->
        <div class="row justify-content-middle" style="margin-left: 397px;">
            <!-- The login form container -->
            <div class="mt-5 col-md-6">
                <!-- Form to handle user login -->
                <form action="{{ route('login') }}" method="POST" class="appointment-form" style="margin-top: -568px;">
                    @csrf <!-- Laravel's CSRF protection token, required for form security -->
                    
                    <h3 class="mb-3">Login</h3> <!-- Form heading -->
                    
                    <div class="row">
                        <!-- Email input field -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <!-- Laravel validation error display for email -->
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password input field -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <!-- Laravel validation error display for password -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit button to log in the user -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Login" class="px-4 py-3 btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form> <!-- End of the login form -->
            </div>
        </div>
    </div>
</section>
@endsection <!-- End of content section -->
