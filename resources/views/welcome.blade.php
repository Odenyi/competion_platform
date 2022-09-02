
   <x-layout>
    <!-- make home link active -->
   @section('Home', 'active')
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
                                             
                                                <div class="form-area">
                                                    <form action="/users/authenticate" method="POST">
                                                        @csrf
                                                         <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" id="email" name="email" value="{{old('logemail')}}"
                                                                        placeholder="Email Password">
                                                                    
                                                                    @error('logemail')
                                                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                    @enderror
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="password">Password</label>
                                                                    <input type="password" id="password" name="password" value="{{old('password')}}"
                                                                        placeholder="Email Password">
                                                                    @error('logpassword')
                                                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                    @enderror
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
                                                                <button class="cmn-btn w-100" type="submit">LOGIN</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    <div class="bottom-area text-center">
                                                        <p>Don't have an account ? <a href="javascript:void(0)" class="reg-btn">Register</a></p>
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
                                                    <h6 class="title">Register On BetPeer</h6>
                                                   
                                                </div>
                                                <div class="form-area">
                                                    <form action="/users" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label for="UserName">User Name</label>
                                                                    <input type="name" id="UserName" name="name"
                                                                        placeholder="User Name" value="{{old('name')}}">
                                                                        @error('name')
                                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                        @enderror
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="regnumber">Phone Number</label>
                                                                    <input type="number" id="regnumber" name="number"
                                                                        placeholder="Phone Number" value="{{old('number')}}">
                                                                        @error('number')
                                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                        @enderror
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="regemail">Email</label>
                                                                    <input type="text" id="regemail" name="email"
                                                                        placeholder="Email Address" value="{{old('email')}}">
                                                                        @error('email')
                                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                        @enderror
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="regpassword">Password</label>
                                                                    <input type="password" id="regpassword" name="password"
                                                                        placeholder="Password" value="{{old('password')}}">
                                                                        @error('password')
                                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                        @enderror
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="regpasswordconfirm">Password confirmation</label>
                                                                    <input type="password" id="regpasswordconfirm" name="password_confirmation"
                                                                        placeholder="Password" value="{{old('password_confirmation')}}">
                                                                        @error('password_confirmation')
                                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                                        @enderror
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="remember-me">
                                                                    <a href="javascript:void(0)">Have a referral
                                                                        code?</a>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button class="cmn-btn w-100" type="submit">SIGN UP</button>
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
                                    <h1 class="title">BetPeer Peer 2 Peer</h1>
                                    <p class="xlr">The fastest, easiest way to bet on sports.NBA, Tennis & Football,
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
                                <h3 class="m-none"><span>Ksh</span><span class="counter">100,941</span></h3>
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
                            <p>BetPeer is a user-friendly, decentralised, peer-to-peer betting platform.</p>
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
                            <h2 class="title">How BetPeer Works?</h2>
                            <p>Our platform has been designed from the ground up to be tailored to the unique form of
                                betting and settlement. Follow these simple steps and make
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
                            <h5 class="sub-title">BetPeer Peer 2 Peer</h5>
                            <h2 class="title">Bets in This Game</h2>
                            <p>Use the power of BetPeer Bets Fast, Anonymous ,Automatic, Trustworthy</p>
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
                                    <h4 id="Arsenal">Arsenal</h4>
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
                                    <h4 id="volna">Volna</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                                <button type="button" class="cmn-btn firstTeam" data-bs-toggle="modal" id="arsenalbtn"
                                    data-bs-target="#">Arsenal will win</button>
                                <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                    data-bs-target="#betpop-up">Draw</button>
                                <button type="button" class="cmn-btn lastTeam" data-bs-toggle="modal"
                                    data-bs-target="#" id="volnabtn">Volna will win</button>
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
                                <a href="/soccer-bets-2" class="cmn-btn">Browse More</a>
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
                                                <input type="text" value="1" class="InDeVal1">
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
                                                <button class="quickIn">50</button>
                                                <button class="quickIn">100</button>
                                                <button class="quickIn">200</button>
                                                <button class="quickIn">500</button>
                                                <button class="quickIn">1000</button>
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
                                            <p class="fee">BetPeer Fee: <span>5%</span></p>
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
                            <h5 class="sub-title">Leading in Peer to Peer beting services</h5>
                            <h2 class="title">An Exhaustive list of Amazing Features</h2>
                            <p>BetPeer is the most advanced sports peer to peer beting platform and highest stakes across
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
                            <h2 class="title">Bet between users</h2>
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
                            <p>Answers for our most popular questions about sportsbetting and Beer to peer</p>
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
                                            I want to play at BeetPeer, What do i need to do?
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
                                            What kind of Beting options do you provide?
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
                                            Is our payment secured?
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
                                            How do I withdraw money from my BeetPeer Bets account?
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


</x-layout>