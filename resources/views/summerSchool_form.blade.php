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
    <link rel="stylesheet" href="{{ asset('myCss/summerSchool_form.css') }}">
</head>
<body class="bg-light">
    <form action="{{ url('/summerSchool_form') }}" method="POST">
      {{ csrf_field() }}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="container bg-light rounded-1">
            <h1 class="text-center text-light mt-4 pt-5">Bëhu pjesë e një shkolle verore </h1>
          <div class="contact-form row mb-5 mt-3 pb-5">
            <div class="form-field col-lg-6 my-3">
              <label class="form-label text-light fs-5" for="name">Emër</label>
              <input type="text" name="name" value="" id="name" class="form-control input-text" />
            </div>
            <div class="form-field col-lg-6 my-3">
               <label class="form-label text-light fs-5" for="surname">Mbiemër</label>
               <input type="text" name="surname" value=""id="surname" class="form-control input-text" />
            </div>
            <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="email">Email</label>
                <input type="text" name="email" value="" id="email" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="phone">Numër Telefoni</label>
                <input type="number"name="phone" value="" id="phone" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="school">Shkolla 9-vjecare</label>
                <input type="text"name="school" value="" id="school" class="form-control input-text" />
             </div>
             <div class="form-field col-lg-6 my-3">
                <label class="form-label text-light fs-5" for="class">Klasa</label>
                <select class="form-select form-select-md"id="class" name="class" aria-label=".form-select-sm example">
                    <option selected>Zgjidhni klasen tuaj </option>
                    <option name="gjashte" value="gjashte">gjashte</option>
                    <option name="shtate" value="shtate">shtate</option>
                    <option name="tete" value="tete">tete</option>
                    <option name="nente" value="nente">nente</option>
                  </select>
             </div>
             <div class="form-field col-lg-6">
              <button type="submit" class="btn btn-light px-4 mt-3 fs-5">Submit</button>
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
      <script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>