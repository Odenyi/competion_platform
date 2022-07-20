<x-layout>
    @section('tournaments','active')
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
    <section class="banner-section inner-banner tournaments">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/tournaments-illus.png" class="tournaments-illu" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/sell-hero-illus.png" class="obj-8" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-10">
                            <div class="main-content">
                                <h1>Tournaments</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
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

    <!-- How it works In start -->
    <section class="how-works-tournaments">
        <div class="overlay">
            <div class="container">
                <div class="row cus-mar">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-area text-center">
                            <div class="img-area">
                                <img src="assets/images/icon/how-works-icon-9.png" alt="image">
                            </div>
                            <h4>1. Join for free</h4>
                            <p>Click on a tournament to join</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-area text-center">
                            <div class="img-area">
                                <img src="assets/images/icon/how-works-icon-10.png" alt="image">
                            </div>
                            <h4>2. Bet</h4>
                            <p>Bet on the Bitbetio</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-area text-center">
                            <div class="img-area">
                                <img src="assets/images/icon/how-works-icon-11.png" alt="image">
                            </div>
                            <h4>3. Win Prizes</h4>
                            <p>Winners receive prizes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it works In end -->

    <!-- Tournaments section start -->
    <section class="tournaments-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Grow your Income With Bitvetio</h5>
                            <h2 class="title">Tournaments</h2>
                            <p>Compete with Bitbetio users to find the best bettor and win cash prizes.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <ul class="nav" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn active" id="ongoing-tab" data-bs-toggle="tab"
                                data-bs-target="#ongoing" type="button" role="tab" aria-controls="ongoing"
                                aria-selected="true">ongoing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming"
                                type="button" role="tab" aria-controls="upcoming"
                                aria-selected="false">upcoming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="past-tab" data-bs-toggle="tab" data-bs-target="#past"
                                type="button" role="tab" aria-controls="past" aria-selected="false">past</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-1.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Rage Fan Challenge</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-2.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NBA Spotlight</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-3.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NFL Week 11</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-4.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Bitbetio Fall Classic</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-5.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-6.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week 11</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                    <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-4.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Bitbetio Fall Classic</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-2.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NBA Spotlight</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-6.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-1.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Rage Fan Challenge</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-3.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NFL Week 11</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-5.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                    <div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-5.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-4.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Bitbetio Fall Classic</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-6.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>MLB Week</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-1.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>Rage Fan Challenge</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-2.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NBA Spotlight</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="left-item">
                                        <div class="logo-item">
                                            <img src="assets/images/icon/tournaments-logo-3.png" alt="icon">
                                        </div>
                                        <div class="mid-area">
                                            <h3>NFL Week 11</h3>
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-calendar-alt"></i></span>
                                                    NOV 27 23:00 - DEC 2 14:00
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-users"></i></span>
                                                    43 PARTICIPANTS
                                                </li>
                                            </ul>
                                            <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                        </div>
                                    </div>
                                    <div class="last-item">
                                        <h6>In Prizes</h6>
                                        <h4>$2000</h4>
                                        <span class="btn-border">
                                            <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
    <!-- Tournaments section end -->

</x-layout>