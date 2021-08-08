<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}">
        <ilnk href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet"href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('myCss/index.css') }}">
</html>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"><i class="fas fa-user-cog fs-4 px-3"></i>
                {{ __('Dashboard for admin') }}
            </h2>
        </x-slot>
    
        <div class="py-12" id="bck-image">
            <div class="max-w-7xl my-5 mx-auto sm:px-6 lg:px-8">
                {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in as admin!
                    </div>
                </div><br> --}}
                    <div class="p-6 bg-primary border-b border-gray-200 ">
                        <a href="/dormMembersList" class="text-white fs-5"><i class="fas fa-list fs-4 px-3"></i>Lista e pjestareve te konviktit</a>
                    </div><br>  
                    <div class="p-6 bg-danger border-b border-gray-200">
                        <a href="/scolarshipMembersList" class="text-white fs-5"><i class="fas fa-user-graduate fs-4 px-3"></i>Lista e aplikanteve te burses</a>
                    </div><br> 
                    <div class="p-6  bg-warning border-b border-gray-200">
                        <a href="/summerSchoolMembersList" class="text-white fs-5"><i class="fas fa-school fs-4 px-3"></i>Lista e aplikanteve te shkolles verore</a>
                    </div><br>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>


