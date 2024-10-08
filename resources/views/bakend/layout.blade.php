<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Rodrigue mbah">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('faicon.png') }}">
    <!-- Page Title  -->
    <title>Guens | Admin</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('assets/back/css/dashlite.min.css')}}?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/back/css/theme.css')}}?ver=3.2.3">
</head>

<body class="nk-body ui-rounder has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
@include('bakend._parts.siderbar')
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
@include('bakend._parts.head')
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-body">
                       @yield('content')
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-xl wide-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2023 Guens education.
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item dropup">
                                    <a herf="" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{asset('assets/back/js/bundle.js')}}?ver=3.2.3"></script>
<script src="{{ asset('assets/back/js/scripts.js') }}?ver=3.2.3"></script>
</body>

</html>
