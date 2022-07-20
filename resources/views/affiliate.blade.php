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
    <section class="banner-section inner-banner affiliate">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/affiliate-banner.png" class="affiliate-illu" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="assets/images/sell-hero-illus.png" class="obj-8" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-10">
                            <div class="main-content">
                                <h1>Affiliate</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Affiliate</li>
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

    <!-- Bitbetio Affiliates In start -->
    <section class="bitbetio-affiliates">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-0 order-1">
                        <div class="img-area d-rtl">
                            <img src="assets/images/affiliates-illus.png" class="max-un" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5 class="sub-title">Grow your Income With Bitvetio</h5>
                            <h2 class="title">Earn more with Bitbetio Referral Program</h2>
                            <p>The most advanced and rewarding Bitcoin affiliate program on the market. It's time to
                                start your profitable cooperation with a trusted and licensed partner.
                                With up to 45% revenue share deal on offer, you will get the best tool to monetize your
                                gambling traffic.</p>
                            <ul>
                                <li>Generous commissions & fast payouts</li>
                                <li>The fee commission will be sent instantly in real-time</li>
                                <li>There is no limit to the number of friends you can refer</li>
                                <li>Each referee must be signed up through your Referral Link, QR Code or Referral ID.
                                </li>
                            </ul>
                        </div>
                        <span class="btn-border">
                            <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                Join Now
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bitbetio Affiliates In end -->

    <!-- Features Section In start -->
    <section class="features-section">
        <div class="overlay pb-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5 class="sub-title">Grow your Income With Bitvetio</h5>
                            <h2 class="title">Why you should sign up to the Bitbetio Affiliate Program</h2>
                            <p>Earning is easy when you’re promoting bitbetio. Become an affiliate today!</p>
                        </div>
                        <div class="row cus-mar">
                            <div class="col-sm-6">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/features-icon-1.png" alt="image">
                                    </div>
                                    <h5>Flexible Commission</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/features-icon-2.png" alt="image">
                                    </div>
                                    <h5>Track Payouts</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/features-icon-3.png" alt="image">
                                    </div>
                                    <h5>Real-time Stats</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/features-icon-4.png" alt="image">
                                    </div>
                                    <h5>Rewards as a top affiliate</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-img-area">
                            <img src="assets/images/features-illus.png" class="max-un" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section In end -->

    <!-- How it Works start -->
    <section class="how-it-works affiliates">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Earn as our affilliate</h5>
                            <h2 class="title">Be our Affiliate!</h2>
                            <p>Join the program and gain up to 50% revshare! Earn as your referrals start playing!</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/how-works-icon-6.png" alt="image">
                                    </div>
                                    <h4>1.Join us!</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/how-works-icon-7.png" alt="image">
                                    </div>
                                    <h4>2.Start Inviting!</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-area text-center">
                                    <div class="img-area">
                                        <img src="assets/images/icon/how-works-icon-8.png" alt="image">
                                    </div>
                                    <h4>3.Get Paid</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="magnific-area d-flex align-items-center justify-content-center">
                                <div class="bg-area">
                                    <img class="bg-item" src="assets/images/video-bg.png" alt="icon">
                                </div>
                                <a class="mfp-iframe popupvideo" href="https://www.youtube.com/watch?v=MJ0zpsWQ_XM">
                                    <img src="assets/images/icon/popup-icon.png.png" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works end -->

    <!-- Testimonails In start -->
    <section class="testimonails-section">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Frequently Asked Questions</h5>
                            <h2 class="title">What our users say?</h2>
                            <p>Answers for our most popular questions about sportsbetting, crypto, and bitbetio</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonails-carousel">
                <div class="single-slide">
                    <div class="single-content">
                        <p class="xlr">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                            fermentum dignissim et.</p>
                        <div class="profile-area">
                            <div class="icon-area">
                                <img src="assets/images/testimonails-img-1.png" alt="icon">
                            </div>
                            <div class="text-area">
                                <h5>Courtney Henry</h5>
                                <p>England</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="single-content">
                        <p class="xlr">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                            fermentum dignissim et.</p>
                        <div class="profile-area">
                            <div class="icon-area">
                                <img src="assets/images/testimonails-img-2.png" alt="icon">
                            </div>
                            <div class="text-area">
                                <h5>Hector Dawson</h5>
                                <p>United States</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="single-content">
                        <p class="xlr">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                            fermentum dignissim et.</p>
                        <div class="profile-area">
                            <div class="icon-area">
                                <img src="assets/images/testimonails-img-3.png" alt="icon">
                            </div>
                            <div class="text-area">
                                <h5>Lucas Neal</h5>
                                <p>United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="single-content">
                        <p class="xlr">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo dolor
                            fermentum dignissim et.</p>
                        <div class="profile-area">
                            <div class="icon-area">
                                <img src="assets/images/testimonails-img-2.png" alt="icon">
                            </div>
                            <div class="text-area">
                                <h5>Hector Dawson</h5>
                                <p>United States</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonails In end -->

</x-layout>