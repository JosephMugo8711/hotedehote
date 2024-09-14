@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight" style="margin-top: -25px;   background-image: url('{{ asset('assets/images/image_2.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<!-- <h2 class="subheading">Welcome to Vacation Rental</h2>
          	<h1 class="mb-4">Rent an appartment for your vacation</h1>
            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-middle" style="margin-left: 397px;">
	    		<div class="mt-5 col-md-6">
						<form action="{{ route('login') }}" method="POST" class="appointment-form" style="margin-top: -568px;">
                            
                            @csrf
							<h3 class="mb-3">Login</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
			    				    </div>
								</div>
                               
                                <div class="col-md-12">
									<div class="form-group">
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
			    				    </div>
								</div>
								
							
							
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="px-4 py-3 btn btn-primary">
                                    </div>
								</div>
							</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>
@endsection