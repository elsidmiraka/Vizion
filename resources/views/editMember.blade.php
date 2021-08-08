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
    <link rel="stylesheet" href="{{ asset('myCss/scolarship_form.css') }}">
</head>
<body class="bg-light">
    <form action="{{ url('/editMember') }}" method="POST">
      {{ csrf_field() }}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="container bg-light rounded-1">
            <h1 class="text-center text-light mt-4 pt-5">Ndrysho nje pjestar</h1>
          <div class="contact-form row mb-5 mt-3 pb-5">
            <input type="hidden" name="id" value="{{ $data['id'] }}" id="id" class="form-control input-text" />
            <div class="form-field col-lg-6 my-3">
              <label class="form-label text-light fs-5" for="name">Emër</label>
              <input type="text" name="name" value="{{ $data['name'] }}" id="name" class="form-control input-text" />
            </div>
            <div class="form-field col-lg-6 my-3">
               <label class="form-label text-light fs-5" for="surname">Mbiemër</label>
               <input type="text" name="surname" value="{{ $data['surname'] }}" id="lastName" class="form-control input-text" />
            </div>
            <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="email">Email</label>
                <input type="text" name="email" value="{{ $data['email'] }}" id="email" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="phone">Numër Telefoni</label>
                <input type="number" name="phone" value="{{ $data['phone'] }}" id="phone" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="school">Gjimnazi</label>
                <input type="text" name="school" value="{{ $data['school'] }}" id="school" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="class">Klasa</label>
                <select class="form-select form-select-md"id="class" name="class" aria-label=".form-select-sm example">
                    <option selected>Zgjidhni klasen </option>
                    <option name="X" value="X">X</option>
                    <option name="XI" value="XI">XI</option>
                    <option name="XII" value="XII">XII</option>
                    <option name="XIII" value="XIII">XIII</option>
                  </select>
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="scolarship">Bursë e ofruar</label>
                <select class="form-select form-select-md"id="scolarship" name="scolarship" aria-label=".form-select-sm example">
                    <option selected>Zgjidhni bursën </option>
                    <option name="0%" value="0%">0%</option>
                    <option name="25%" value="25%">25%</option>
                    <option name="50%" value="50%">50%</option>
                  </select>
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="payment">Pagesa e kryer</label>
                <select class="form-select form-select-md"id="payment" name="payment" aria-label=".form-select-sm example">
                    <option selected>Pagesa e kryer nga 9 muaj </option>
                    <option name="0 muaj" value="0 muaj">0 muaj</option>
                    <option name="1 muaj" value="1 muaj">1 muaj</option>
                    <option name="2 muaj" value="2 muaj">2 muaj</option>
                    <option name="3 muaj" value="3 muaj">3 muaj</option>
                    <option name="4 muaj" value="4 muaj">4 muaj</option>
                    <option name="5 muaj" value="5 muaj">5 muaj</option>
                    <option name="6 muaj" value="6 muaj">6 muaj</option>
                    <option name="7 muaj" value="7 muaj">7 muaj</option>
                    <option name="8 muaj" value="8 muaj">8 muaj</option>
                    <option name="9 muaj" value="9 muaj">9 muaj</option>
                  </select>
             </div>
             {{-- <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="average">Mesatare</label>
                <input type="text" name="average" value="" id="average" class="form-control input-text" />
             </div> --}}
             <div class="form-field col-lg-6">
                <button type="submit" class="btn btn-light px-4 mt-3 fs-5">Update</button>
             </div>
          </div>
        </div>
         
      
        <!-- Register buttons -->
        {{-- <div class="text-center">
          <p>or sign up with:</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div> --}}
      </form>

      <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
      <script src="{{ asset('bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js"></script>
      <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
      <script src="myJs/aboutUs.js"></script>
      <script src="myJs/index.js"></script>
</body>
</html>