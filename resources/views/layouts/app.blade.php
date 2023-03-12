<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our passion lies in helping businesses to stand out in a crowded marketplace by creating visuals that grab the targets attention. We have made our services accessible to businesses of all sizes, so that every organization can benefit from our expertise and modern designs.
        We offers following services Design A Logo | Visiting / Business Card Design | Social Media Page Creation | Professional Profile | Google Business Profile | so on ....">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @yield('css')
</head>

<body>
    <div id="app">
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        @include('layouts.footer')
        @yield('js')
    </div>
</body>

</html>