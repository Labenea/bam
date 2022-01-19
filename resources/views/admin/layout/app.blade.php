<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <title>Bawera Artha Makmur Admin</title>
</head>
<body>
    @include('admin.inc.header')
    <div class="container-fluid">
        <div class="row">
            @include('admin.inc.nav')
            @yield('content')
        </div>
    </div>

</body>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</html>
