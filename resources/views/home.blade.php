@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
    
                <link rel="stylesheet" type="text/css" href="css/style.css"> 
                <div class="links">
                    <a href="home">Home</a>
                    <a href="about-us">About Us</a>
                    <a href="SendRequest.create">Send Request</a>
                    <a href="contact-us">contact us</a>
                     
                </div>
    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            </div>
            <!--The 1st Carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/car-tow-truck.jpg" style="width:50px;height:600px;" alt="First slide">
    <div class="carousel-caption d-none d-md-block">
                <h1 class="mb-0"><strong class="text-primary">Roadside repair service</strong> Open 24 Hours</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>OVBAS offers the road side assistance package in case of an emergency that requires vehicle servicing.</p>
                  </div>
                </div>
                
                <p><a href="{{ url('/home') }}" class="btn btn-primary px-5 py-3">Book Now</a></p>
              </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/breakdown-vehicle.jpg" style="width:50px;height:600px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="mb-0"><strong class="text-primary">Towing Service</h1>
                
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p></p>
                  </div>
                </div>
                
                <p><a href="{{ url('/home') }}" class="btn btn-primary px-5 py-3">Book Now</a></p>
              </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/contact.jpg" style="width:50px;height:600px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="mb-0"><strong class="text-primary">Contact Us</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p></p>
                  </div>
                </div>
                
                <p><a href="contact-us" class="btn btn-primary px-5 py-3">Contact Us</a></p>
              </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@endsection
