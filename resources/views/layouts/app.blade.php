<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Setting the character encoding to UTF-8 -->
    <meta charset="utf-8">
    <!-- Ensures proper scaling and layout on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token for security in Laravel forms -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Set the title dynamically from Laravel configuration -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts for consistent typography -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Font Awesome icons for UI elements like social icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- CSS Stylesheets for third-party libraries and custom styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- DNS Prefetch to optimize loading for external fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Vite is used for managing assets in Laravel (SCSS and JS) -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Contact information (Phone and Email) -->
                    <div class="col d-flex align-items-center">
                        <p class="mb-0 phone">
                            <span class="mailus">Phone no:</span> 
                            <a href="#">+00 1234 567</a> or 
                            <span class="mailus">email us:</span> 
                            <a href="#">emailsample@email.com</a>
                        </p>
                    </div>
                    <!-- Social media links with icons -->
                    <div class="col d-flex justify-content-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-facebook"><i class="sr-only">Facebook</i></span>
                                </a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-twitter"><i class="sr-only">Twitter</i></span>
                                </a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-instagram"><i class="sr-only">Instagram</i></span>
                                </a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <!-- Logo and brand name -->
                <a class="navbar-brand" href="{{ url('/') }}">Vacation<span>Rental</span></a>
                
                <!-- Hamburger menu for mobile responsiveness -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>

                <!-- Collapsible navigation menu -->
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="ml-auto navbar-nav">
                        <!-- Standard navigation items -->
                        <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="rooms.html" class="nav-link">Apartment Room</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

                        <!-- User authentication (login, register, and logout links) -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endif
                        @else
                            <!-- If user is logged in, display a dropdown with the user's name -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <!-- Dropdown menu for logout -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <!-- Logout form hidden for security -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main content section where other views will be injected -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="mb-4 col-md-6 col-lg-3 mb-md-0">
						<h2 class="footer-heading"><a href="{{ url('/') }}" class="logo">Vacation Rental</a></h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<a href="#">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
					</div>
					<div class="mb-4 col-md-6 col-lg-3 mb-md-0">
						<h2 class="footer-heading">Services</h2>
						<ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block">Map Direction</a></li>
              <li><a href="#" class="py-1 d-block">Accomodation Services</a></li>
              <li><a href="#" class="py-1 d-block">Great Experience</a></li>
              <li><a href="#" class="py-1 d-block">Perfect central location</a></li>
            </ul>
					</div>
					<div class="mb-4 col-md-6 col-lg-3 mb-md-0">
						<h2 class="footer-heading">Tag cloud</h2>
						<div class="tagcloud">
	            <a href="#" class="tag-cloud-link">apartment</a>
	            <a href="#" class="tag-cloud-link">home</a>
	            <a href="#" class="tag-cloud-link">vacation</a>
	            <a href="#" class="tag-cloud-link">rental</a>
	            <a href="#" class="tag-cloud-link">rent</a>
	            <a href="#" class="tag-cloud-link">house</a>
	            <a href="#" class="tag-cloud-link">place</a>
	            <a href="#" class="tag-cloud-link">drinks</a>
	          </div>
					</div>
					<div class="mb-4 col-md-6 col-lg-3 mb-md-0">
						<h2 class="footer-heading">Subcribe</h2>
						<form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
              </div>
            </form>
            <h2 class="mt-5 footer-heading">Follow us</h2>
            <ul class="p-0 ftco-footer-social">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
				</div>
			</div>
			<div class="py-5 mt-5 w-100 border-top">
				<div class="container">
					<div class="row">
	          <div class="col-md-6 col-lg-8">

	            <p class="mb-0 copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	          <div class="col-md-6 col-lg-4 text-md-right">
	          	<p class="mb-0 list-unstyled">
	          		<a class="mr-md-3" href="#">Terms</a>
	          		<a class="mr-md-3" href="#">Privacy</a>
	          		<a class="mr-md-3" href="#">Compliances</a>
	          	</p>
	          </div>
	        </div>
				</div>
			</div>
		</footer>

        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.timepicker.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('assets/js/google-map.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>