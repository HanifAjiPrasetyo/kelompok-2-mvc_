<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body id="body">
    <header id="header-section">
        @include('student.layouts.navbar')
    </header>

    @yield('banner')

    <div class="content-wrapper">
        <div class="container">
            @yield('container')

            @include('student.layouts.footer')

            @include('student.register-member.register-form')
        </div>
    </div>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/aos/js/aos.js') }}"></script>
    <script src="{{ asset('js/landingpage.js') }}"></script>
</body>

</html>
