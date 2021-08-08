<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vizion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="{{ asset('bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}">
        <ilnk href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet"href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('myCss/index.css') }}">
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top" aria-label=" navbar ">
            <div class="container-fluid">
                <a class="navbar-brand px-5" href="{{ url('/') }}"><img src="{{ asset('image/vizion.png') }}" alt="logo" width="110px" height="30px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-md-end me-5 pe-5" id="navbarsExample10">
                <ul class="navbar-nav fs-5 primary">
                  <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">KREU</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link " href="{{url('/aboutus')}}">RRETH NESH</a>
                  </li>
                  <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">SHERBIME</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown10">
                      <li><a class="dropdown-item" href="{{ asset('/scolarship') }}">Bursa</a></li>
                      <li><a class="dropdown-item" href="{{ asset('/summerSchool') }}">Shkollë Verore</a></li>
                      <li><a class="dropdown-item" href="#">Aktivitete</a></li>
                    </ul>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link" href="{{ asset('/contact') }}">KONTAKT</a>
                  </li>
                  <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">APLIKO</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown10">
                      <li><a class="dropdown-item" href="{{url('/scolarship_form')}}"target="_blank">Bursë</a></li>
                      <li><a class="dropdown-item" href="{{url('/summerSchool_form')}}" target="_blank">Shkollë Verore</a></li>
                    </ul>
                  </li>
                  <li class="nav-item px-2">
                    @if (Route::has('login'))
                    <div class="hidden top-0 right-0 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-btn btn btn-primary btn-outline-light btn-lg mr-5 px-4"id="nav-button">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-btn btn btn-primary btn-outline-light btn-lg px-4" id="nav-button">Register</a>
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

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('image/dorm4.jpg') }}"class="d-block w-100 img-fluid" id="carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block d-sm-block my-5">
                  <p class="text-lg fw-bold animate__animated animate__backInDown"id="paragraph">merrni hapin e parë</p>
                  <h1 class="fw-bold display-2 animate__animated animate__backInRight">përgjatë suksesit me ne</h1><br>
                  <a href="{{ url('/aboutus') }}" class="btn btn-primary btn-outline-light btn-lg animate__animated animate__backInUp"id="carousel-btn">me shume <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/dorm2.jpg') }}" class="d-block w-100 img-fluid"id="carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block d-sm-block my-5">
                  <p class="text-lg fw-bold animate__animated animate__backInDown"id="paragraph">investoni për një </p>
                  <h1 class="fw-bold display-2 animate__animated animate__backInRight">gjeneratë më të mirë</h1><br>
                  <a href="{{ url('/contact') }}" class="btn btn-primary btn-outline-light btn-lg animate__animated animate__backInUp"id="carousel-btn">kontaktoni <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/dorm35.jpg') }}" class="d-block w-100 img-fluid"id="carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block d-sm-block my-5">
                  <p class="text-lg fw-bold animate__animated animate__backInDown"id="paragraph"> vendi në të cilin </p>
                  <h1 class="fw-bold display-2 animate__animated animate__backInRight">dija është parimi kryesor</h1><br>
                  <a href="{{ url('/aboutus') }}" class="btn btn-primary btn-outline-light btn-lg animate__animated animate__backInUp"id="carousel-btn">me shume <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
            <!-- ---jumbotron--- -->
            <div class="container-fluid p-4" id="bg-color">
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead fs-3 text-light">Kerkoni nje vendqendrim ideal per te kryer studimet tuaja?</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                        <a href="#" class="btn btn-primary btn-lg" id="jumbotron-btn">kontaktoni <i class="fas fa-chevron-right fs-6"></i></a>
                    </div>
                </div>
            </div>
            <!-- cards -->
          <div class="row row-card row-cols-1 row-cols-md-3 g-4 pt-4 mx-5 px-5 justify-content-center ">
            <div class="col">
              <div class="card card-one h-100" id="card" style="max-width: 20rem; max-height: 30rem;">
                <div class="inner">
                  <img src="{{ asset('image/dorm4.jpg') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Burse Qendrimi</h5>
                  <p class="card-text">Reduktoni tarifen tuaj te qendrimit ne konvikt duke perfituar nje burse ne baze te kritereve te saj.</p>
                  <a href="{{ url('/scolarship') }}" class="btn btn-primary card-btn">me shume  <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 "id="card" style="max-width: 20rem; max-height: 30rem;">
                <div class="inner">
                  <img src="{{ asset('image/dorm5.jpg') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Aktivitete </h5>
                  <p class="card-text">Pergjat vitit shkollor dhe jo vetem aktivitetet e ndryshme nuk mungojne tek ne...</p>
                  <a href="{{ url('/summerSchool') }}" class="btn btn-primary card-btn">me shume <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 "id="card" style="max-width: 20rem; max-height: 30rem;">
                <div class="inner">
                  <img src="{{ asset('image/dorm1.jpg') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Shkolle Verore</h5>
                  <p class="card-text">Nese doni te shfrytezoni sadopak veren per te ardhmen tuaj ateher nje shkolle verore tek ne ju mirepret.</p>
                  <a href="{{ url('/summerSchool') }}" class="btn btn-primary card-btn">me shume <i class="fas fa-chevron-right fs-6"></i></a>
                </div>
              </div>
            </div>
          </div>
            <!-- Parallax-->
          <div class="parallax mt-5"id="parallax-img" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('image/dorm35.jpg') }}">
            <div class="text-container">
              <h5 class="info text-center py-5 my-5" style="font-size:5vw;color:#bec2c9;">Duke ber gjene e duhur<br> ne kohen e duhur</h5>
            </div>
          </div>
          <!-- <div class="parallax mt-5"></div> -->
          <!-- ===== Owl Carousel ===== -->
          <div class="container mt-5">
            <div class="owl-carousel owl-theme">
              <div class="card my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student4.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Behar Hoxha</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card  my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student7.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Alban Shehu</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card  my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student8.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Gentian Basha</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card  my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student9.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Xhoni Hysa</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card  my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student10.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Kostandin Cani</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card  my-5 mx-5" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('image/student11.jpg') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Anxhelo Jacaj</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </main>
      <!-- =====Location==== -->
      <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.0237778488367!2d19.802044914794884!3d41.330096307508796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135031a878d96b77%3A0xd26d8f2e30b6ea0d!2sMozaiku%20i%20Tiran%C3%ABs!5e0!3m2!1ssq!2s!4v1621045144439!5m2!1ssq!2s" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </p>
         <!-- Footer -->
    <footer class="bg-light ">
      <div class="container p-4">
        <section class="mb-4"id="social">
          <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
          <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-primary btn-floating m-1 mx-3"id="icons" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
        </section>

        <section class="">
          <form action="">
            <div class="row d-flex justify-content-center">
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <div class="col-md-5 col-12">
                <div class="form-outline mb-4">
                  <input type="email" id="form5Example2" class="form-control" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
              </div>
              <div class="col-auto">
    
                <button type="submit" class="btn btn-primary mb-4"id="formButton">
                  Subscribe
                </button>
              </div>
            </div>
          </form>
        </section>
        <section class="links">
          <div class="row">
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
          </div>
        </section>
      </div>
      <!-- Copyright -->
      <div class="copyright text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Copyright 2021&copy;:
        <a class="text-light"style="text-decoration:none" href="index.php">Vizion.com</a>
      </div>
    </footer>
   
      </script>
          <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
          <script src="{{ asset('parallax.js/parallax.min.js') }}"></script> 
          <script src="{{ asset('bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>
          <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('js/jquery.js') }}"></script>
          <script src="{{ asset('myJs/index.js') }}"></script>
          <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
    </body>
</html>
