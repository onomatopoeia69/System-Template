<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
    <p>{{ Auth::user()->first_name}} {{Auth::user()->last_name}}</p>


    <form method="POST" action="{{ route('users.logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>  


@if (session('welcome'))

 <x-toast color="success" id='liveToast' text="white" time="{{session('time')}}" >
    {{session('welcome')}} {{Auth::user()->first_name}}
 </x-toast>

@endif


<script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastEl = document.getElementById('liveToast');
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>