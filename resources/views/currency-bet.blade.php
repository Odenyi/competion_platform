<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bitbetio - HTML Template</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
                                    <a class="nav-link dropdown-toggle active" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Currency</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="escrow-bets-fee.html">Escrow Bets Fee</a></li>
                                        <li><a class="nav-link" href="currency-bet.html">Currency Bet</a></li>
                                        <li><a class="nav-link" href="betting-details.html">Betting Details</a></li>
                                        <li><a class="nav-link" href="create-new-currency.html">Create Currency</a></li>
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
                                <button type="button" class="cmn-btn reg" data-bs-toggle="modal"
                                    data-bs-target="#loginMod">
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
    <section class="banner-section inner-banner soccer-bets currency-bet">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/winner-cup.png" class="obj-1" alt="image">
                <img src="assets/images/coin-5.png" class="obj-2" alt="image">
                <img src="assets/images/coin-3.png" class="obj-3" alt="image">
                <img src="assets/images/coin-6.png" class="obj-4" alt="image">
                <img src="assets/images/chart-illu.png" class="chart-illu" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/coin-1.png" class="obj-8" alt="image">
                        <img src="assets/images/time-circle.png" class="obj-9" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="main-content">
                                <h1>Currency Bet</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Currency Bet</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- Currency bet start -->
    <section class="currency-bet-section">
        <div class="overlay pb-120">
            <div class="container">
                <div class="filter-section mb-60">
                    <div class="section-text text-center">
                        <h3>Bet on future currency price</h3>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="text" placeholder="Filter Coin">
                                    <button class="d-flex align-items-center"><img src="assets/images/icon/search-icon.png" alt="icon">
                                        <span class="text-area d-sm-block d-none">
                                            Search
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row cus-mar">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Coin</th>
                                        <th scope="col">Bet</th>
                                        <th scope="col">Reward</th>
                                        <th scope="col">p</th>
                                        <th scope="col">Counter Bets</th>
                                        <th scope="col">Close date</th>
                                        <th scope="col">Expiration date</th>
                                        <th scope="col">Bet Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">05</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">06</th>
                                        <td>
                                            <img src="assets/images/icon/dogecoin.png" alt="icon">
                                            DOGE
                                        </td>
                                        <td>
                                            <img src="assets/images/icon/btc.png" alt="icon">
                                            0.05 BTC
                                        </td>
                                        <td>0.095 BTC</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60 %</div>
                                            </div>
                                        </td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td>1 d 4 h 26 m 33 s</td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-60">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <nav aria-label="Page navigation" class="d-flex justify-content-center">
                                    <ul class="pagination justify-content-center align-items-center">
                                        <li class="page-item">
                                            <a class="page-btn previous" href="javascript:void(0)"
                                                aria-label="Previous">
                                                <img src="assets/images/icon/arrow-left.png" alt="icon">
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr active"
                                                href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                                <img src="assets/images/icon/arrow-right.png" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Soccer Bets end -->

    <!-- FAQs In start -->
    <section class="faqs-section second">
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

    <!-- Call Action start -->
    <section class="call-to-action">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-0 order-1">
                        <div class="img-area d-rtl">
                            <img src="assets/images/call-to-action-bg.png" alt="image" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-text">
                            <h5 class="sub-title">Are You a degen?</h5>
                            <h2 class="title">Your 1st Prediction is on us</h2>
                            <p>Don't wait another minute. Take action straight from Bitbetio Wallet and benefit from
                                instant trade execution and the best exchange rates out there</p>
                        </div>
                        <span class="btn-border">
                            <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                Get Start Now
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Action end -->

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
                                <p> Copyright © <a href="index.html">Bitbetio</a> | Designed by
                                    <a href="https://themeforest.net/user/pixelaxis" class="auth">Pixelaxis</a>
                                </p>
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