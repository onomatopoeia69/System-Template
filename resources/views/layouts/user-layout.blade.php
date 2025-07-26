<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'ShopMate')</title>
    
    @yield('head-script')

</head>

<body class="@yield('body-class', '')">
    @include('partials.user.navbar-user')
        @yield('content')

        @include('partials.user.footer-user')
     @yield('body-script')
</body>

</html>


