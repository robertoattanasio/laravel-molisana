<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title> @yield('pageTitle') | La Molisana</title>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>