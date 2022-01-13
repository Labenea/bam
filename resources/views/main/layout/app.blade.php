<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">


    <title>Bawera Artha Makmur</title>
</head>
<body>
    <a href="https://wa.me/+6281246244965?text="
        class="whatsApp" target="_blank"><i class="bi bi-whatsapp my-whatsApp"></i></a>
    @include('main.inc.nav')
    @yield('content')
    @include('main.inc.footer')
</body>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</html>