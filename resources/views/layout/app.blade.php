<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

</head>
<body>
<div class="header">
    <img src="https://www.placetopay.com/web/sites/all/themes/dp8/logo.svg" class="logo" alt="logo placetopay">
</div>
<div class="content">
    @yield('content')
</div>
<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>

