<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mimba') }}</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        content="School Admin"
        name="description"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("backend/assets/images/favicon.ico") }}"/>


    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tailwind.css') }}"/>
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- DataTables -->
    <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- choices css -->
    <link href="{{ asset('backend/assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('vendor-css')
    @stack('custom-css')
</head>

<body data-mode="light" data-sidebar-size="lg">

<!-- left-bar-tab-menu -->
@include('backend.header')
<!-- ========== Left Sidebar Start ========== -->
@include('backend.left-sidebar')
<!-- Left Sidebar End -->
<div class="main-content dark:bg-zinc-700" style="min-height: 100vh;">
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            @yield('content')
        </div>
    </div>
    <!-- Footer Start -->
    @include('backend.footer')
    <!-- end Footer -->
</div>


<script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>


<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- Plugins js-->
<!-- dashboard init -->
<script src="{{ asset('backend/assets/js/pages/jquery-3.6.0.min.js') }}"></script>
{{--<script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>--}}

<script src="{{ asset('backend/assets/js/pages/nav&tabs.js') }}"></script>


<script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('backend/assets/js/pages/login.init.js') }}"></script>

<script src="{{ asset('backend/assets/js/app.js') }}"></script>

<!-- calendar init -->
<script src="{{ asset('backend/assets/libs/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/calendar.init.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ asset('backend/assets/js/pages/sweetalert.init.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>
<!-- choices js -->
<script src="{{ asset('backend/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<!-- init js -->
<script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>

@include('backend.alertHandle')
@stack('vendor-js')
@stack('custom-js')
</body>
</html>



