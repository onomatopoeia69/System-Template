<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shoppee')</title>
    <link rel="icon" href="">

    @yield('head-script')

</head>

<body class="@yield('body-class', '')">

    @include('partials.guest.navbar-guest')

    @yield('content')

    @include('partials.guest.footer-guest')

     @yield('body-script')

</body>

</html>