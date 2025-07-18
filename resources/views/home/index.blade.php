{{-- all of the navbars and footer are inside here --}}

@extends('layouts.guest-layout')

{{-- title section --}}

@section('title','Shop')

{{-- all the scripts,links and cdn's here --}}

@section('script')

<link href="https://fonts.googleapis.com/css2?family=Agrandir&display=swap" rel="stylesheet">
<link rel="stylesheet" href={{ asset('css/style.css') }}>
<script src="https://cdn.tailwindcss.com"></script>

@endsection

{{-- the body tag if you need to insert the class of the body --}}

@section('body-class', 'bg-gradient-to-b from-violet-900 to-violet-500 h-screen text-gray-300 font-sans')

{{-- all the contents --}}

@section('content')

<div class="w-full h-screen">

    <section class="mt-52 backdrop-blur-lg p-10 rounded-lg flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Welcome to Our Ordering & Billing System</h1>
            <p class="text-xl text-gray-200 mb-12">Browse products, manage your orders, and enjoy a seamless shopping
                experience.</p>
            <a href="#"
                class="font-bold bg-transparent border border-white text-white px-6 py-3 rounded-3xl hover:bg-white hover:text-violet-900 transition duration-300">Get
                Started</a>
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

@endsection