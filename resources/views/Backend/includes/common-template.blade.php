<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="title" content="Your Next Auto">
    <meta name="description" content="Deals At Your Fingertip">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Your Next Auto">
    <meta property="og:description" content="Deals At Your Fingertip">
    <meta property="og:image" content="{{ asset('images/thumbnail.jpg') }}">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Your Next Auto">
    <meta property="twitter:description" content="Deals At Your Fingertip">
    <meta property="twitter:image" content="{{ asset('images/thumbnail.jpg') }}">

    <!-- Css Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">

    {{-- ---------toastr css---------- --}}

    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    @stack('styles')
</head>

<body data-page="account">
    <!-- Header -->
    @include('Backend.includes.header-trader')
    <!-- /Header -->

    {{-- Sidebar --}}




    <!-- Main Content -->
    <main>
        @include('Backend.includes.sidebar-trader')
        {{-- Sidebar --}}

        @yield('content')
    </main>
    <!-- /Main Content -->

    <!-- Footer -->
    {{-- @include('Backend.includes.footer-logged'); --}}
    <!-- /Footer -->

    <!-- JS Files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fancybox.min.js') }}"></script>
    <script src="{{ asset('js/select.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.rateyo.min.js') }}"></script>
    <script src="{{ asset('js/multi-animated-counter.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/propertylisting/script_property_listing.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>

    {{-- ---------------toastr js--------------------- --}}
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>

    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/toastr@latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @stack('scripts')
</body>

</html>