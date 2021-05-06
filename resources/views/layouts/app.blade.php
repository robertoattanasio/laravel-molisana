<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- STYLES CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title> @yield('pageTitle') | La Molisana</title>
</head>
<body class="">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>