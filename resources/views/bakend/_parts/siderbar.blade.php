<div class="nk-sidebar is-light nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('home') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('logo.png')}}" srcset="{{asset('logo.png')}} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('logo.png')}}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{asset('logo.png')}}" srcset="{{asset('logo.png')}} 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                            <span class="nk-menu-text">Dashboard</span><span class="nk-menu-badge"></span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Contacts</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('inscription') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                            <span class="nk-menu-text">Inscriptions</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('contacts') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2"></em></span>
                            <span class="nk-menu-text">Contacts</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('mails') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Emails</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
