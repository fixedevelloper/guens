@extends('base')
@section('keywords')
Guen,education,formation,Planification académique Congo,Guidance académique pour étudiants Congo,
Accompagnement dans le choix de carrière scolaire Congo,
Guidance académique pour étudiants Congo,
Accompagnement dans le choix de carrière scolaire Congo,
Planification de parcours éducatifs Congo,
Évaluation des choix académiques Congo,
Conseils pour orientation professionnelle Congo,
Soutien académique pour élèves Congo,procédure consulaire,coaching,assurance,reservation billet d'avion, rdc,republique democratique du congo
@endsection
@section('description')
    Recevez des conseils d'orientation scolaire adaptés aux besoins des étudiants.
    Optimisez les choix académiques avec des outils et des ressources pour une carrière réussie
@endsection
@section('content')
    <!-- Banner area start here -->
    <section class="banner-area pt-190 pb-190 sub-bg bg-image paralax__animation"
             data-background="{!! asset('assets/images/bg/banner-shadow.png') !!}">
        <div class="banner__shape1">
            <img src="{!! asset('assets/images/shape/banner-shape-left.png') !!}" alt="shape">
        </div>
        <div class="banner__shape2">
            <img class="animation__arryUpDown" src="{!! asset('assets/images/shape/banner-earth.png') !!}" alt="shape">
        </div>
        <div class="banner__shape3">
            <img class="slide-effect1" src="{!! asset('assets/images/shape/banner-circle.png') !!}" alt="shape">
        </div>
        <div class="banner__shape4">
            <img class="sway__animationX" src="{!! asset('assets/images/shape/banner-line.png') !!}" alt="shape">
        </div>
        <div class="banner__shape5">
            <img src="{!! asset('assets/images/shape/banner-shape-right.png') !!}" alt="shape">
        </div>
        <div class="container">
            <div class="banner__content">
                <h5 class="mb-10 primary-color text-capitalize wow fadeInUp" data-wow-delay="00ms"
                    data-wow-duration="1500ms">GUEN'S EDUCATION</h5>
                <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.banner.title') !!}
                </h1>
                <p class="mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">{!! __('site.banner.description') !!}</p>
                <a href="{!! route('about') !!}" class="btn-one mt-50 wow fadeInUp" data-wow-delay="600ms"
                   data-wow-duration="1500ms">{!! __('site.banner.link_button') !!}<i class="fa-light fa-arrow-right-long"></i></a>
            </div>
        </div>
        <div class="banner__hero">
            <div class="banner__info" data-depth="0.03">
                <img src="{!! asset('assets/images/icon/banner-hero-icon.png') !!}" alt="icon">
                <div>
                    <h5 class="fs-28"><span class="count secondary-color">6,570</span>+</h5>
                    <span class="fs-14">Active Student</span>
                </div>
            </div>
            <div class="banner__info info2" data-depth="0.03">
                <img src="{!! asset('assets/images/icon/banner-hero-icon2.png') !!}" alt="icon">
                <div>
                    <h5 class="fs-28"><span class="count secondary-color">20</span>k+</h5>
                    <span class="fs-14">{!! __('site.service.procedure_consulaire') !!}</span>
                </div>
            </div>
            {{--<img src="{!! asset('assets/images/banner/hero.png') !!}" alt="image">--}}
            <img src="{!! asset('assets/images/banner/hero.png') !!}" alt="image">
            <img class="hero-shape1" src="{!! asset('assets/images/shape/banner-hero-line.png') !!}" alt="shape">
            <img class="hero-shape2" src="{!! asset('assets/images/shape/banner-hero-shape.png') !!}" alt="shape">
            <img class="hero-shape3" src="{!! asset('assets/images/shape/banner-hero-circle.png') !!}" alt="shape">
            <img class="hero-shape4 sway_Y__animationY" src="{!! asset('assets/images/shape/banner-hero-dots.png') !!}" alt="shape">
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Brand area start here -->
{{--    <div class="brand-area pt-60 pb-60 bor-bottom">
        <div class="container">
            <div class="swiper brand__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image1.png" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image2.png" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image3.png" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image4.png" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image5.png" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-image6.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- Brand area end here -->

    <!-- About area start here -->
    @include('includes._about')
    <!-- About area end here -->

    <!-- Services area start here -->
   @include('includes._services')
    <!-- Courses area end here -->

    <!-- Topic area start here -->
    <section class="topic-area pt-120 pb-120">
        <div class="container">
            <div class="section-header mb-60 text-center">
                <h5>{!! __('site.partner.title.partner') !!}</h5>
                <h2>{!! __('site.partner.title.your') !!} <span>{!! __('site.partner.title.nous_font') !!}
                        <img src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span> {!! __('site.partner.title.confiance') !!}</h2>
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="topic__item item-one">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/his.jpeg') !!}" width="32" height="32" alt="">
                        </div>
                        <div class="topic__content">
                            <h4><a href="#">IHEPS</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="topic__item active item-two">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/hest.jpeg') !!}" width="32" height="32" alt="">

                        </div>
                        <div class="topic__content">
                            <h4><a href="#">HESTIM</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="topic__item item-three">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/sup.jpg') !!}" width="32" height="32" alt="">

                        </div>
                        <div class="topic__content">
                            <h4><a href="#">SUPEMIR</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="topic__item item-one">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/his.jpeg') !!}" width="32" height="32" alt="">
                        </div>
                        <div class="topic__content">
                            <h4><a href="#">IHEPS</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="topic__item active item-two">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/hest.jpeg') !!}" width="32" height="32" alt="">

                        </div>
                        <div class="topic__content">
                            <h4><a href="#">HESTIM</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="topic__item item-three">
                        <div class="topic__icon">
                            <img src="{!! asset('assets/images/brand/sup.jpg') !!}" width="32" height="32" alt="">

                        </div>
                        <div class="topic__content">
                            <h4><a href="#">SUPEMIR</a></h4>
                            <span></span>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- Topic area end here -->

    <!-- Faq area start here -->
    <section class="faq-three-area pt-120 pb-120 sub-bg-two">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-header-three mb-40">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Faq’s</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.faq.title') !!} <span>Guen's <img
                                    src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span></h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {!! __('site.faq.questions.q1') !!}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r1') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="200ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {!! __('site.faq.questions.q2') !!}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r2') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                    {!! __('site.faq.questions.q3') !!}
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse"
                                 aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r3') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                    {!! __('site.faq.questions.q4') !!}
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                 aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r4') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 wow fadeInLeft" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                    <div class="faq-three__image">
                        <img class="w-100" src="{!! asset('assets/images/faq/faq-three-image.png') !!}" alt="image">
                        <img class="dots1 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-top.png') !!}" alt="shape">
                        <img class="dots2 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-bottom.png') !!}" alt="shape">
                        <img class="shape1" src="{!! asset('assets/images/shape/faq-shape-bottom.png') !!}" alt="shape">
                        <img class="shape2 animation__arryUpDown" src="{!! asset('assets/images/shape/faq-shape-top.png') !!}"
                             alt="shape">
                    </div>
                </div>
            </div>
            <div class="justify-content-center mt-60">
                <a class="mt-15 btn-one" href="{!! route('faq') !!}"> {!! __('actions.read_more') !!}
                    <i class="fa-regular fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <!-- Faq area end here -->

    <!-- Testimonial area start here -->
    <section class="testimonial-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="swiper testimonial__slider-image">
                        <div class="testimonial__line">
                            <img class="sway_Y__animation" src="{!! asset('assets/images/shape/line-fat.png') !!}" alt="shape">
                        </div>
                        <div class="testimonial__shape">
                            <img class="slide-effect1" src="{!! asset('assets/images/shape/sm-circle.png') !!}" alt="shape">
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__image image">
                                    <img src="{!! asset('assets/images/testimonial/testimonial-image1.png') !!}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__image image">
                                    <img src="{!! asset('assets/images/testimonial/testimonial-image1.png') !!}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__image image">
                                    <img src="{!! asset('assets/images/testimonial/testimonial-image1.png') !!}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__right-item pl-40">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! __('site.testimonials.title') !!}
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.testimonials.what') !!}
                                <span>{!! __('site.testimonials.our') !!} <img src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span>
                                {!! __('site.testimonials.to_say') !!} <br> {!! __('site.testimonials.to_our') !!}
                            </h2>
                        </div>
                        <div class="swiper testimonial__slider wow fadeInDown" data-wow-delay="200ms"
                             data-wow-duration="1500ms">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <p class="fw-500 fs-18">{!! __('site.testimonials.silde1') !!}.</p>
                                        <div class="d-flex align-items-center justify-content-between gap-4 mt-30">
                                            <div>
                                                <h4>Marie-Claire Kofi</h4>
                                                <span>Diplômée en Marketing</span>
                                                <div class="star mt-1">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star disabled"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dot testimonial__dot"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <p class="fw-500 fs-18">{!! __('site.testimonials.silde2') !!}.</p>
                                        <div class="d-flex align-items-center justify-content-between gap-4 mt-30">
                                            <div>
                                                <h4>Dr. Sophie Martin</h4>
                                                <span>Conseillère d'orientation scolaire</span>
                                                <div class="star mt-1">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star disabled"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dot testimonial__dot"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <p class="fw-500 fs-18">{!! __('site.testimonials.silde3') !!}.</p>
                                        <div class="d-flex align-items-center justify-content-between gap-4 mt-30">
                                            <div>
                                                <h4>Massolop didier</h4>
                                                <span>Enseignant</span>
                                                <div class="star mt-1">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star disabled"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dot testimonial__dot"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end here -->

    <!-- Trial area start here -->
  @include('includes._trial')
    <!-- Trial area end here -->
@endsection
