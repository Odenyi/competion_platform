<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peer to Peer Betting</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
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
                            <img src="assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Dashboard</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
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

    <!-- Login Registration start -->
    <div class="log-reg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="loginMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <ul class="nav log-reg-btn justify-content-around">
                                    <li class="bottom-area" role="presentation">
                                        <button class="nav-link" id="regArea-tab" data-bs-toggle="tab"
                                            data-bs-target="#regArea" type="button" role="tab" aria-controls="regArea"
                                            aria-selected="false">
                                            SIGN UP
                                        </button>
                                    </li>
                                    <li class="bottom-area" role="presentation">
                                        <button class="nav-link active" id="loginArea-tab" data-bs-toggle="tab"
                                            data-bs-target="#loginArea" type="button" role="tab"
                                            aria-controls="loginArea" aria-selected="true">
                                            LOGIN
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="head-area">
                                                    <h6 class="title">Login Direetly With</h6>
                                                    <div class="social-link d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-area">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label for="logemail">Email</label>
                                                                    <input type="text" id="logemail"
                                                                        placeholder="Email Address">
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="logpassword">Password</label>
                                                                    <input type="text" id="logpassword"
                                                                        placeholder="Email Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="remember-me">
                                                                    <label
                                                                        class="checkbox-single d-flex align-items-center">
                                                                        <span class="left-area">
                                                                            <span class="checkbox-area d-flex">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <span class="checkmark"></span>
                                                                            </span>
                                                                            <span
                                                                                class="item-title d-flex align-items-center">
                                                                                <span>Remember Me</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                    <a href="javascript:void(0)">Forgot Password</a>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button class="cmn-btn w-100">LOGIN</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    <div class="bottom-area text-center">
                                                        <p>Not a member ? <a href="javascript:void(0)" class="reg-btn">Register</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="regArea" role="tabpanel"
                                        aria-labelledby="regArea-tab">
                                        <div class="login-reg-content regMode">
                                            <div class="modal-body">
                                                <div class="head-area">
                                                    <h6 class="title">Register On Bitbetio</h6>
                                                    <div class="social-link d-flex align-items-center">
                                                        <a href="javascript:void(0)" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="javascript:void(0)"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-area">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label for="regemail">Email</label>
                                                                    <input type="text" id="regemail"
                                                                        placeholder="Email Address">
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="regpassword">Password</label>
                                                                    <input type="text" id="regpassword"
                                                                        placeholder="Email Password">
                                                                </div>
                                                                <div class="single-input">
                                                                    <label>Country</label>
                                                                    <select>
                                                                        <option value="1">United States</option>
                                                                        <option value="2">United Kingdom</option>
                                                                        <option value="3">Canada</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="remember-me">
                                                                    <a href="javascript:void(0)">Have a referral
                                                                        code?</a>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button class="cmn-btn w-100">SIGN UP</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    <div class="bottom-area text-center">
                                                        <p>Already have an member ? <a href="javascript:void(0)"
                                                                class="log-btn">Login</a></p>
                                                    </div>
                                                    <div class="counter-area">
                                                        <div class="single">
                                                            <div class="icon-area">
                                                                <img src="assets/images/icon/signup-counter-icon-1.png"
                                                                    alt="icon">
                                                            </div>
                                                            <div class="text-area">
                                                                <p>25,179k</p>
                                                                <p class="mdr">Bets</p>
                                                            </div>
                                                        </div>
                                                        <div class="single">
                                                            <div class="icon-area">
                                                                <img src="assets/images/icon/signup-counter-icon-2.png"
                                                                    alt="icon">
                                                            </div>
                                                            <div class="text-area">
                                                                <p>6.65 BTC</p>
                                                                <p class="mdr">Total Won</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Registration end -->

    <!-- Banner Section start -->
    <section class="banner-section">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/coin-2.png" class="obj-1" alt="image">
                <img src="assets/images/winner-cup.png" class="obj-2" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/coin-1.png" class="obj-1" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-2" alt="image">
                        <img src="assets/images/coin-3.png" class="obj-3" alt="image">
                        <img src="assets/images/coin-4.png" class="obj-4" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="main-content">
                                <div class="top-area section-text">
                                    <h4 class="sub-title">Bet & Win Today!</h4>
                                    <h1 class="title">Sports Escrow Bets Peer 2 Peer</h1>
                                    <p class="xlr">The fastest, easiest way to bet on sports.NBA, Tennis & Soccer,
                                        Choose on which team to bet and win</p>
                                </div>
                                <div class="bottom-area">
                                    <span class="btn-border">
                                        <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                            Get Start Now
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-section">
            <div class="container">
                <div class="row cus-mar">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-1.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span>€</span><span class="counter">1304,941</span></h3>
                                <p>Paid Out Prize in Total</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-2.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span class="counter">76,752</span></h3>
                                <p>Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-area d-flex align-items-center">
                            <div class="img-area">
                                <img src="assets/images/icon/counter-icon-3.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h3 class="m-none"><span class="counter">4,392</span></h3>
                                <p>Players online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- About bitbetio start -->
    <section class="about-bitbetio">
        <div class="overlay pt-120 pb-120">
            <div class="shape-area">
                <img src="assets/images/crypto-fanus-1.png" class="obj-1" alt="image">
                <img src="assets/images/crypto-fanus-2.png" class="obj-2" alt="image">
            </div>
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-6">
                        <div class="image-area d-rtl left-side">
                            <img src="assets/images/about-bitbetio-image.png" alt="images" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <h5 class="sub-title">A Next-Level Sports Betting</h5>
                            <h2 class="title">A Revolution in Online Betting</h2>
                            <p>Bitbetio is a user-friendly, decentralised, peer-to-peer betting platform.</p>
                        </div>
                        <div class="row cus-mar">
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets/images/icon/about-icon-1.png" alt="images">
                                    <h5>Peer-to-peer</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets/images/icon/about-icon-2.png" alt="images">
                                    <h5>No limits</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets/images/icon/about-icon-3.png" alt="images">
                                    <h5>Decentralised</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets/images/icon/about-icon-4.png" alt="images">
                                    <h5>Community-powered</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About bitbetio end -->

    <!-- How it Works start -->
    <section class="how-it-works">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Get to Know</h5>
                            <h2 class="title">How Bitbetio Works?</h2>
                            <p>Our platform has been designed from the ground up to be tailored to the unique form of
                                betting and settlement offered by the blockchain. Follow these simple steps and make
                                profits!</p>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <ul class="nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link active" id="sport-tab" data-bs-toggle="tab"
                                        data-bs-target="#sport" role="tab" aria-controls="sport" aria-selected="true">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-1.png" alt="icon">
                                        </span>
                                        Choose a sport
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="match-tab" data-bs-toggle="tab" data-bs-target="#match"
                                        role="tab" aria-controls="match" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-2.png" alt="icon">
                                        </span>
                                        Choose a match
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team"
                                        role="tab" aria-controls="team" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-3.png" alt="icon">
                                        </span>
                                        Choose your team
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="odds-tab" data-bs-toggle="tab" data-bs-target="#odds"
                                        role="tab" aria-controls="odds" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-4.png" alt="icon">
                                        </span>
                                        Choose your odds
                                    </h5>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <h5 class="nav-link" id="amount-tab" data-bs-toggle="tab" data-bs-target="#amount"
                                        role="tab" aria-controls="amount" aria-selected="false">
                                        <span class="image-area">
                                            <img src="assets/images/icon/how-works-icon-5.png" alt="icon">
                                        </span>
                                        Choose your amount
                                    </h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="sport" role="tabpanel"
                                    aria-labelledby="sport-tab">
                                    <h4>Select a Sport</h4>
                                    <div class="img-area">
                                        <img src="assets/images/process-img-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab">
                                    <h4>Select a Match</h4>
                                    <div class="img-area">
                                        <img src="assets/images/process-img-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                                    <h4>Select a Team</h4>
                                    <div class="img-area">
                                        <img src="assets/images/process-img-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="odds" role="tabpanel" aria-labelledby="odds-tab">
                                    <h4>Select Odds</h4>
                                    <div class="img-area">
                                        <img src="assets/images/process-img-4.png" alt="image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="amount" role="tabpanel" aria-labelledby="amount-tab">
                                    <h4>Select Bet Amount </h4>
                                    <div class="img-area">
                                        <img src="assets/images/process-img-5.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works end -->

    <!-- Bet This Game start -->
    <section class="bet-this-game">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Sports Escrow Bets Peer 2 Peer</h5>
                            <h2 class="title">Bets in This Game</h2>
                            <p>Use the power of Bitbetio Bets Fast, Anonymous, Secured, Automatic, Trustworthy</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Arsenal</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division- Belarus</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Volna</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Apollon</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division (Cyprus)</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Paeek</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-4.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Raufoss</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-5.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division (Norway)</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Åsane</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-6.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Lida</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-6.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division (Cyprus)</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Paeek</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-7.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Sūduva</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-8.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division- Belarus</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Dainava</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-9.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4>Eagle</h4>
                                    <span class="mdr">Home</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-10.png" alt="image">
                                    </div>
                                </div>
                                <div class="mid-area text-center">
                                    <div class="countdown d-flex align-items-center justify-content-center">
                                        <h4>
                                            <span class="hours">00</span><span class="ref">h</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="minutes">00</span><span class="ref">m</span><span
                                                class="seperator">:</span>
                                        </h4>
                                        <h4>
                                            <span class="seconds">00</span><span class="ref">s</span>
                                        </h4>
                                    </div>
                                    <h6>Division- Belarus</h6>
                                </div>
                                <div class="team-single">
                                    <h4>Paeek</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-11.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Eagle will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Paeek will win</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="bottom-area mt-60">
                            <span class="btn-border">
                                <a href="soccer-bets-2.html" class="cmn-btn">Browse More</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bet This Game end -->

    <!-- Betpop Up Modal start -->
    <div class="betpopmodal">
        <div class="modal fade" id="betpop-up" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-11">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="top-item">
                                        <a href="javascript:void(0)" class="cmn-btn firstTeam">Eagle will win</a>
                                        <a href="javascript:void(0)" class="cmn-btn active draw">Draw</a>
                                        <a href="javascript:void(0)" class="cmn-btn lastTeam">Paeek will win</a>
                                    </div>
                                    <div class="select-odds d-flex align-items-center">
                                        <h6>Select Odds</h6>
                                        <div class="d-flex in-dec-val">
                                            <input type="text" value="1.5" class="InDeVal2">
                                            <div class="btn-area">
                                                <button class="plus2">
                                                    <img src="assets/images/icon/up-arrow.png" alt="icon">
                                                </button>
                                                <button class="minus2">
                                                    <img src="assets/images/icon/down-arrow.png" alt="icon">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mid-area">
                                        <div class="single-area">
                                            <div class="item-title d-flex align-items-center justify-content-between">
                                                <span>Bet Value :</span>
                                                <select>
                                                    <option value="eth">ETH</option>
                                                    <option value="eth">ETH</option>
                                                    <option value="eth">ETH</option>
                                                </select>
                                            </div>
                                            <div class="d-flex in-dec-val">
                                                <input type="text" value="0.1" class="InDeVal1">
                                                <div class="btn-area">
                                                    <button class="plus">
                                                        <img src="assets/images/icon/up-arrow.png" alt="icon">
                                                    </button>
                                                    <button class="minus">
                                                        <img src="assets/images/icon/down-arrow.png" alt="icon">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-area quick-amounts">
                                            <div class="item-title d-flex align-items-center">
                                                <p>Quick Amounts</p>
                                            </div>
                                            <div class="input-item">
                                                <button class="quickIn">0.005</button>
                                                <button class="quickIn">0.025</button>
                                                <button class="quickIn">0.1</button>
                                                <button class="quickIn">0.5</button>
                                                <button class="quickIn">2.5</button>
                                            </div>
                                        </div>
                                        <div class="single-area smart-value">
                                            <div class="item-title d-flex align-items-center">
                                                <p class="mdr">Smart Contact Value</p>
                                            </div>
                                            <div class="contact-val d-flex align-items-center">
                                                <h4>0.1103</h4>
                                                <h5>ETH</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <div class="fee-area">
                                            <p>Winner will get: <span class="amount">0.179</span> ETH</p>
                                            <p class="fee">Escrow Fee: <span>5%</span></p>
                                        </div>
                                        <div class="btn-area">
                                            <button>Make (0.1 ETH) Bet</button>
                                        </div>
                                        <div class="bottom-right">
                                            <p>Game Closes:</p>
                                            <p class="date-area">Mar <span>21,2021-1:00</span> Am</p>
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
    <!-- Betpop Up Modal end -->

    <!-- Amazing Features start -->
    <section class="amazing-features">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Leading the Crypto bets escrow services</h5>
                            <h2 class="title">An Exhaustive list of Amazing Features</h2>
                            <p>Bitbetio is the most advanced sports crypto beting platform and highest stakes across
                                multiple bookmakers and exchanges.</p>
                        </div>
                    </div>
                </div>
                <div class="features-carousel">
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-1.png" alt="icon">
                            </div>
                            <h5>Safety</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-2.png" alt="icon">
                            </div>
                            <h5>Transparency</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-3.png" alt="icon">
                            </div>
                            <h5>Low Commissions</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-4.png" alt="icon">
                            </div>
                            <h5>Player is king</h5>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slide-content">
                            <div class="icon-area">
                                <img src="assets/images/icon/amazing-features-icon-3.png" alt="icon">
                            </div>
                            <h5>Low Commissions</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Amazing Features end -->

    <!-- More Features start -->
    <section class="more-features">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-0 order-1">
                        <div class="img-area">
                            <img src="assets/images/more-features-image.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5 class="sub-title">A new betting world</h5>
                            <h2 class="title">Bets on future currencies prices between users</h2>
                            <p>Cutting out bookmakers, opens a new betting experience for players.</p>
                        </div>
                        <div class="content-area">
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-1.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Pool Bets</h5>
                                    <p>Players bet on their predicted outcomes and all stakes go into a single pool.
                                        Winners share the pool. The odds are dynamic and depend on the number of
                                        participants and the amounts they wagered.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-2.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Head to head betting</h5>
                                    <p>The purest form of peer-to-peer betting. One player opens the bet and defines the
                                        odds and another player matches the bet. Players are not bound by unfavourable,
                                        centrally-defined odds.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="image-area">
                                    <img src="assets/images/icon/more-features-icon-3.png" alt="image">
                                </div>
                                <div class="text-area">
                                    <h5>Multi- Player Bets</h5>
                                    <p>High rollers can wager large amounts by offering bets that can be partially
                                        matched by multiple players. Similar to head-to-head bets, the odds are defined
                                        by the player who opens the bet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- More Features end -->

    <!-- FAQs In start -->
    <section class="faqs-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Frequently Asked Questions</h5>
                            <h2 class="title">If you have questions we have answer</h2>
                            <p>Answers for our most popular questions about sportsbetting, crypto, and bitbetio</p>
                        </div>
                    </div>
                </div>
                <div class="row faq-bg d-flex justify-content-center">
                    <div class="col-xl-10">
                        <div class="faq-box mt-60 mb-60">
                            <div class="accordion" id="accordionFaqs">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            I want to play at Bitbetio, What do i need to do?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How fast do I get paid once I win a bet?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What are the commissions I have to pay?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can I set the odds for any bet I want?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            What kind of Escrow do you provide?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingsix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                            aria-expanded="false" aria-controls="collapsesix">
                                            What makes us unique?
                                        </button>
                                    </h5>
                                    <div id="collapsesix" class="accordion-collapse collapse"
                                        aria-labelledby="headingsix" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingsaven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsesaven"
                                            aria-expanded="false" aria-controls="collapsesaven">
                                            Is the Escrow payment secured?
                                        </button>
                                    </h5>
                                    <div id="collapsesaven" class="accordion-collapse collapse"
                                        aria-labelledby="headingsaven" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingeight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseeight"
                                            aria-expanded="false" aria-controls="collapseeight">
                                            How do I deposit/transfer money to my transactions?
                                        </button>
                                    </h5>
                                    <div id="collapseeight" class="accordion-collapse collapse"
                                        aria-labelledby="headingeight" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNight"
                                            aria-expanded="false" aria-controls="collapseNight">
                                            How do I withdraw money from my Bitbetio Bets account?
                                        </button>
                                    </h5>
                                    <div id="collapseNight" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionFaqs">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
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
    <!-- FAQs In end -->

    <!-- Affilliate start -->
    <section class="affilliate-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-0 order-1">
                        <div class="img-area d-rtl">
                            <img src="assets/images/affilliate-image.png" alt="image" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <h5 class="sub-title">Join forces with Bitbetio</h5>
                            <h2 class="title">Earn As Our Affilliate</h2>
                            <p>Join the program and gain up to 50% revshare! Are you an experienced affiliate, and would
                                like to set up your own rules? We are happy to get to know your offer. Partner with us
                                and earn as your referrals start playing!</p>
                        </div>
                        <div class="bottom-area">
                            <div class="btn-border d-inline-block">
                                <a href="affiliate.html" class="cmn-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affilliate end -->

    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container pt-120">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="newsletter">
                        <div class="section-text text-center">
                            <h5 class="sub-title">Subscribe Us</h5>
                            <h3 class="title">For Newsletter</h3>
                            <p>Subscribe to our newsletter to receive all the latest news and updates</p>
                        </div>
                        <form action="#">
                            <div class="form-group d-flex align-items-center">
                                <input type="text" placeholder="Enter your email Address">
                                <button><img src="assets/images/icon/arrow-right-2.png" alt="icon"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area pt-120">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="menu-item">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                            <ul class="footer-link">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="terms-conditions.html">Terms of Services</a></li>
                                <li><a href="privacy-policy.html">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="copyright">
                            <div class="copy-area">
                                <p> Copyright © <a href="/">BetPeer</a> | 2022
                            </div>
                            <div class="social-link d-flex align-items-center">
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/jquery.downCount.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>