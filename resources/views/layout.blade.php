<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>peer to Peer Beting</title>

    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/plugin/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/arafat-font.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin/animate.css')}}">
</head>
<body>
<!-- start preloader -->
<div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Dashboard</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="dashboard.html">Dashboard</a></li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Setting</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="personal-details-setting.html">Personal Details</a></li>
                                                <li><a class="nav-link" href="modify-login-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Sports</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="soccer-bets-2.html">Tennis</a></li>
                                        <li><a class="nav-link" href="soccer-bets-1.html">Soccer</a></li>
                                        <li><a class="nav-link" href="soccer-bets-2.html">NBA</a></li>
                                    </ul>
                                </li>
                              
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Tournaments</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="tournaments.html">Tournaments</a></li>
                                                <li><a class="nav-link" href="tournaments-details.html">Tournaments Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Blog</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                                <li><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="affiliate.html">Affiliate</a></li>
                                        <li><a class="nav-link" href="faqs.html">Faqs</a></li>
                                        <li><a class="nav-link" href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a class="nav-link" href="terms-conditions.html">Terms Conditions</a></li>
                                        <li><a class="nav-link" href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#loginMod">
                                    Login
                                </button>
                                <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->
 @yield('main')
</body>
</html>