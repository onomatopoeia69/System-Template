@extends('layouts.user-layout')


@section('title','Home')

@section('head-script')


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>

@endsection


@section('body-class', "bg-gray-50 text-gray-900 text-xl")



@section('content')


  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 py-10">

    <!-- Welcome Message -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold text-violet-700">Hello, {{ Auth::user()->first_name}} !</h2>
      <p class="text-gray-600 mt-1">Buy and Shop whatever you like. Sky is the limit.</p>
    </section>

    <!-- Quick Links -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12">
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md text-center">
        <p class="text-lg font-semibold">🧾 My Orders</p>
        <p class="text-sm text-gray-500 mt-1">Track your orders</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md text-center">
        <p class="text-lg font-semibold">💖 Wishlist</p>
        <p class="text-sm text-gray-500 mt-1">Items you saved</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md text-center">
        <p class="text-lg font-semibold">👤 Profile</p>
        <p class="text-sm text-gray-500 mt-1">Manage your info</p>
      </div>
    </section>


 <section class="mb-12">
  <h3 class="text-xl font-bold mb-4">Notifications</h3>
  <div class="bg-white p-4 rounded-lg shadow divide-y divide-gray-100">
    <div class="py-2 text-sm text-gray-700">📦 Your order <strong>#100234</strong> has been delivered!</div>
    <div class="py-2 text-sm text-gray-700">💳 Payment for order <strong>#100211</strong> is being processed.</div>
    <div class="py-2 text-sm text-gray-700">🔥 New deals just dropped on your wishlist items!</div>
  </div>
</section>
    


<!-- Product Hero Carousel -->
<div id="heroCarousel" class="carousel slide mb-12" data-bs-ride="carousel">
  <div class="carousel-inner rounded-lg overflow-hidden shadow-lg">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="relative h-[300px] md:h-[450px] bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1200x500?text=Smart+Gadgets+Sale');">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start px-8 md:px-20">
          <h2 class="text-3xl md:text-5xl font-bold text-white mb-2">Smart Gadgets Sale</h2>
          <p class="text-white text-sm md:text-lg mb-4">Up to 40% off on smart watches, speakers, and more!</p>
          <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white px-4 py-2 rounded shadow-md transition">Shop Now</a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="relative h-[300px] md:h-[450px] bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1200x500?text=Fashion+Deals');">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start px-8 md:px-20">
          <h2 class="text-3xl md:text-5xl font-bold text-white mb-2">Fashion Steals</h2>
          <p class="text-white text-sm md:text-lg mb-4">Trendy styles for every season starting at ₱199!</p>
          <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white px-4 py-2 rounded shadow-md transition">Explore Now</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="relative h-[300px] md:h-[450px] bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1200x500?text=Free+Shipping');">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start px-8 md:px-20">
          <h2 class="text-3xl md:text-5xl font-bold text-white mb-2">Free Shipping</h2>
          <p class="text-white text-sm md:text-lg mb-4">Enjoy free delivery on orders ₱999 and up!</p>
          <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white px-4 py-2 rounded shadow-md transition">Learn More</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
     <button type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
    class="absolute top-1/2 -translate-y-1/2 left-2 z-10 bg-violet-700 hover:bg-violet-800 text-white rounded-full p-2 shadow transition">
    <i class="bi bi-chevron-left text-xl"></i>
    </button>

    <button type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
    class="absolute top-1/2 -translate-y-1/2 right-2 z-10 bg-violet-700 hover:bg-violet-800 text-white rounded-full p-2 shadow transition">
    <i class="bi bi-chevron-right text-xl"></i>
    </button>
</div>


<section class="mb-12">
  <div class="bg-gradient-to-r from-violet-600 to-violet-800 text-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center justify-between">
    <div>
      <h3 class="text-2xl font-bold">🎉 Mid-Year Sale!</h3>
      <p class="text-sm mt-1">Up to 50% off on selected items. Limited time only!</p>
    </div>
    <a href="#" class="mt-4 md:mt-0 bg-white text-violet-700 px-4 py-2 rounded font-semibold hover:bg-gray-100 transition">Shop Now</a>
  </div>
</section>

<!-- Recently Viewed -->
<section class="mb-12">
  <h3 class="text-xl font-bold mb-4">Recently Viewed</h3>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    <!-- Item -->
    <div class="bg-white rounded-lg shadow hover:shadow-md">
      <img src="https://via.placeholder.com/300x200" alt="Viewed Item" class="w-full h-40 object-cover rounded-t-lg">
      <div class="p-4">
        <h4 class="font-semibold text-sm">Portable Tripod</h4>
        <p class="font-bold text-violet-700 mt-1">₱799.00</p>
      </div>
    </div>
    <!-- Add more items here -->
  </div>
</section>


    <!-- Recommended Products -->
    <!-- Recommended Products Carousel -->
<section class="mb-12">
  <h3 class="text-xl font-bold mb-6">Recommended for You</h3>

  <div id="recommendedCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
          <!-- Product Card 1 -->
          <div class="bg-white rounded-lg shadow hover:shadow-md">
            <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-t-lg" alt="Wireless Headphones">
            <div class="p-4">
              <h4 class="font-semibold text-sm">Wireless Headphones</h4>
              <p class="text-sm text-gray-600">Crystal clear sound</p>
              <p class="font-bold text-violet-700 mt-2">₱1,999.00</p>
            </div>
          </div>

          <!-- Product Card 2 -->
          <div class="bg-white rounded-lg shadow hover:shadow-md">
            <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-t-lg" alt="Smart Watch">
            <div class="p-4">
              <h4 class="font-semibold text-sm">Smart Watch</h4>
              <p class="text-sm text-gray-600">Fitness & health</p>
              <p class="font-bold text-violet-700 mt-2">₱2,499.00</p>
            </div>
          </div>

          <!-- Product Card 3 -->
          <div class="bg-white rounded-lg shadow hover:shadow-md">
            <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-t-lg" alt="Eco Water Bottle">
            <div class="p-4">
              <h4 class="font-semibold text-sm">Eco Water Bottle</h4>
              <p class="text-sm text-gray-600">Keep drinks cold</p>
              <p class="font-bold text-violet-700 mt-2">₱499.00</p>
            </div>
          </div>

          <!-- Product Card 4 -->
          <div class="bg-white rounded-lg shadow hover:shadow-md">
            <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-t-lg" alt="Bluetooth Speaker">
            <div class="p-4">
              <h4 class="font-semibold text-sm">Bluetooth Speaker</h4>
              <p class="text-sm text-gray-600">Portable music</p>
              <p class="font-bold text-violet-700 mt-2">₱899.00</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 (Repeat with more products) -->
      <div class="carousel-item">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
          <!-- You can add more product cards here -->
          <div class="bg-white rounded-lg shadow hover:shadow-md">
            <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-t-lg" alt="Power Bank">
            <div class="p-4">
              <h4 class="font-semibold text-sm">Power Bank</h4>
              <p class="text-sm text-gray-600">Charge on the go</p>
              <p class="font-bold text-violet-700 mt-2">₱1,299.00</p>
            </div>
          </div>
          <!-- Add more cards to complete this slide -->
        </div>
      </div>
    </div>

    <!-- Carousel Controls -->
    <button type="button" data-bs-target="#recommendedCarousel" data-bs-slide="prev"
    class="absolute top-1/2 -translate-y-1/2 left-2 z-10 bg-violet-700 hover:bg-violet-800 text-white rounded-full p-2 shadow transition">
    <i class="bi bi-chevron-left text-xl"></i>
    </button>

    <button type="button" data-bs-target="#recommendedCarousel" data-bs-slide="next"
    class="absolute top-1/2 -translate-y-1/2 right-2 z-10 bg-violet-700 hover:bg-violet-800 text-white rounded-full p-2 shadow transition">
    <i class="bi bi-chevron-right text-xl"></i>
    </button>
  </div>
</section>


    <!-- Recent Orders -->
    <section>
      <h3 class="text-xl font-bold mb-6">Recent Orders</h3>
      <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm divide-y divide-gray-200">
          <thead class="bg-violet-100 text-left">
            <tr>
              <th class="px-6 py-3 font-medium text-gray-700">Order #</th>
              <th class="px-6 py-3 font-medium text-gray-700">Date</th>
              <th class="px-6 py-3 font-medium text-gray-700">Total</th>
              <th class="px-6 py-3 font-medium text-gray-700">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <tr>
              <td class="px-6 py-4">#100234</td>
              <td class="px-6 py-4">July 20, 2025</td>
              <td class="px-6 py-4">₱2,398.00</td>
              <td class="px-6 py-4">
                <span class="text-xs px-2 py-1 rounded-full bg-green-500 text-white">Delivered</span>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4">#100211</td>
              <td class="px-6 py-4">July 12, 2025</td>
              <td class="px-6 py-4">₱799.00</td>
              <td class="px-6 py-4">
                <span class="text-xs px-2 py-1 rounded-full bg-yellow-500 text-white">Processing</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>




<div class="toast-container position-fixed  bottom-0 end-0 p-3" style="z-index: 1055;">

    
 @if (session('welcome'))

 <x-toast color="success" id='liveToast' text="white" time="{{session('time')}}" >
    {{session('welcome')}} {{Auth::user()->first_name}}
 </x-toast>

@endif

@if (session()->has('emailVerified') && session('emailVerified') == false)
    <x-toast color="danger" id="emailToast" text="white" time="{{ session('time') }}">
        Please verify your email.
        <div class="mt-2 pt-2 border-top">
            <x-buttons color="warning" size="sm" href="{{route('users.verify')}}">Take action</x-buttons>
            <x-buttons color="secondary" size="sm">Close</x-buttons>
        </div>
    </x-toast>
@endif

</div> 



@section('body-script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

<script>

  const dropdownBtn = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');


    document.addEventListener('DOMContentLoaded', function () {
        var liveToast = document.getElementById('liveToast');

        if (liveToast) {
            new bootstrap.Toast(liveToast).show();
        }

        var emailToast = document.getElementById('emailToast');
        if (emailToast) {
            new bootstrap.Toast(emailToast).show();
        }
    });

  document.addEventListener('click', function (e) {
    if (dropdownBtn.contains(e.target)) {
      dropdownMenu.classList.toggle('hidden');
       dropdownBtn.classList.toggle('font-bold');
       dropdownBtn.classList.toggle('text-violet-700');
    } else if (!dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add('hidden');
      dropdownBtn.classList.remove('font-bold', 'text-violet-700');
    }
  });

  document.addEventListener('click',function(s){

    if(notificationBtn.contains(s.target)){

      notificationMenu.classList.toggle('hidden');
      notificationBtn.classList.toggle('font-bold');
      notificationBtn.classList.toggle('text-violet-700');

    }else if(!notificationMenu.contains(s.target)){

      notificationMenu.classList.add('hidden');
      notificationBtn.classList.remove('font-bold', 'text-violet-700');
    }

  });


</script>

@endsection

@endsection


