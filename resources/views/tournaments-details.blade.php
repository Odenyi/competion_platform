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
                                <h1>Tournaments Details</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="tournaments.html">Tournaments</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tournaments Details</li>
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

    <!-- Tournaments section start -->
    <section class="how-works-tournaments tournaments-section">
        <div class="overlay">
            <div class="container">
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
                                    <button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
                                        Join Now
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <div class="col-lg-12">
                        <div class="table-responsive mt-60">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Nickname</th>
                                        <th scope="col">Profit</th>
                                        <th scope="col">Total Bets</th>
                                        <th scope="col">Prize Money</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/images/icon/first-trophy.png" alt="icon">
                                        </th>
                                        <td>Erik Curry</td>
                                        <td>$8,870</td>
                                        <td>81</td>
                                        <td class="prize">$400.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/images/icon/second-trophy.png" alt="icon">
                                        </th>
                                        <td>Erik Curry</td>
                                        <td>$8,370</td>
                                        <td>14</td>
                                        <td class="prize">$250.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/images/icon/third-trophy.png" alt="icon">
                                        </th>
                                        <td>Erik Curry</td>
                                        <td>$3,937</td>
                                        <td>70</td>
                                        <td class="prize">$200.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td>Lewash17</td>
                                        <td>$1,408</td>
                                        <td>6</td>
                                        <td class="prize">$175.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">05</th>
                                        <td>Gromph</td>
                                        <td>$1,371</td>
                                        <td>11</td>
                                        <td class="prize">$150.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">06</th>
                                        <td>jaja27</td>
                                        <td>$1,370</td>
                                        <td>15</td>
                                        <td class="prize">$125.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">07</th>
                                        <td>phorbes</td>
                                        <td>$977</td>
                                        <td>4</td>
                                        <td class="prize">$115.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">08</th>
                                        <td>saarben</td>
                                        <td>$805</td>
                                        <td>37</td>
                                        <td class="prize">$100.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">09</th>
                                        <td>utilityman</td>
                                        <td>$759</td>
                                        <td>162</td>
                                        <td class="prize">$90.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Fortza</td>
                                        <td>$320</td>
                                        <td>37</td>
                                        <td class="prize">$80.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>richo</td>
                                        <td>$244</td>
                                        <td>33</td>
                                        <td class="prize">$70.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Fatpat</td>
                                        <td>$223</td>
                                        <td>11</td>
                                        <td class="prize">$60.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Rhawkins</td>
                                        <td>$167</td>
                                        <td>19</td>
                                        <td class="prize">$50.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>ddkhen</td>
                                        <td>$160</td>
                                        <td>8</td>
                                        <td class="prize">$40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td>goku777</td>
                                        <td>$140</td>
                                        <td>0</td>
                                        <td class="prize">$30.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td>Bazzo</td>
                                        <td>$84</td>
                                        <td>0</td>
                                        <td class="prize">$25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td>Eskimo</td>
                                        <td>$57</td>
                                        <td>51</td>
                                        <td class="prize">$20.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td>Brad Mills</td>
                                        <td>$49</td>
                                        <td>0</td>
                                        <td class="prize">$15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td>Cary Bass</td>
                                        <td>$42</td>
                                        <td>84</td>
                                        <td class="prize">$10.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td>David Rowe</td>
                                        <td>$40</td>
                                        <td>2</td>
                                        <td class="prize">$5.00</td>
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
    <!-- Tournaments section end -->

</x-layout>