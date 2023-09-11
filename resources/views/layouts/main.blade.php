<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href={{ asset('assets/img/logo-undip.png') }} />
    <title>Beranda - Tim Penjaminan Mutu</title>
    <link href={{ asset('css/style.css') }} rel="stylesheet" />
    {{-- custom css --}}
    <link href={{ asset('css/custom-css.css') }} rel="stylesheet" />
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
