<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title')</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/datatables/datatables.min.css') }}">


        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
        <!-- Start GA -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                @include('layout.navbar')
                @include('layout.sidebar')

                {{-- main --}}
                @yield('content')

                @include('layout.footer')
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/modules/popper.js') }}"></script>
        <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
        <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/stisla.js') }}"></script>
        <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
        <script src="{{ asset('assets/modules/izitoast/js/iziToast.js') }}"></script>

        <!-- JS Libraies -->
        <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/Datatables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Page Specific JS File -->

        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>

</html>
