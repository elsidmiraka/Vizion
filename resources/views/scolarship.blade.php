<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}">
    <ilnk href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet"href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
    <script src="{{ asset('parallax.js/parallax.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('myCss/aboutUs.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-4" aria-label=" navbar ">
    <div class="container-fluid">
        <a class="navbar-brand px-5" href="{{ url('/') }}"><img src="{{ asset('image/vizion.png') }}" alt="logo" width="110px" height="30px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end me-5 pe-5" id="navbarsExample10">
        <ul class="navbar-nav fs-5 primary">
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">KREU</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="{{ url('/aboutus')}}">RRETH NESH</a>
          </li>
          <li class="nav-item dropdown px-2">
            <a class="nav-link active dropdown-toggle " href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">SHERBIME</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="{{ url('/scolarship') }}">Bursa</a></li>
              <li><a class="dropdown-item" href="{{ url('/summerSchool') }}">Shkolle Verore</a></li>
              <li><a class="dropdown-item" href="{{ url('/events') }}">Aktivitete</a></li>
            </ul>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="{{ url('/contact') }}">KONTAKT</a>
          </li>
          <li class="nav-item dropdown px-2">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">APLIKO</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="{{url('/scolarship_form')}}" target="_blank">Burse</a></li>
              <li><a class="dropdown-item" href="{{url('/summerSchool_form')}}" target="_blank">Shkolle Verore</a></li>
            </ul>
          </li>
          <li class="nav-item px-2">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">{{ Auth::user()->name }}</a>
                @else
                    <a href="{{ route('login') }}" class="nav-btn btn btn-primary btn-outline-light btn-lg mr-5 px-4"id="login-button">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-btn btn btn-primary btn-outline-light btn-lg px-4" id="register-button">Register</a>
                    @endif
                @endauth
            </div>
        @endif
            {{-- <a id="link-button" class="nav-btn btn btn-primary btn-outline-light btn-lg" href="#">REGJISTROHU</a> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- =============  PARALLAX ============ --}}
  <div class="parallax img-fluid col-md-12" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('image/scolarship.jpg') }}">
    <div class="">
      <h5 class="info text-light text-center pt-5 fs-1"></h5>
    </div>
  </div>

  <div class="container py-4 text-center">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"style="font-size:5vw;color:rgb(0, 46, 91);">Bursa Qendrimi</h1>
        <p class="text-center px-5 " id="jumboutron_paragraph">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a href="{{ url('/scolarship_form') }}"><button class="btn btn-primary btn-lg" type="button">Apliko tani</button></a>
      </div>
    </div>
  </div>
  
  <div class="parallax img-fluid col-md-12" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('image/study.jpg') }}">
    <div class="">
      <h5 class="info text-light text-center pt-5 fs-1"></h5>
    </div>
  </div>

  <div class="container py-4 text-center">
    <div class="row align-items-md-stretch">
      <img src="{{ asset('image/student.jpg') }}"class="col-md-6"style="height:30rem;" alt="">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Kurset tona</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
      </div>
    </div>
    </div> 
  

   <!-- Footer -->
   <footer class="bg-light ">
    <!-- Grid container -->
    <div class="container p-4">
  
      <!-- Section: Social media -->
      <section class="mb-4"id="social">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
  
        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
  
        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
  
        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
  
        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
      </section>
      <!-- Section: Social media -->
  
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
  
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary mb-4"id="formButton">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
  
  
      <!-- Section: Links -->
      <section class="links">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0"id="col">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">LinkadasdS S 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="copyright text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Copyright 2021&copy;:
      <a class="text-light"style="text-decoration:none" href="index.php">Vizion.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>



    <script src="bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="myJs/aboutUs.js"></script>
    <script src="myJs/index.js"></script>
</body>
</html>