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
                                <h1>Blog Details</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                        <div class="blog-post">
                            <div class="head-area d-flex align-items-center">
                                <span>2 days ago</span>
                                <span>3 min read</span>
                            </div>
                            <h3 class="title">How To Make Money From Free Bets Using Matched Betting</h3>
                            <div class="author-blog-post d-flex">
                                <div class="author">
                                    <img src="assets/images/author-img.png" class="author-img" alt="image">
                                    <div class="author-bottom">
                                        <a href="javascript:void(0)" class="icon-area">
                                            <i class="fas fa-comments"></i>
                                            <p class="mdr">20</p>
                                        </a>
                                        <a href="javascript:void(0)" class="icon-area">
                                            <i class="fas fa-share-alt"></i>
                                            <p class="mdr">20</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="author-content">
                                    <div class="para-area">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                            efficitur ligula at quam congue pellentesque. Maecenas dignissim consequat
                                            erat, a condimentum libero lobortis et. Nulla condimentum pharetra
                                            scelerisque.</p>
                                        <p>Maecenas dignissim consequat erat, a condimentum libero lobortis et. Nulla
                                            condimentum pharetra scelerisque. Pellentesque augue mi, hendrerit non nisi
                                            in, suscipit congue purus. Vivamus imperdiet ultricies ligula, eu maximus
                                            ante tempor non. Quisque gravida augue sit amet lorem suscipit tristique ac
                                            tincidunt mi.</p>
                                    </div>
                                    <img src="assets/images/blog-img-5.png" alt="image">
                                    <p> Nulla condimentum pharetra scelerisque. Pellentesque augue mi, hendrerit non
                                        nisi in, suscipit congue purus. Vivamus imperdiet ultricies ligula, eu maximus
                                        ante tempor non. Quisque gravida augue sit amet lorem suscipit tristique ac
                                        tincidunt mi.</p>
                                </div>
                            </div>
                            <div class="bottom-item d-flex justify-content-between align-items-center">
                                <p>Tags : Crypto , Predict , Win</p>
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
                        <div class="comments-area mt-60 mb-60">
                            <h3 class="title">Comments</h3>
                            <div class="single-comments">
                                <div class="left-area">
                                    <img src="assets/images/comments-img-1.png" alt="image">
                                </div>
                                <div class="right-area">
                                    <h5>Lora White</h5>
                                    <p class="mdr">20 July,2022.10:10am</p>
                                    <p>Nullam iaculis lacus non lectus venenatis tincidunt. Pellentesque est lectus,
                                        semper vitae aliquam in, pretium at libero. Nulla sed mauris neque. Nam eget
                                        pulvinar turpis, nec iaculis diam. Proin nec cursus libero.</p>
                                    <button class="mdr reply-btn">Reply</button>
                                    <form class="comment-box" action="#">
                                        <textarea cols="30" rows="10" placeholder="Write your comment"></textarea>
                                        <button class="cmn-btn">Post</button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-comments mid">
                                <div class="left-area">
                                    <img src="assets/images/comments-img-2.png" alt="image">
                                </div>
                                <div class="right-area">
                                    <h5>William Roy</h5>
                                    <p class="mdr">20 July,2022.10:10am</p>
                                    <p>Nullam iaculis lacus non lectus venenatis tincidunt. Pellentesque est lectus,
                                        semper vitae aliquam in, pretium at libero. Nulla sed mauris neque. Nam eget
                                        pulvinar turpis, nec iaculis diam. Proin nec cursus libero.</p>
                                    <button class="mdr reply-btn">Reply</button>
                                    <form class="comment-box" action="#">
                                        <textarea cols="30" rows="10" placeholder="Write your comment"></textarea>
                                        <button class="cmn-btn">Post</button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-comments">
                                <div class="left-area">
                                    <img src="assets/images/comments-img-3.png" alt="image">
                                </div>
                                <div class="right-area">
                                    <h5>Glenn Park</h5>
                                    <p class="mdr">20 July,2022.10:10am</p>
                                    <p>Nullam iaculis lacus non lectus venenatis tincidunt. Pellentesque est lectus,
                                        semper vitae aliquam in, pretium at libero. Nulla sed mauris neque. Nam eget
                                        pulvinar turpis, nec iaculis diam. Proin nec cursus libero.</p>
                                    <button class="mdr reply-btn">Reply</button>
                                    <form class="comment-box" action="#">
                                        <textarea cols="30" rows="10" placeholder="Write your comment"></textarea>
                                        <button class="cmn-btn">Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comments">
                            <h3 class="title">Leave a Comments</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="name">Name</label>
                                            <div class="input-area">
                                                <input type="text" id="name" placeholder="Full Name">
                                                <img src="assets/images/icon/user-icon.png" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label>Email</label>
                                            <div class="input-area">
                                                <input type="text" placeholder="Email Address">
                                                <img src="assets/images/icon/email-icon.png" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="comment">Comment</label>
                                            <textarea id="comment" cols="30" rows="10"
                                                placeholder="Write the Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-6">
                                        <div class="btn-border w-100">
                                            <button class="cmn-btn w-100">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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