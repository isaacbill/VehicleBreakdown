<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vehicle Breakdown Assistance System</title>

         Fonts 

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
 -->
 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Vehicle Breakdown Assistance System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <!--<link rel="stylesheet" href="css/owl.carousel.min.css">-->
  <!--<link rel="stylesheet" href="css/owl.theme.default.min.css">-->


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="home" class="js-logo-clone"><strong class="text-primary">Vehicle Breakdown Assistance System</a>
            </div>
          </div>
          <div>
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
          </div>
      </div>
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
<div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3>Repair Service</h3>
              <p>Vehicle Breakdown assistance System offers roadside repair service to vehicles that are not critical.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3>Towing Service</h3>
              <p> If your car has met with a major accident and is immovable, we will help you tow your car to the nearest workshop or legal authorities.</p>
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="contact_us">Contact Us</a></h3>
              <p>Contact us incase your vehicle breaks down or have witnessed an accident so that we can help as fast as we can .</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="site-section bg-image overlay" style="background-image: url('images/vehicle_breakdown.jpg');">
      </div>
 -->
    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>VBAS will help you service your vehicle in the shortest time possible </p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Vehicle Breakdown assistance system is easy to use and has an interactive user interface</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>VBAS allows interaction with our service providers on a daily basis</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4"> Useful Links</h3>
               <ul class="list-unstyled">
              <li><a href="home">Home</a></li>
              <li><a href="about-us">About Us</a></li>
              <li><a href="SendRequest.create">Send Request</a></li>
              <li><a href="contact-us">Contact Us</a></li>
            </ul>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Services</h3>
            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Send Request</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Tom St. Tower Centre, Meru,Kenya</li>
                <li class="phone"><a href="tel://23923929210">+254722548683</a></li>
                <li class="email">admin@breakdown.com</li>
              </ul>
            </div>

  
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | Vehicle Breakdown Assistance
               <i class="icon-heart text-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"
                class="text-primary">System</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
</body>

</html>