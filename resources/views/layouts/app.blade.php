<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset("backend/assets/images/favicon.ico") }}"/>


    <link href="{{ asset("backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css") }}"
          rel="stylesheet"
          type="text/css">

    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tailwind.css') }}"/>


</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    {{--    @include('layouts.navigation')--}}
    @include('backend.header')
    @include('backend.left-sidebar')


    <!-- Page Heading -->
    {{--    @if (isset($header))--}}
    {{--        <header class="bg-white shadow">--}}
    {{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
    {{--                {{ $header }}--}}
    {{--            </div>--}}
    {{--        </header>--}}
    {{--    @endif--}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @include('sweetalert::alert')
    @include('backend.footer')
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>


    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Plugins js-->
    <script
            src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script
            src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- dashboard init -->
    <script src="{{ asset('backend/assets/js/pages/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

   <script src="{{ asset('backend/assets/js/pages/nav&tabs.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/login.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>



</div>
</body>
</html>
