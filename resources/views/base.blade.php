<!DOCTYPE html>
<html lang="{!! session('locale') !!}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Q65peJEa0gelkheVOIbosNiHLIkluEI6g17_ir3HzOM" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <title> @yield('title') - GUEN'S EDUCATION</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{!! asset('faicon.png') !!}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{!! asset('assets/css/meanmenu.css') !!}">
    <!-- All min css -->
    <link rel="stylesheet" href="{!! asset('assets/css/all.min.css') !!}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{!! asset('assets/css/swiper-bundle.min.css') !!}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{!! asset('assets/css/nice-select.css') !!}">
    <!-- Style css -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3DTGNSX3F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z3DTGNSX3F');
    </script>

</head>

<body>

<!-- Preloader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                <img class="loading-logo" src="{!! asset('assets/images/preloader.svg') !!}" alt="icon">
            </div>
        </div>
    </div>
</div>
<!-- Preloader area end -->

@include('_partials._header')

<!-- Sidebar area start here -->
<div class="sidebar-area offcanvas offcanvas-end" id="menubar">
    <div class="offcanvas-header">
        <a href="{!! route('home') !!}" class="logo">
            <img src="{!! asset('logo.png') !!}" alt="logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i
                class="fa-regular fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body sidebar__body">
        <div class="mobile-menu overflow-hidden"></div>
        <div class="d-none d-lg-block">
            <h5 class="text-white mb-20">About Us</h5>
            <p class="paragraph-light fs-16">
              {{ __('site.about.description') }}
            </p>
        </div>
        <div class="sidebar__search d-block d-lg-none">
            <input type="text" placeholder="Search here..">
            <button><i class="fa-regular fa-magnifying-glass"></i></button>
        </div>
        <div class="sidebar__contact-info mt-30">
            <h5 class="text-white mb-20">Contact Info</h5>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> <a href="#0">Pointe Noire,République du congo, 45463</a>
                </li>
                <li class="py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+242044117998">+242 04-411-79-98</a>
                </li>
                <li><i class="fa-solid fa-paper-plane"></i> <a href="#0">{!! env('APP_EMAIL') !!}</a>
                </li>
            </ul>
        </div>
        <div class="sidebar__socials">
            <ul>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fa-brands text-white fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div class="sidebar mt-3">
        <form id="langform" action="{{ route('language') }}" method="get" class="d-flex align-items-center">
            <div class="input-group mb-3">
                @if (session('locale') == 'fr')
                    <img class="input-group-text" height="50" src="{!! asset('assets/images/lang/fr.png') !!}" alt="fr">
                @else
                    <img class="input-group-text" height="50" src="{!! asset('assets/images/lang/gb.png') !!}" alt="fr">
                @endif
                <div class="select-option">
                    <select name="lang" id="lang" onchange="this.form.submit()">
                        <option value="en" @if (Session::get('locale', 'en') == 'en') selected @endif> {!! __('site.english') !!}
                        </option>

                        <option value="fr" @if (session('locale') == 'fr') selected @endif> {!! __('site.french') !!}</option>
                    </select>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Sidebar area end here -->

<main>


    @yield('content')
</main>

@include('_partials._footer')
<div class="share">
    <i class="fa text-white fa-share-square"></i>
</div>
<div class="one">
    <a target="_blank" href="https://www.facebook.com/profile.php?id=61551797552414"><i class="fa-brands text-white fa-facebook-f"></i></a>
</div>
<div class="two">
    <i class="fa-brands text-white fa-twitter"></i>
</div>
<div class="three">
    <a target="_blank" href="https://wa.me/242044117998"><i class="fa-brands text-white fa-whatsapp"></i></a>
</div>
<!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- Jquery 3. 7. 1 Min Js -->
<script src="{!! asset('assets/js/jquery-3.7.1.min.js') !!}"></script>
<!-- Bootstrap min Js -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Mean menu Js -->
<script src="{!! asset('assets/js/meanmenu.js') !!}"></script>
<!-- Swiper bundle min Js -->
<script src="{!! asset('assets/js/swiper-bundle.min.js') !!}"></script>
<!-- Counterup min Js -->
<script src="{!! asset('assets/js/jquery.counterup.min.js') !!}"></script>
<!-- Wow min Js -->
<script src="{!! asset('assets/js/wow.min.js') !!}"></script>
<!-- Magnific popup min Js -->
<script src="{!! asset('assets/js/magnific-popup.min.js') !!}"></script>
<!-- Nice select min Js -->
<script src="{!! asset('assets/js/nice-select.min.js') !!}"></script>
<!-- Parallax Js -->
<script src="{!! asset('assets/js/parallax.js') !!}"></script>
<!-- Waypoints Js -->
<script src="{!! asset('assets/js/jquery.waypoints.js') !!}"></script>
<!-- Script Js -->
<script src="{!! asset('assets/js/script.js') !!}"></script>
<script>
    $(function(){
        var flag=0;

        $('.share').on('click',function(){
            if(flag === 0)
            {
                $(this).siblings('.one').animate({
                    // top:'440px',
                    bottom: '280px',
                    left:'30px',

                },200);

                $(this).siblings('.two').delay(200).animate({
                    // top:'480px',
                    bottom: '220px',
                    left:'80px'
                },200);

                $(this).siblings('.three').delay(300).animate({
                    bottom: '120px',
                    left:'30px'
                },200);

                $('.one i,.two i, .three i').delay(500).fadeIn(200);
                flag = 1;
            }


            else{
                $('.one, .three').animate({
                    bottom: '40px',
                    right:'30px'
                },200);
                $('.two').animate({
                    bottom: '40px',
                    left:'30px'
                },200);
                $('.one i,.two i, .three i').delay(500).fadeOut(200);
                flag = 0;
            }
        });
    });
</script>
</body>

</html>
