<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetPeer</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
    <!-- alpine js to show dynamic pop up and flash messages -->
     <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section user-dashboard">
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
                                    <a class="nav-link" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle active" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Dashboard</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Setting</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="/personal-details-setting">Personal Details</a></li>
                                                <li><a class="nav-link" href="/modify-login-password">Change Password</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Sports</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="/soccer-bets-2">Tennis</a></li>
                                        <li><a class="nav-link" href="/soccer-bets-1">Soccer</a></li>
                                        <li><a class="nav-link" href="/soccer-bets-2">NBA</a></li>
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
                                                <li><a class="nav-link" href="/tournaments">Tournaments</a></li>
                                                <li><a class="nav-link" href="/tournaments-details">Tournaments Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Blog</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="/blog">Blog</a></li>
                                                <li><a class="nav-link" href="/blog-details">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="/affiliate">Affiliate</a></li>
                                        <li><a class="nav-link" href="/faqs">Faqs</a></li>
                                        <li><a class="nav-link" href="/privacy-policy">Privacy Policy</a></li>
                                        <li><a class="nav-link" href="/terms-conditions">Terms Conditions</a></li>
                                        <li><a class="nav-link" href="/error">Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <div class="single-item">
                                    <select>
                                        <option value="1">EN</option>
                                        <option value="1">BN</option>
                                        <option value="1">DA</option>
                                    </select>
                                </div>
                                <div class="single-item notifications-area">
                                    <div class="notifications-btn active-dot">
                                        <img src="assets/images/icon/notifications.png" alt="icon">
                                        <span class="items">3</span>
                                    </div>
                                    <div class="main-area notifications-content">
                                        <div class="head-area d-flex justify-content-between">
                                            <div class="left d-flex align-items-center">
                                                <h5>Notifications</h5>
                                                <span class="mdr">03</span>
                                            </div>
                                            <button class="clear-all">
                                                <img src="assets/images/icon/cancel-btn.png" alt="icon">
                                            </button>
                                        </div>
                                        <ul>
                                            <li class="border-area">
                                                <a href="javascript:void(0)">
                                                    <div class="img-area">
                                                        <img src="assets/images/latest-tips-1.png" alt="image">
                                                    </div>
                                                    <div class="text-area">
                                                        <h6>Della Parker</h6>
                                                        <p class="mdr">+2736 Profit on Horse Racing</p>
                                                        <p class="mdr time-area">04:20 PM</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="active">
                                                    <div class="img-area">
                                                        <img src="assets/images/latest-tips-2.png" alt="image">
                                                    </div>
                                                    <div class="text-area">
                                                        <h6>Terasa Estrada</h6>
                                                        <p class="mdr">+2534 Profit on Football</p>
                                                        <p class="mdr time-area">03:17 PM</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <div class="img-area">
                                                        <img src="assets/images/latest-tips-3.png" alt="image">
                                                    </div>
                                                    <div class="text-area">
                                                        <h6>Tyler Bell</h6>
                                                        <p class="mdr">+2534 Profit on Football</p>
                                                        <p class="mdr time-area">05:33 PM</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-item user-area">
                                    <div class="user-btn d-flex align-items-center">
                                        <span class="user-profile">
                                            <img src="assets/images/dashboard-profile-1.png" alt="icon">
                                        </span>
                                        <span class="name-area">Brian</span>
                                        <i class="icon-c-down-arrow"></i>
                                    </div>
                                    <div class="main-area user-content">
                                        <div class="head-area d-flex">
                                            <div class="img-area">
                                                <img src="assets/images/dashboard-profile-2.png" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h5>Brian Odenyi</h5>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/icon/calendar-icon-2.png" alt="icon">
                                                    <span>Joined July, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-area">
                                                <a href="javascript:void(0)" class="active">
                                                    <img src="assets/images/icon/dashboard-icon.png" alt="icon">
                                                    <p class="mdr">Dashboard</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="assets/images/icon/subscriptions-icon.png" alt="icon">
                                                    <p class="mdr">My Subscriptions</p>
                                                </a>
                                            </li>
                                            <li class="border-area">
                                                <a href="javascript:void(0)">
                                                    <img src="assets/images/icon/settings-icon.png" alt="icon">
                                                    <p class="mdr">Account Settings</p>
                                                </a>
                                            </li>
                                            
                                            <li class="border-area">
                                                <a href="javascript:void(0)">
                                                    <img src="assets/images/icon/history-icon.png" alt="icon">
                                                    <p class="mdr">Transaction History</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    {{$slot}}

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
                                <img src="" alt="logo">
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
                                <p> Copyright © <a href="/">BetPeer</a> | <script>document.write(new Date().getFullYear())</script>
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