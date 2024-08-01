<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title')</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('asset/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/asset/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('assets/asset/css/main.css') }}" rel="stylesheet">
    </head>

    <body class="index-page">

        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-l position-relative d-flex align-items-center">
                <img src="{{ asset('assets/img/logo-tpa.jpg') }}" alt="logo" width="50px"> <br>
                <span class="col-3"> TPA Hidayatus Shibyan</span>

                @include('component.navbar')
                <div class="col-3">
                    <a class="btn-getstarted" href="/auth">Get Started</a>
                </div>

            </div>
        </header>

        {{-- main content --}}
        @yield('content')

        <footer id="footer" class="footer position-relative light-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <img src="" alt="">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">TPA Hidayatus Shibyan</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Masjid Al Ihsan Karangkunti</p>
                            <p>Karangkajen RT 45 RW 12 Brontokusuman, Mergangsan, Kota Yogyakarta 55153</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+62 88888888</span></p>
                            <p><strong>Email:</strong> <span>hidayatusshibyan@gmail.com</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">TPA Hidayatus Shibyan</strong></p>
                <div class="credits">
                    Designed by <span>Ardiana Abdul Gumelar</span>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/asset/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/asset/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/asset/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/asset/js/main.js') }}"></script>

    </body>

</html>
