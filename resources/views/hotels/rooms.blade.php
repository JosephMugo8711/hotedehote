@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="margin-top: -25px; background-image: url('{{ asset('assets/images/image_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="text-center col-md-9 ftco-animate">
            <p class="mb-2 breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Apartment Room</h1>
        </div>
      </div>
    </div>
  </section>
 
  <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
          <div class="container-fluid px-md-0">
              <div class="row no-gutters">
               @foreach ($getRooms as  $room)
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('assets/images/'.$room->image.'') }});"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="p-4 text-center text p-xl-5">
                                <p class="mb-0 star"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <p class="mb-0"><span class="mr-1 price">${{ $room->price }}</span> <span class="per">per night</span></p>
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

@endsection