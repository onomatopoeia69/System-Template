{{-- all of the navbars and footer are inside here --}}

@extends('layouts.guest-layout')

{{-- title section --}}

@section('title','Shop')

{{-- all the head scripts,links and cdn's here --}}

@section('head-script')

<link href="https://fonts.googleapis.com/css2?family=Agrandir&display=swap" rel="stylesheet">
<link rel="stylesheet" href={{ asset('css/style.css') }}>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.tailwindcss.com"></script>



{{-- the body tag if you need to insert the class of the body --}}

@section('body-class', 'bg-gradient-to-b from-violet-900 to-violet-500 h-screen text-gray-300 font-sans')

{{-- all the contents --}}

@section('content')

    {{-- Hero Section --}}
    <section class="mt-20 md:mt-48 backdrop-blur-lg p-6 sm:p-10 rounded-2xl flex items-center justify-center w-11/12 max-w-7xl mx-auto">
        <div class="text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">Welcome to Our Ordering & Billing System</h1>
            <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-8 sm:mb-12">Browse products, manage your orders, and enjoy a seamless shopping experience.</p>
            <a href="#" class="font-bold border border-white text-white px-6 py-3 rounded-3xl hover:bg-violet-300 hover:text-violet-900 transition duration-300">Get Started</a>
        </div>
    </section>

    </div>

    <section>
        <h1>Welcome to Our Landing Page</h1>
        <p>Test Landing Page</p>
        <button onclick="alert('Test')">Click Me!</button>
    </section>

    <section>
        <h2>Featured Products</h2>
        <div class="">
            <h3>Special Deals</h3>
            <p>Description of Product 1</p>
            <button>Add to Cart</button>
        </div>
        <div class="">
            <h3>Recommended Products</h3>
            <p>Description of Product 2</p>
            <button>Add to Cart</button>
        </div>
    </section>

 {{-- for the body scripts --}}
@section('body-script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>


 @if(session('login_required'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var loginModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
            loginModal.show();
        });
    </script>
@endif

@endsection

@endsection