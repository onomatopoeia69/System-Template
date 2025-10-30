{{-- all of the navbars and footer are inside here --}}

@extends('layouts.guest-layout')

{{-- title section --}}

@section('title','Shop')

{{-- all the head scripts,links and cdn's here --}}

@section('head-script')

<link href="https://fonts.googleapis.com/css2?family=Agrandir&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



{{-- the body tag if you need to insert the class of the body --}}

@section('body-class', 'bg-gray-900 h-screen text-gray-300 font-sans')

{{-- all the contents --}}

@section('content')

        

        <section id="hero" class="container-fluid text-center d-flex justify-content-center bg-gray-900 align-items-center" style="min-height: 100vh;">
            <h1 class="display-2 fw-bold text-center">
            <span class="d-block text-light">WE MAKING THINGS OUTSIDE</span>
            <span id="typed" class="text-yellow-300"></span>
            </h1>


        <div class="custom-shape-divider-bottom-1761648475">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
   
        </section>


  <section id="products" class="bg-gray-100 p-10" style="min-height:100vh;">

   <span class="d-block fs-2 text-center text-black fw-bold pb-5">
   <div class="flex-grow-1 border-top border-black"></div>POPULAR PRODUCTS
   <div class="flex-grow-1 border-top border-black"></div>
   </span>

    <div class="swiper mySwiper"  style="width: 100%; height: 30rem;">

    <div class="swiper-wrapper">

        <div class="swiper-slide">
              {{-- card --}}
        <div class="d-flex border rounded-4 shadow overflow-hidden" style="width: 100%; height: 30rem;">
            <!-- Card image -->
            <div class="flex-grow-0 bg-gray-100" style="width: 50%;">
              <div class="swiper-zoom-container">
              <img src="{{ asset('img/products/dryer.png') }}" class="w-100 h-100 rounded-start-4"  alt="image_product">
              </div>
            </div>
            <!-- Card details -->
            <div class="p-3 d-flex flex-column justify-content-between flex-grow-1 bg-gray-900 text-white">
              <div>
                <h5 class="fw-bold mb-5 mt-3 text-center text-yellow-300">Card Title</h5>
                <p class="small text-white">This is a simple description using Bootstrap utilities.</p>
              </div>
              <a href="#" class="btn btn-warning w-100">BUY</a>
            </div>
          </div>
      </div>

      <div class="swiper-slide">
          {{-- card --}}
          <div class="d-flex border rounded-4 shadow overflow-hidden" style="width: 100%; height: 30rem;">
            <!-- Card image -->
              <div class="flex-grow-0 bg-gray-100" style="width: 50%;">
                <div class="swiper-zoom-container">   
                <img src="{{ asset('img/products/refrigerator.png') }}" class="w-100 h-100 rounded-start-4" alt="image_product">
                </div>
              </div>
              <!-- Card details -->
              <div class="p-3 d-flex flex-column justify-content-between flex-grow-1 bg-gray-900">
                <div>
                  <h5 class="fw-bold mb-5 mt-3 text-center text-yellow-300"> PANDORAS™ REFRIGERATOR</h5>
                  <p class="small text-white">This is a simple description using Bootstrap utilities.</p>
                </div>
                <a href="#" class="btn btn-warning w-100">BUY</a>
              </div>
            </div>
          </div>


         <div class="swiper-slide">
          {{-- card --}}
          <div class="d-flex border rounded-4 shadow overflow-hidden" style="width: 100%; height: 30rem;">
            <!-- Card image -->
              <div class="flex-grow-0 bg-gray-100" style="width: 50%;">
                <div class="swiper-zoom-container">   
                <img src="{{ asset('img/products/electric-bicycle-7275274_1280.jpg') }}" class="w-100 h-100 rounded-start-4" alt="image_product">
                </div>
              </div>
              <!-- Card details -->
              <div class="p-3 d-flex flex-column justify-content-between flex-grow-1 bg-gray-900">
                <div>
                  <h5 class="fw-bold mb-5 mt-3 text-center text-yellow-300"> PANDORAS™ ELECTRIC BICYCLE</h5>
                  <p class="small text-white">This is a simple description using Bootstrap utilities.</p>
                </div>
                <a href="#" class="btn btn-warning w-100">BUY</a>
              </div>
            </div>
          </div>


         <div class="swiper-slide">
          {{-- card --}}
          <div class="d-flex border rounded-4 shadow overflow-hidden" style="width: 100%; height: 30rem;">
            <!-- Card image -->
              <div class="flex-grow-0 bg-gray-100" style="width: 50%;">
                <div class="swiper-zoom-container">   
                <img src="{{ asset('img/products/electric-vehicle-2777195_1280.png') }}" class="w-100 h-100 rounded-start-4" alt="image_product">
                </div>
              </div>
              <!-- Card details -->
              <div class="p-3 d-flex flex-column justify-content-between flex-grow-1 bg-gray-900">
                <div>
                  <h5 class="fw-bold mb-5 mt-3 text-center text-yellow-300"> PANDORAS™ ELECTRIC GOLF BUGGY</h5>
                  <p class="small text-white">This is a simple description using Bootstrap utilities.</p>
                </div>
                <a href="#" class="btn btn-warning w-100">BUY</a>
              </div>
            </div>
          </div>
          
      </div>

          {{-- pagination --}}
          <div class="swiper-pagination"></div>

          <!-- Add Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

      </div>
      </section>

      <section class="bg-gray-200 p-10" style="min-height: 90vh;">

           <span class="d-block fs-2 text-center text-black fw-bold pb-5">
          <div class="flex-grow-1 border-top border-black"></div>CATEGORIES
          <div class="flex-grow-1 border-top border-black"></div>
          </span>


      </section>

        <section class="bg-gray-900 p-10" style="min-height: 60vh;">

           <span class="d-block fs-2 text-center text-yellow-300 fw-bold pb-5">
          <div class="flex-grow-1 border-top border-yellow-300"></div>
              REVIEWS
          <div class="flex-grow-1 border-top border-yellow-300"></div>
          </span>


      </section>



  <button id="backToTop" class="btn btn-warning shadow"
        style="position: fixed; bottom: 40px; right: 40px; z-index: 1000; display: none;">
       <i id="arrowUp" class="bi bi-arrow-up"></i>
   </button>






 {{-- for the body scripts --}}
@section('body-script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

<script>

  let upBtn = document.querySelector("#backToTop");

  window.addEventListener('scroll',()=>{

    upBtn.style.display = window.scrollY > 200 ? 'block' : 'none';

  });

  upBtn.addEventListener('click',()=>{
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  upBtn.addEventListener('mouseover',(event)=>{

    if(event.target.id === "arrowUp" || event.target.id === "backToTop")
    {
      upBtn.classList.add('fw-bold');
      upBtn.textContent = "Back To the Top";
    }
  });

upBtn.addEventListener('mouseout',()=>{

    upBtn.innerHTML= `<i id="arrowUp" class="bi bi-arrow-up">`;
 
  });  

</script>


<script>

  let eyeBtn = document.querySelector("#togglePassword");
  let passwordInput = document.querySelector("#loginPassword");

  
  passwordInput.addEventListener('input',(event)=>{

      let value = event.target.value;

      if(value){

         eyeBtn.classList.remove('d-none');
      
      }else{

        eyeBtn.classList.add('d-none');

      }
    

  });

  eyeBtn.addEventListener('click',(event)=>{

    let isPassword = passwordInput.type === 'password' ? true : false;

    if(isPassword)
    {
      passwordInput.type = 'text';
      eyeBtn.classList.remove('bi-eye-fill');
      eyeBtn.classList.add('bi-eye-slash-fill');

    }else{
      passwordInput.type = 'password';
      eyeBtn.classList.remove('bi-eye-slash-fill');
      eyeBtn.classList.add('bi-eye-fill');
    }



  });
  

</script>

<script>
  VANTA.NET({
    el: "#hero",
    color: 0xfde047,       
    backgroundColor: 0x111827, 
    maxDistance: 20.00,
    spacing: 15.00
  });
</script>

<script>

var typed = new Typed('#typed', {
  strings: ['THE BOX.', 'THIS WORLD.'],
  typeSpeed: 120,
  backSpeed: 120,
  loop: true,
  showCursor: true,
  cursorChar: '|',
});

</script>


<script>
  const swiper = new Swiper(".mySwiper", {
    effect: "cube",
      grabCursor: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      zoom: true,
      loop: true,               
    autoplay: {
      delay: 2500,           
      disableOnInteraction: false, 
    },
  });
</script>

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