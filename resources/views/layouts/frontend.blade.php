<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Mimba') }}</title>

    {{--  <link rel="shortcut icon" type="image/x-icon" href="{{ asset("frontend/assets/image/favicon.ico") }}">
    <link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css") }}" />
    <link href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css") }}" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> --}}

    <!--    <link rel="stylesheet" href="Owl/owl.carousel.min.css">-->
     {{-- <link rel="stylesheet" href="{{ asset("frontend/assets/Owl/owl.carousel.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend/assets/responsible.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend/assets/animate.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("frontend/assets/style.css") }}" /> --}}  

      <link rel="stylesheet" href="{{ asset("frontend/assets/css/bootstrap.css")}} ">
      <link rel="stylesheet" href=" {{ asset("frontend/assets/css/meanmenu.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/animate.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/owl-carousel.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/swiper-bundle.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/backtotop.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/magnific-popup.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/nice-select.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/font-awesome-pro.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/spacing.css")}} ">
      <link rel="stylesheet" href="{{ asset("frontend/assets/css/main.css")}} ">

</head>
<body>
    @include('frontend.header')
    <div>
        @yield('content')
    </div>
    @include('frontend.footer')

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="bi bi-arrow-up"></i>
    </button>


   {{--  <script src="{{ asset("https://code.jquery.com/jquery-3.7.1.min.js") }}"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js") }}"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css") }}"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJob(C<sub>V</sub>H)E3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset("frontend/assets/Owl/owl.carousel.min.js") }}"></script> --}}

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>-->

   {{-- <script src="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/plyr/3.4.8/plyr.js") }}"></script>
    <script src="{{ asset("frontend/assets/script.js") }}"></script> --}} 

    <script src=" {{asset("frontend/assets/js/vendor/jquery.js")}}"></script>
   <script src="{{asset("frontend/assets/js/vendor/waypoints.js")}} "></script>
   <script src="{{asset("frontend/assets/js/bootstrap-bundle.js")}} "></script>
   <script src="{{asset("frontend/assets/js/meanmenu.js")}} "></script>
   <script src="{{asset("frontend/assets/js/swiper-bundle.js")}} "></script>
   <script src="{{asset("frontend/assets/js/owl-carousel.js")}} "></script>
   <script src="{{asset("frontend/assets/js/magnific-popup.js")}} "></script>
   <script src="{{asset("frontend/assets/js/parallax.js")}} "></script>
   <script src="{{asset("frontend/assets/js/backtotop.js")}} "></script>
   <script src="{{asset("frontend/assets/js/nice-select.js")}} "></script>
   <script src="{{asset("frontend/assets/js/counterup.js")}}"></script>
   <script src="{{asset("frontend/assets/js/wow.js")}}"></script>
   <script src="{{asset("frontend/assets/js/isotope-pkgd.js")}}"></script>
   <script src="{{asset("frontend/assets/js/imagesloaded-pkgd.js")}}"></script>
   <script src="{{asset("frontend/assets/js/ajax-form.js")}}"></script>
   <script src="{{asset("frontend/assets/js/main.js")}}"></script>


</body>
</html>
