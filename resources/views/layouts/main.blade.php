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
    {{-- bodymovin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"
        integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('partials.navbar')

    @yield('filter')

    @yield('container')

    @include('partials.footer')

    {{-- Alpine js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="{{ asset('assets/js/tw-elements.umd.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script> --}}
    <script src="{{ asset('assets/js/chartjs.min.js') }}"></script>
    @yield('scripts')

</body>

</html>
