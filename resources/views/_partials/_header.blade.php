<!-- Top header area start here -->
<div class="header-top-area d-none d-lg-block">
    <div class="header__container">
        <div class="header-top__wrp">
            <ul class="info">
                <li>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_906_35)">
                            <path
                                d="M7.50005 0C4.44464 0 1.95898 2.48566 1.95898 5.54107C1.95898 6.54694 2.41009 7.62875 2.429 7.67438C2.57469 8.02021 2.86218 8.55737 3.06948 8.87223L6.8687 14.6287C7.02417 14.8647 7.25429 15 7.50005 15C7.74582 15 7.97593 14.8647 8.13141 14.6291L11.931 8.87223C12.1386 8.55737 12.4257 8.02021 12.5714 7.67438C12.5903 7.62907 13.0411 6.54726 13.0411 5.54107C13.0411 2.48566 10.5555 0 7.50005 0ZM11.9704 7.42145C11.8403 7.73142 11.5727 8.23109 11.3866 8.51336L7.58708 14.2702C7.51211 14.384 7.48832 14.384 7.41335 14.2702L3.61381 8.51336C3.42769 8.23109 3.16009 7.73109 3.03004 7.42112C3.0245 7.40776 2.61087 6.41199 2.61087 5.54107C2.61087 2.84518 4.80416 0.65189 7.50005 0.65189C10.1959 0.65189 12.3892 2.84518 12.3892 5.54107C12.3892 6.4133 11.9746 7.41167 11.9704 7.42145Z"
                                fill="#2EB97E"/>
                            <path
                                d="M7.50016 2.60788C5.88249 2.60788 4.56665 3.92405 4.56665 5.54139C4.56665 7.15873 5.88249 8.47489 7.50016 8.47489C9.11782 8.47489 10.4337 7.15873 10.4337 5.54139C10.4337 3.92405 9.11782 2.60788 7.50016 2.60788ZM7.50016 7.823C6.24233 7.823 5.21854 6.79954 5.21854 5.54139C5.21854 4.28324 6.24233 3.25977 7.50016 3.25977C8.75798 3.25977 9.78177 4.28324 9.78177 5.54139C9.78177 6.79954 8.75798 7.823 7.50016 7.823Z"
                                fill="#2EB97E"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_906_35">
                                <rect width="15" height="15" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <a href="#0">Pointe-Noire, REPUBLIQUE DU CONGO</a>
                </li>
                <li><span></span></li>
                <li>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_906_50)">
                            <path
                                d="M13.5937 1.875H1.40626C0.6308 1.875 0 2.5058 0 3.28126V11.7188C0 12.4942 0.6308 13.125 1.40626 13.125H13.5937C14.3692 13.125 15 12.4942 15 11.7188V3.28126C15 2.5058 14.3692 1.875 13.5937 1.875ZM13.5937 2.8125C13.6574 2.8125 13.718 2.82571 13.7734 2.84879L7.5 8.28599L1.22656 2.84879C1.28346 2.82493 1.34453 2.8126 1.40623 2.8125H13.5937ZM13.5937 12.1875H1.40626C1.14763 12.1875 0.937496 11.9774 0.937496 11.7187V3.83926L7.19283 9.26056C7.2812 9.33699 7.3906 9.375 7.5 9.375C7.6094 9.375 7.7188 9.33702 7.80717 9.26056L14.0625 3.83926V11.7188C14.0625 11.9774 13.8524 12.1875 13.5937 12.1875Z"
                                fill="#2EB97E"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_906_50">
                                <rect width="15" height="15" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <a href="#0">{!! env('APP_EMAIL') !!}</a>
                </li>
            </ul>
            <ul class="socila-link">
                <li class="text-white">{!! __('site.follown_us') !!} :</li>
                <li><a href="#0"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#0"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Top header area end here -->

<!-- Header area start here -->
<header class="header-area">
    <div class="header__container">
        <div class="header__main">
            <a href="{!! route('home') !!}" class="logo d-none d-lg-block">
                <img src="{!! asset('logo.png') !!}" alt="logo">
            </a>
            <a href="{!! route('home') !!}" class="logo d-block d-lg-none">
                <img style="width: 100px!important;" src="{!! asset('logo.png') !!}" alt="logo">
            </a>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li><a href="{!! route('home') !!}">{!! __('site.home') !!}</a></li>
                        <li>
                            <a href="{!! route('home') !!}">Guen's <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{!! route('about') !!}">{!! __('site.about_us') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('formation') !!}">{!! __('site.our_formation') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('destination') !!}">{!! __('site.our_destination') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('partenaire') !!}">{!! __('site.our_partner') !!}</a>
                                </li>
                                <li>
                                    <a href="#0">{!! __('site.our_representation') !!} <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-sub-menu">
                                        <li>
                                            <a href="{!! route('representation_rdc') !!}">République Démocratique du Congo</a>
                                        </li>
                                        <li>
                                            <a href="{!! route('representation_congo') !!}">République du Congo</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#0">Services <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a class="active" href="{!! route('orientation_academique') !!}">{!! __('site.service.orientation_cademique') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('coaching') !!}">{!! __('site.service.coaching') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('procedure_consulaire') !!}">{!! __('site.service.procedure_consulaire') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('assurance') !!}">{!! __('site.service.assurance') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('reservation_billet') !!}">{!! __('site.service.reservation_billet_avion') !!}</a>
                                </li>
                                <li>
                                    <a href="{!! route('aide_logement') !!}">{!! __('site.service.aide_au_logement') !!}</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{!! route('contact') !!}">{!! __('site.contact') !!}</a></li>

                    </ul>
                </nav>
            </div>
            <div class="d-flex align-items-center gap-4 gap-xl-5">
                <div class="menu-search">
                    <input type="text" placeholder="Search here..">
                    <button><i class="fa-regular fa-magnifying-glass"></i></button>
                </div>
                <div class="menu-btns d-none d-lg-flex">
                    <a class="active" href="#0">{!! __('site.brochure') !!}</a>
                </div>
                <div class="d-none d-lg-flex flex-wrap gap-2 align-items-center">
                    <div class="about-five__call-icon">
                            <span class="pxl__zigzag"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_918_1337)">
                                        <path
                                            d="M5.41667 4.33337H9.75L11.9167 9.75004L9.20833 11.375C10.3685 13.7275 12.2725 15.6315 14.625 16.7917L16.25 14.0834L21.6667 16.25V20.5834C21.6667 21.158 21.4384 21.7091 21.0321 22.1154C20.6257 22.5218 20.0746 22.75 19.5 22.75C15.2742 22.4932 11.2885 20.6987 8.2949 17.7051C5.3013 14.7115 3.5068 10.7258 3.25 6.50004C3.25 5.9254 3.47827 5.3743 3.8846 4.96798C4.29093 4.56165 4.84203 4.33337 5.41667 4.33337Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M16.25 7.58337C16.8246 7.58337 17.3757 7.81165 17.7821 8.21798C18.1884 8.6243 18.4167 9.1754 18.4167 9.75004"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M16.25 3.25C17.9739 3.25 19.6272 3.93482 20.8462 5.15381C22.0652 6.37279 22.75 8.02609 22.75 9.75"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="26" height="26" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg></span>
                    </div>
                    <div class="info">
                        <span class="sm-font fw-500 secondary-color">{!! __('site.call_us') !!}</span>
                        <h5><a href="tel:+242044117998">(+242) 04-411-79-98</a></h5>
                    </div>
                </div>

                <form id="langform" action="{{ route('language') }}" method="get" class="d-none d-lg-block d-flex align-items-center">
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
            <button class="menubars d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#menubar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
<!-- Header area end here -->
