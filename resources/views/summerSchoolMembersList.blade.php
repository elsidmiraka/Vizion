<!DOCTYPE html>
<html lang="en">
<head>
  <title>Summer School Members List</title>
  <meta charset="utf-8">
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
  <link rel="stylesheet" href="{{ asset('bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}">
        <ilnk href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet"href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('myCss/index.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 mb-5 fixed-top" aria-label=" navbar ">
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
                <a class="nav-link" href="{{ url('/contact') }}">KONTAKT</a>
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
<div class="container mt-5 pt-5" id="bck-image">
  <h2 class="mt-5 pt-5">Lista e aplikanteve te shkolles verore</h2>
  <table class="table table-condensed">
    <thead class="table-dark">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>School</th>
        <th>Class</th>
        {{-- <th>Operation</th>      --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($summer_school_members as $summer_school_member)
            <tr>
                <td>{{ $summer_school_member['name'] }}</td>
                <td>{{ $summer_school_member['surname'] }}</td>
                <td>{{ $summer_school_member['email'] }}</td>
                <td>{{ $summer_school_member['phone'] }}</td>
                <td>{{ $summer_school_member['school'] }}</td>
                <td>{{ $summer_school_member['class'] }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ 'delete/'. $summer_school_member['id'] }}" role="button">Delete</a>
                  <a class="btn btn-warning" href="{{ 'editSummerSchoolMember/'.$summer_school_member['id'] }}" role="button">Edit</a>
              </td>
            </tr> 
        @endforeach
    </tbody>
  </table>
</div>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
          <script src="{{ asset('parallax.js/parallax.min.js') }}"></script> 
          <script src="{{ asset('bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>
          <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('js/jquery.js') }}"></script>
          <script src="{{ asset('myJs/index.js') }}"></script>
    
</body>
</html>
