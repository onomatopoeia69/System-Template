@extends('layouts.user-layout')

@section('title','Home')

@section('head-script')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.js.iife.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.css" />
@endsection

@section('body-class', "bg-gray-50 text-gray-900 text-xl")

@section('content')


<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-1 bg-white p-6 rounded-lg shadow">
            @include('users.socials.partials._add_form')
        </div>

        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow">
            @include('users.socials.partials._links_list')
        </div>
    </div>

</main>





<div class="toast-container position-fixed  bottom-0 end-0 p-3" style="z-index: 1055;">


    @if (session('welcome'))

    <x-toast color="success" id='liveToast' text="white" time="{{session('time')}}">
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


  function closeDropdown() {
    dropdownMenu.classList.add('hidden');
    dropdownBtn.classList.remove('font-bold');
}

setTimeout(() => {
// driver

const driver = window.driver.js.driver;


 dropdownMenu.classList.toggle('hidden');
 dropdownBtn.classList.toggle('font-bold');

const driverObj = driver({

  showProgress: true,
  allowClose: false,
   onCompleted: () => {
            closeDropdown();
  },

  onDestroyed: () => {
    closeDropdown();
   },

  steps: [
    { element: '#home', popover: { title: 'Home', description: 'This is the button, you can click this to redirect to home.' } },
    { element: '#orders', popover: { title: 'Orders', description: 'This button redirect you to the order you buy and the current condition of your order.' } },
    { element: '#cart', popover: { title: 'Cart', description: 'This button redirect you to your product wishlist or added to cart products.' } },
    { element: '#profile', popover: { title: 'Profile', description: 'This is the profile button' } },
    { element: '#settings', popover: { title: 'Settings', description: 'This is the settings button' } },
    { element: '#logout', popover: { title: 'Logout', description: 'This is the logout button' } },
  ]
});



driverObj.drive();


}, 3000);


</script>

@endsection

@endsection
