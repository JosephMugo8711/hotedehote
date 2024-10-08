@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight" style="margin-top: -25px; background-image:  url('{{ asset('assets/images/image_2.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Welcome to Vacation Rental</h2>
          	<h1 class="mb-4">Rent an appartment for your vacation</h1>
            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>

    

	<section class="ftco-section ftco-services">
		<div class="container">
			<div class="row g-4"> 
				@foreach ($hotels as $hotel)
					<div class="px-4 col-md-4 d-flex services align-self-stretch ftco-animate">
						<div class="text-center d-block services-wrap">
							<!-- Hotel image with background -->
							<div class="img" style="background-image: url('{{ asset('assets/images/'.$hotel->image.'')}}');"></div>
							<!-- Hotel details -->
							<div class="px-3 py-4 media-body">
								<h3 class="heading">{{ $hotel->name }}</h3>
								<p>{{ $hotel->description }}</p>
								<p>Location: {{ $hotel->location }}</p>
								<p><a href="{{ route('hotels.rooms', $hotel->id) }}" class="btn btn-primary">View rooms</a></p>
							</div>
						</div>      
					</div>
				@endforeach
			</div>
		</div>
	</section>
	
    

    <section class="ftco-section bg-light">
			<div class="container-fluid px-md-0">
				<div class="pb-5 mb-3 row no-gutters justify-content-center">
          <div class="text-center col-md-7 heading-section ftco-animate">
            <h2>Apartment Room</h2>
          </div>
        </div>
				<div class="row no-gutters">
					@foreach ($rooms as $room )
						<div class="col-lg-6">
							<div class="room-wrap d-md-flex">
								<a href="#" class="img" style="background-image: url({{ asset('assets/images/' . $room->image) }});"></a>
								<div class="half left-arrow d-flex align-items-center">
									<div class="p-4 text-center text p-xl-5">
										<p class="mb-0 star"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
										<!-- <p class="mb-0"><span class="mr-1 price">$120.00</span> <span class="per">per night</span></p> -->
										<h3 class="mb-3"><a href="rooms.html">{{ $room->name }}</a></h3>
										<ul class="list-accomodation">
											<li><span>Max:</span> {{ $room->max_persons }} Persons</li>
											<li><span>Size:</span> {{ $room->size }} m2</li>
											<li><span>View:</span> {{ $room->view }}</li>
											<li><span>Bed:</span> {{ $room->num_beds }}</li>
											
										</ul>
										<p class="pt-1"><a href="room-single.html" class="px-3 py-2 btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
									</div>
								</div>
							</div>
						</div>
							
					@endforeach
    			 
    		</div>
			</div>
		</section>



    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="mb-4 img img-2" style="background-image: url('{{ asset('assets/images/image_2.jpg')}}');;">
						</div>
						<h2>The most recommended vacation rental</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h2 class="mb-2">What we offer</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<div class="row">
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Tea Coffee</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-workout"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Hot Showers</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet-1"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Laundry</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Air Conditioning</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Free Wifi</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Kitchen</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Ironing</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="pl-3 media-body">
		                <h3 class="heading">Lovkers</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		          </div>  
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro" style="background-image: url(images/image_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="text-center col-md-9">
						<h2>Ready to get started</h2>
						<p class="mb-4">It’s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
						<p class="mb-0"><a href="#" class="px-4 py-3 btn btn-primary">Learn More</a> <a href="#" class="px-4 py-3 btn btn-white">Contact us</a></p>
					</div>
				</div>
			</div>
		</section>
@endsection