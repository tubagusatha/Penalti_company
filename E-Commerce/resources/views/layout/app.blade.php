<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinalti Company</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/flowbite.css')}}">
    <link rel="stylesheet" href="{{asset('css/cropper.css')}}">
    <link rel="stylesheet" href="{{asset('font/futura.css')}}">
    <link rel="stylesheet" href="{{asset('font/product-sans.css')}}">
    <script src="{{asset('js/cropper.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.min.css">
    <script src="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
</head>
<body>
    @yield('main')
    <script src="{{asset('js/flowbite.js')}}"></script>
</body>
</html>