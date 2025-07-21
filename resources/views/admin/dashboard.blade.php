<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>test</p>
    <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

</body>
</html>