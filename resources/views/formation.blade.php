@extends('base')
@section('content')
    @include('_partials._banner',['title'=>__('site.our_formation')])
    <section class="event-area pt-120 pb-120">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="about-two__item mt-30 mb-40 text-center">
                    <ul class="wow fadeInDown mr-85" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible;
                animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h3 class="fs-22">{!! __('site.formation.marketing') !!}</h3>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Comptabilite') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Communication') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Entrepreneuriat') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.kinesitherapie') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.psychomotricité') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.orthophonie') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Orthoptie') !!}</h4>
                        </li>
                    </ul>
                    <ul class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible;
                animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h3 class="fs-22">{!! __('site.formation.infirmier_polyvalent') !!}</h3>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.infirmieranesthésisteetreanimation') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.biomédical') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.sciencedelasante') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Informatique') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Génie civil') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Génie Industriel') !!}</h4>
                        </li>
                        <li class="mb-4">
                                    <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.38446 13.1797C7.34201 13.1797 7.30003 13.171 7.26115 13.1539C7.22227 13.1369 7.18732 13.1121 7.15852 13.0809L1.06661 6.49119C1.026 6.44726 0.999078 6.39244 0.989139 6.33344C0.9792 6.27445 0.986676 6.21384 1.01065 6.15902C1.03463 6.10421 1.07406 6.05758 1.12413 6.02483C1.17419 5.99208 1.23272 5.97464 1.29255 5.97464H4.22486C4.26888 5.97464 4.3124 5.98409 4.35246 6.00234C4.39252 6.0206 4.42821 6.04723 4.4571 6.08045L6.49304 8.42273C6.71307 7.95239 7.13901 7.16925 7.88646 6.21497C8.99144 4.8042 11.0468 2.7294 14.5632 0.85642C14.6312 0.820227 14.7102 0.810833 14.7848 0.830094C14.8593 0.849355 14.924 0.895871 14.9659 0.960456C15.0078 1.02504 15.024 1.103 15.0113 1.17894C14.9985 1.25488 14.9578 1.32328 14.897 1.37064C14.8836 1.38113 13.5278 2.44882 11.9674 4.40448C10.5314 6.20417 8.62239 9.14694 7.68304 12.946C7.66654 13.0128 7.62816 13.0721 7.57402 13.1144C7.51989 13.1568 7.45312 13.1799 7.38436 13.1799L7.38446 13.1797Z" fill="#181818"></path>
                                        </svg>
                                    </span>
                            <h4 class="fs-22">{!! __('site.formation.Diététique') !!}</h4>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    @include('includes._trial')
@endsection