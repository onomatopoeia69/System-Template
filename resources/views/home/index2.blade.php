<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Agrandir&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-500">


        {{-- navbar --}}
    <div class="bg-white shadow-xl sticky top-0">
        <nav class="p-2 flex justify-between items-center ">
        <div class="m-4 font-bold text-2xl">
            <a href="" class="text-violet-700">ShopMate</a>
        </div>
            <div class="">
                <ul class="mx-5 flex justify-center items-center gap-4 text-l font-semibold">
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                            <span>Shop</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                            <span>About</span>
                        </a>
                     </li>
                </ul>
            </div>
        </nav>
    </div>

    {{-- featured --}}

    <section class="max-w-7xl mx-auto py-4 mt-10 px-4">

        <h2 class="text-violet-700 text-2xl pb-3 font-bold">Featured Products</h2>

        <div class="mt-8">
          <!-- cards goes here -->

          <div class="bg-white rounded overflow-hidden shadow-md">
          <img src="#" alt="" class="w-full object-cover h-50 md:h-50 " />

          <div class="px-3 py-3">
            <span class="font-bold text-md">Stephen Curry</span>
            <span class="block text-sm">Recipe by: DoctorWho?</span>
          </div>
         </div>
        </div>
    </section>

    {{-- latest --}}

   <section class="max-w-7xl mx-auto py-4 mt-10 px-4">

       <h2 class="text-violet-700 text-2xl pb-3 font-bold">Latest Products</h2>

        <div class="mt-8">
          <!-- cards goes here -->

          <div class="bg-white rounded overflow-hidden shadow-md">
          <img src="#" alt="" class="w-full object-cover h-50 md:h-50 " />

          <div class="px-3 py-3">
            <span class="font-bold text-md">Stephen Curry</span>
            <span class="block text-sm">Recipe by: DoctorWho?</span>
          </div>
         </div>
        </div>

    </section>

</body>
</html>