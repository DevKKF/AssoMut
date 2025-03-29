@extends('layouts.app')

@section('title')
    Nous contactez
@endsection

@section('content')
<!-- Breadcrumb -->
<section class="banner-bg bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <span class="fs-18 fw-bold text-primary mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Contact Now</span>
                    <h1 class="text-white mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        Let’s Connect & Navigate Your Financial Goals
                    </h1>
                    <p class="text-white mb-0 max-text-60 mx-auto text-opacity-75" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        With worldwide annual spend on digital advertising surpassing $325 billion, it’s no ache's to online marketing are becoming available.
                    </p>
                </div>
            </div>
        </div>
        <div class="pt-80">
            <div class="row justify-content-between g-4">
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="w-11 h-1 bg-primary"></div>
                        <h6 class="fs-16 text-white mb-0">Office Address</h6>
                    </div>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                        <li>
                            <p class="text-white text-opacity-75 fw-medium mb-0">Head Office : HostCity Tower</p>
                        </li>
                        <li>
                            <p class="text-white text-opacity-75 fw-medium mb-0">Hosting Company, 123 Street Melbourne</p>
                        </li>
                        <li>
                            <p class="text-white text-opacity-75 fw-medium mb-0"> VIC 3000-Australia.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="w-11 h-1 bg-primary"></div>
                        <h6 class="fs-16 text-white mb-0">Hotline</h6>
                    </div>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                        <li>
                            <a href="#" class="text-decoration-none">
                                <p class="text-white text-opacity-75 fw-medium mb-0">+90 31 12 645 5789</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">
                                <p class="text-white text-opacity-75 fw-medium mb-0"> hostcity@gmail.com</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500" data-sal-easing="ease-in-out-sine">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="w-11 h-1 bg-primary"></div>
                        <h6 class="fs-16 text-white mb-0">Social Media</h6>
                    </div>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                        <li>
                            <a href="#" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none text-white text-opacity-75 hover:text-primary fw-medium">
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Breadcrumb -->

<!-- Contact Form -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h2 class="h3 mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Envoyez-nous un message</h2>
                <p class="mb-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Votre adresse électronique ne sera pas publiée Les champs obligatoires sont marqués *</p>
                <form action="#">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <label class="text-black fs-14 fw-bold mb-2">Nom et prénoms : <span class="text-primary">*</span></label>
                            <input type="text" placeholder="Nom et prénoms" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                        </div>
                        <div class="col-lg-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                            <label class="text-black fs-14 fw-bold mb-2">Adresse e-mail : <span class="text-primary">*</span></label>
                            <input type="email" placeholder="E-mail" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                        </div>
                        <div class="col-lg-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <label class="text-black fs-14 fw-bold mb-2">Sujet :</label>
                            <input type="text" placeholder="Entrez votre sujet" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                        </div>
                        <div class="col-lg-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                            <label class="text-black fs-14 fw-bold mb-2">Téléphone : <span class="text-primary">*</span></label>
                            <input type="number" placeholder="Numéro de téléphone" class="form-control px-6 py-4 border bg-white bg-opacity-50">
                        </div>
                        <div class="col-lg-12" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                            <label class="text-black fs-14 fw-bold mb-2">Message : <span class="text-primary">*</span></label>
                            <textarea class="form-control px-6 py-4 border h-30 bg-white bg-opacity-50"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark btn-arrow btn-arrow-lg btn-lg fs-14 fw-medium rounded mt-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <span class="btn-arrow__text">
                            Envoyer le message
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </button>
                </form>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('frontend/assets/img/contact.png') }}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section>
<!-- /Contact Form -->

<!-- Footer CTA -->
<div class="footer-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="bg-primary pt-60 pb-60 px-6 px-md-12 rounded-3 overflow-hidden position-relative z-1 text-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-xl-7 col-xxl-6">
                            <h4 class="text-white mb-4">
                                Découvrez notre service avec un essai sans risque de 7 jours    
                            </h4>
                            <a href="contact.html" class="btn btn-light btn-arrow btn-arrow-xl btn-lg fs-14 fw-semibold rounded">
                                <span class="btn-arrow__text">
                                    S'inscrire - Essai gratuit
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <img src="{{ asset('frontend/assets/img/footer-cta-left.png') }}" alt="image" class="img-fluid d-none d-md-block position-absolute top-0 start-0 z-n1 opacity-75">
                    <img src="{{ asset('frontend/assets/img/footer-cta-right.png') }}" alt="image" class="img-fluid d-none d-md-block position-absolute end-0 top-0 z-n1 opacity-75">
                </div>
            </div>
        </div>
    </div>
</div><!-- /Footer CTA -->
@endsection