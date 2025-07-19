<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>


    <form method="POST" action="{{ route('users.logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>



</body>
</html>