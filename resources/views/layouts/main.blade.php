<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Starter</title>
    <link href={{ asset('css/style.css') }} rel="stylesheet" />
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
