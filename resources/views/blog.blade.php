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
    <section class="banner-section inner-banner blog">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets/images/blog-illus.png" class="blog-illu" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-10">
                            <div class="main-content">
                                <h1>Blog</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

    <!-- Blog In start -->
    <section class="blog-section ovf-unset">
        <div class="overlay pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="assets/images/blog-img-1.png" alt="icon">
                            </div>
                            <div class="blog-content">
                                <div class="mid-content">
                                    <a href="blog-details.html">
                                        <h4>How to Get Started With Sports Betting</h4>
                                    </a>
                                    <p>If you are new to sports betting, then you should familiarize yourself with the
                                        rudiments of this fun wagering option.</p>
                                </div>
                                <div class="bottom-item d-flex justify-content-between align-items-center">
                                    <p>August 25, 2022</p>
                                    <a href="blog-details.html" class="btn-area d-flex align-items-center">
                                        Read more
                                        <img src="assets/images/icon/arrow-right.png" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="assets/images/blog-img-2.png" alt="image">
                            </div>
                            <div class="blog-content">
                                <div class="mid-content">
                                    <a href="blog-details.html">
                                        <h4>How To Make Money From Free Bets Using Matched Betting</h4>
                                    </a>
                                    <p>If you are new to sports betting, then you should familiarize yourself with the
                                        rudiments of this fun wagering option.</p>
                                </div>
                                <div class="bottom-item d-flex justify-content-between align-items-center">
                                    <p>August 25, 2022</p>
                                    <a href="blog-details.html" class="btn-area d-flex align-items-center">
                                        Read more
                                        <img src="assets/images/icon/arrow-right.png" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="assets/images/blog-img-3.png" alt="image">
                            </div>
                            <div class="blog-content">
                                <div class="mid-content">
                                    <a href="blog-details.html">
                                        <h4>Betting On Horse Racing - Setting Up Your Betting Bank</h4>
                                    </a>
                                    <p>If you are new to sports betting, then you should familiarize yourself with the
                                        rudiments of this fun wagering option.</p>
                                </div>
                                <div class="bottom-item d-flex justify-content-between align-items-center">
                                    <p>August 25, 2022</p>
                                    <a href="blog-details.html" class="btn-area d-flex align-items-center">
                                        Read more
                                        <img src="assets/images/icon/arrow-right.png" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="assets/images/blog-img-4.png" alt="image">
                            </div>
                            <div class="blog-content">
                                <div class="mid-content">
                                    <a href="blog-details.html">
                                        <h4>The Basics of Online Sports Betting - Learning the Specific Bets</h4>
                                    </a>
                                    <p>If you are new to sports betting, then you should familiarize yourself with the
                                        rudiments of this fun wagering option.</p>
                                </div>
                                <div class="bottom-item d-flex justify-content-between align-items-center">
                                    <p>August 25, 2022</p>
                                    <a href="blog-details.html" class="btn-area d-flex align-items-center">
                                        Read more
                                        <img src="assets/images/icon/arrow-right.png" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation" class="d-flex justify-content-center mt-60">
                            <ul class="pagination justify-content-center align-items-center">
                                <li class="page-item">
                                    <a class="page-btn previous" href="javascript:void(0)" aria-label="Previous">
                                        <img src="assets/images/icon/arrow-left.png" alt="icon">
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link xlr active" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a></li>
                                <li class="page-item">
                                    <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                        <img src="assets/images/icon/arrow-right.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9">
                        <div class="sidebar-blog position-sticky top-0">
                            <div class="sidebar-single">
                                <h5 class="title">Search</h5>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter your Search Content">
                                        <div class="btn-border">
                                            <button class="cmn-btn">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-single">
                                <h5 class="title">Latest Post</h5>
                                <div class="sidebar-carousel">
                                    <div class="single-slide">
                                        <img src="assets/images/blog-slider-img-1.png" alt="image">
                                        <h6 class="title">Top Ten Betting Mistakes</h6>
                                        <div class="slide-bottom d-flex align-items-center">
                                            <div class="icon-area">
                                                <i class="fas fa-comments"></i>
                                                <span class="mdr">20 Comments</span>
                                            </div>
                                            <div class="icon-area">
                                                <i class="far fa-eye"></i>
                                                <span class="mdr">466 View</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <img src="assets/images/blog-slider-img-1.png" alt="image">
                                        <h6 class="title">Top Ten Betting Mistakes</h6>
                                        <div class="slide-bottom d-flex align-items-center">
                                            <div class="icon-area">
                                                <i class="fas fa-comments"></i>
                                                <span class="mdr">20 Comments</span>
                                            </div>
                                            <div class="icon-area">
                                                <i class="far fa-eye"></i>
                                                <span class="mdr">466 View</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-single">
                                <h5 class="title">Follow Us</h5>
                                <form action="#">
                                    <div class="form-group">
                                        <div class="social-link d-flex align-items-center">
                                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog In end -->

</x-layout>