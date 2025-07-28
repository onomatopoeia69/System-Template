{{-- resources/views/auth/verify.blade.php --}}
@extends('layouts.user-layout')

@section('title', 'Verify Your Email')

@section('head-script')
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
@endsection


@section('body-class', "bg-gray-50 text-gray-900 text-xl")

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card shadow rounded-4 p-4" style="max-width: 480px; width: 100%; border: 1px solid #e5e7eb;">
        <h2 class="text-center mb-3 text-violet-700">
            <i class="bi bi-envelope-check-fill me-2"></i> Verify Your Email
        </h2>

        <p class="text-center text-gray-600 mb-4">
            @if(session('message'))
            We've sent a verification link to your email address.
            <br>
            Please check your inbox and click the link to activate your account.
            @else
            Click the button to sent verification link to your email address.
            @endif
          
        </p>

        
        @if(session('message'))
       
        <form method="POST" action="{{ route('verification.send') }}" class="d-grid mb-2">
            @csrf
            <button type="submit" class="btn btn-outline-violet-700 border-violet-700 text-violet-700 hover:bg-violet-50">
                <i class="bi bi-arrow-repeat me-1"></i> Resend Verification Email
            </button>
        </form>

        @endif
        

           @if(!session('message'))
       
    
         {{-- Check if verified (refresh) --}}
        <form method="POST" action="{{ route('verification.send') }}" class="d-grid mb-2">
             @csrf
            <button type="submit" class="btn btn-violet-700 text-white bg-violet-700 hover:bg-violet-800">
                <i class="bi bi-check-circle me-1"></i> Send Verification to Verify My Email
            </button>
        </form>

        @endif

    </div>
      
</div>

<div class="toast-container position-fixed  bottom-0 end-0 p-3" style="z-index: 1055;">

    
 @if (session('message'))

 <x-toast color="success" id='liveToast' text="white" time="{{session('time')}}" >
    {{session('message')}}
 </x-toast>

@endif

</div> 

@section('body-script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

<script>

  const dropdownBtn = document.getElementById('dropdownButton');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const notificationBtn = document.getElementById('notificationBtn');
  const notificationMenu = document.getElementById('notificationMenu');

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
      
     if (notificationBtn.contains(s.target)) {
      notificationMenu.classList.toggle('hidden');
    } else if (!dropdownMenu.contains(s.target)) {
      notificationMenu.classList.add('hidden');
    }

    });

</script>

@endsection

@endsection
