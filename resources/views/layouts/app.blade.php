<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="WriteBot ai content generator and writing assistant for saas platform">
    <meta name="author" content="ThemeTags">
    <meta name="keywords" content="ai, ai assistant, ai content writer, ai copywriting">
    <!--favicon icon-->
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <!-- endbuild -->
</head>

<body class="bg-secondary">

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset('frontend/assets/img/logo-dark.png') }}" alt="logo" class="img-fluid">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!-- Header -->
    <div class="navbar-overlay bg-body bg-opacity-5">
        <!-- Primary Header -->
        <nav class="navbar navbar-1 navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="index.html">
                    <img src="{{ asset('frontend/assets/img/logo-light.png') }}" alt="image" class="logo__img">
                    <img src="{{ asset('frontend/assets/img/logo-dark.png') }}" alt="image" class="logo__img logo__sticky">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryMenu" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="primaryMenu">
                    <ul class="navbar-nav align-items-lg-center gap-lg-3 ms-auto">

                        <li class="nav-item contain-mega-menu">
                            <a class="nav-link fw-medium" href="#">
                                Solition des associations
                            </a>
                            <div class="contain-mega-menu__content">
                                <div class="container p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-xl-7">
                                            <div class="h-100 pt-32 pb-32 px-6">
                                                <span class="h6 d-block fs-18">Feature</span>
                                                <div class="row g-0 gx-md-5">
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="ddos.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-ddos.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            DDos Protection
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            WordPress hosting is a specialized
                                                                            service tailored to the needs
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="operating-system.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-os.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Operating System
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="premium-network.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-transfer-domain.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Premium Network
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="ssl-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-ssl.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                SSl Security
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="server-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-domain-reg.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Server Location
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="control-panel.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-control-panel.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Control Panel
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="support-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-supprot.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Support
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="security.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-security.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Security & Technology
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="h-100 p-6">
                                                <div class="row g-2 bg-primary bg-opacity-5 p-4 p-xl-8 rounded">
                                                    <div class="col-xl-6">
                                                        <span class="d-block h5 mb-4">
                                                            Buy a Domain
                                                            You Want
                                                        </span>
                                                        <div class="d-flex align-items-center gap-2 mb-4">
                                                            <div class="w-4 h-4 bg-success flex-shrink-0 bg-opacity-75 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                                                <i class="las la-check"></i>
                                                            </div>
                                                            <small class="fw-medium">Up to 32 Cores</small>
                                                        </div>
                                                        <a href="domain-registration.html" class="btn btn-sm btn-primary">
                                                            Explore Now
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 d-none d-xl-block">
                                                        <img src="{{ asset('frontend/assets/img/mega-menu-img-1.png') }}" alt="image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item contain-mega-menu">
                            <a class="nav-link fw-medium" href="#">
                                Solution des mutuelles
                            </a>
                            <div class="contain-mega-menu__content">
                                <div class="container p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-xl-7">
                                            <div class="h-100 pt-32 pb-32 px-6">
                                                <span class="h6 d-block fs-18">Domain</span>
                                                <div class="row g-0 gx-md-5">
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="domain-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-search-domain.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Search Domain Name
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            WordPress hosting is a specialized
                                                                            service tailored to the needs
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer-domain.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-transfer-domain.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Transfer Domain Names
                                                                            </span>
                                                                    <span
                                                                                class="flex-shrink-0 badge bg-danger-subtle text-danger-emphasis fw-bold py-1">
                                                                                Hot
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="domain-registration.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-domain-reg.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Domain Registration
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer-domain-search.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ asset('frontend/assets/img/icon-menu-ssl.png') }}"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Transfer Domain Search
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="h-100 p-6">
                                                <div class="row g-2 bg-primary bg-opacity-5 p-4 p-xl-8 rounded">
                                                    <div class="col-xl-6">
                                                        <span class="d-block h5 mb-4">
                                                            Buy a Domain
                                                            You Want
                                                        </span>
                                                        <div class="d-flex align-items-center gap-2 mb-4">
                                                            <div class="w-4 h-4 bg-success flex-shrink-0 bg-opacity-75 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                                                <i class="las la-check"></i>
                                                            </div>
                                                            <small class="fw-medium">Up to 32 Cores</small>
                                                        </div>
                                                        <a href="domain-registration.html" class="btn btn-sm btn-primary">
                                                            Explore Now
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 d-none d-xl-block">
                                                        <img src="{{ asset('frontend/assets/img/mega-menu-img-1.png') }}" alt="image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="price.html">
                                A propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="link btn btn-sm btn-primary hover:bg-dark hover:border-dark fw-medium rounded-1">
                                Se connecter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Primary Header -->
    </div><!-- Header -->

    @yield('content')

    <!-- Footer -->
    <footer class="footer-2-area pt-120 pb-5 bg-dark position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('frontend/assets/img/logo-light.png') }}" alt="image" class="logo__img">
                    <p class="text-white text-opacity-75 mt-8">Whether you run an e-commerce site or a web business,
                        you
                        want to attract as
                        many visitors as s or for when you no longer want to be limited by</p>
                    <h6 class="text-white mt-6 mb-4 fs-16">Social Media</h6>
                    <div class="d-inline-flex align-items-center justify-content-center gap-2">
                        <a href="#" class="social-icon w-9 h-9 d-inline-flex align-items-center justify-content-center rounded-circle border border-light border-opacity-10">
                            <span class="text-white"><i class="lab la-twitter"></i></span>
                        </a>
                        <a href="#" class="social-icon w-9 h-9 d-inline-flex align-items-center justify-content-center rounded-circle border border-light border-opacity-10">
                            <span class="text-white"><i class="lab la-facebook-f"></i></span>
                        </a>
                        <a href="#" class="social-icon w-9 h-9 d-inline-flex align-items-center justify-content-center rounded-circle border border-light border-opacity-10">
                            <span class="text-white"><i class="lab la-dribbble"></i></span>
                        </a>
                        <a href="#" class="social-icon w-9 h-9 d-inline-flex align-items-center justify-content-center rounded-circle border border-light border-opacity-10">
                            <span class="text-white"><i class="lab la-behance"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ps-xl-10">
                        <h6 class="text-white fs-16 mt-3 mb-8">Product & Solutions</h6>
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li><a href="#" class="footer-2-link">Shared
                                    Hosting</a></li>
                            <li><a href="#" class="footer-2-link">WordPress
                                    Hosting</a></li>
                            <li><a href="#" class="footer-2-link">VPS
                                    Hosting</a></li>
                            <li><a href="#" class="footer-2-link">Cloud
                                    Servers</a></li>
                            <li><a href="#" class="footer-2-link">Dedicated
                                    Servers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ps-xl-5">
                        <h6 class="text-white fs-16 mt-3 mb-8">Hostcity Feature</h6>
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li><a href="#" class="footer-2-link">Data
                                    Center</a></li>
                            <li><a href="#" class="footer-2-link">Control
                                    Panel</a></li>
                            <li><a href="#" class="footer-2-link">Operating
                                    System</a></li>
                            <li><a href="#" class="footer-2-link">Uptime
                                    Guarantee</a></li>
                            <li><a href="#" class="footer-2-link">DDOS
                                    Protection</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ps-xl-5">
                        <h6 class="text-white fs-16 mt-3 mb-8">Company Info</h6>
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li><a href="#" class="footer-2-link">About Us</a></li>
                            <li><a href="#" class="footer-2-link">Partners</a></li>
                            <li><a href="#" class="footer-2-link">Knowledgebase</a></li>
                            <li><a href="#" class="footer-2-link">Contact Us</a></li>
                            <li><a href="#" class="footer-2-link">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-20">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-5 pt-5 border-top border-light border-opacity-10">
                    <p class="text-white mb-0 fs-14">&copy; <?php echo gmdate('Y'); ?> Asso-Mut. Tous droits réservés</p>
                    <div class="d-inline-flex align-items-center justify-content-center gap-4 flex-wrap">
                        <a href="terms.html" class="footer-2-link">
                            Conditions générales
                        </a>
                        <a href="privacy.html" class="footer-2-link">
                            Politique de confidentialité
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Footer -->

    <div class="scroll-top scroll-to-target bg-primary text-white" data-target="html">
        <span class="las la-hand-point-up"></span>
    </div>

    <!--build:js-->
    <script src="{{ asset('frontend/assets/js/vendors/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/sal.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
</body>

</html>