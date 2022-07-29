
    <x-dashboard>
    <!-- Dashboard Content Section start -->
    <section class="dashboard-content pt-120">
        <div class="overlay">
            <div class="dashboard-heading">
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-between">
                        <div class="col-xl-9 col-lg-12">
                            <ul class="nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                        aria-selected="false">dashboard</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="my-bets-tab" data-bs-toggle="tab"
                                        data-bs-target="#my-bets" type="button" role="tab" aria-controls="my-bets"
                                        aria-selected="false">my bets</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="deposit-tab" data-bs-toggle="tab"
                                        data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                                        aria-selected="false">deposit</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="withdraw-tab" data-bs-toggle="tab"
                                        data-bs-target="#withdraw" type="button" role="tab" aria-controls="withdraw"
                                        aria-selected="false">withdraw</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="transactions-tab" data-bs-toggle="tab"
                                        data-bs-target="#transactions" type="button" role="tab"
                                        aria-controls="transactions" aria-selected="false">transactions</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="setting-tab" data-bs-toggle="tab"
                                        data-bs-target="#setting" type="button" role="tab" aria-controls="setting"
                                        aria-selected="true">setting</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dashboard-sidebar">
                            <div class="single-item">
                                <img src="assets/images/profile-img-1.png" alt="images">
                                <h5>Brian Odenyi</h5>
                                <p>ID: 32315145</p>
                            </div>
                            <div class="balance">
                                <div class="single-item">
                                    <img src="assets/images/icon/dashboard-sidebar-icon-1.png" alt="images">
                                    <h5>$5135.00</h5>
                                    <p>Available Balance</p>
                                </div>
                                <div class="bottom-area d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0)" class="mdr withdraw-btn">Withdraw</a>
                                    <a href="javascript:void(0)" class="mdr deposit-btn">Deposit</a>
                                </div>
                            </div>
                            <div class="single-item">
                                <img src="assets/images/icon/dashboard-sidebar-icon-2.png" alt="images">
                                <h5>Need Help?</h5>
                                <p class="mdr">Have questions? Our experts are here to help!.</p>
                                <span class="btn-border">
                                    <a href="contact.html" class="cmn-btn">Get Start Now</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="assets/images/icon/user-info-icon-1.png" alt="icon">
                                            <div class="text-area">
                                                <h4>678</h4>
                                                <p class="mdr">Total Match</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="assets/images/icon/user-info-icon-2.png" alt="icon">
                                            <div class="text-area">
                                                <h4>91%</h4>
                                                <p class="mdr">Win Ratio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="assets/images/icon/user-info-icon-3.png" alt="icon">
                                            <div class="text-area">
                                                <h4>22</h4>
                                                <p class="mdr">Achievements</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="title">Recent Activity</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date/Time</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Deposit</td>
                                                        <td>BTC</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                                alt="icon">
                                                            0.00016556
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Withdrawal</td>
                                                        <td>BTC</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                                alt="icon">
                                                            0.00016556
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Refer com.</td>
                                                        <td>USDT</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-2.png"
                                                                alt="icon">
                                                            13.1072000
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Withdrawal</td>
                                                        <td>BTC</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                                alt="icon">
                                                            0.00016556
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Deposit</td>
                                                        <td>TRX</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-3.png"
                                                                alt="icon">
                                                            368.033428
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Refer com.</td>
                                                        <td>BTC</td>
                                                        <td>
                                                            <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                                alt="icon">
                                                            0.00016556
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="my-bets" role="tabpanel" aria-labelledby="my-bets-tab">
                                <div class="bets-tab">
                                    <div class="d-flex">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn active" id="open-playing-tab"
                                                    data-bs-toggle="tab" data-bs-target="#open-playing" type="button"
                                                    role="tab" aria-controls="open-playing" aria-selected="true">Open
                                                    Playing</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="canceled-tab" data-bs-toggle="tab"
                                                    data-bs-target="#canceled" type="button" role="tab"
                                                    aria-controls="canceled" aria-selected="false">Canceled</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="finished-tab" data-bs-toggle="tab"
                                                    data-bs-target="#finished" type="button" role="tab"
                                                    aria-controls="finished" aria-selected="false">Finished</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bet-this-game">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="open-playing" role="tabpanel"
                                                aria-labelledby="open-playing-tab">
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
                                                            <div
                                                                class="countdown d-flex align-items-center justify-content-center">
                                                                <h4>
                                                                    <span class="hours">15</span><span
                                                                        class="ref">h</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="minutes">21</span><span
                                                                        class="ref">m</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="seconds">17</span><span
                                                                        class="ref">s</span>
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
                                                        <button type="button" class="cmn-btn firstTeam"
                                                            data-bs-toggle="modal" data-bs-target="#betpop-up">Eagle will
                                                            win</button>
                                                        <button type="button" class="cmn-btn draw" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Draw</button>
                                                        <button type="button" class="cmn-btn lastTeam"
                                                            data-bs-toggle="modal" data-bs-target="#betpop-up">Paeek will
                                                            win</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="canceled" role="tabpanel"
                                                aria-labelledby="canceled-tab">
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
                                                            <div
                                                                class="countdown d-flex align-items-center justify-content-center">
                                                                <h4>
                                                                    <span class="hours">15</span><span
                                                                        class="ref">h</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="minutes">15</span><span
                                                                        class="ref">m</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="seconds">46</span><span
                                                                        class="ref">s</span>
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
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Eagle will win</button>
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Draw</button>
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Paeek will win</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="finished" role="tabpanel"
                                                aria-labelledby="finished-tab">
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
                                                            <div
                                                                class="countdown d-flex align-items-center justify-content-center">
                                                                <h4>
                                                                    <span class="hours">15</span><span
                                                                        class="ref">h</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="minutes">15</span><span
                                                                        class="ref">m</span><span class="seperator">:</span>
                                                                </h4>
                                                                <h4>
                                                                    <span class="seconds">17</span><span
                                                                        class="ref">s</span>
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
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Eagle will win</button>
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Draw</button>
                                                        <button type="button" class="cmn-btn" data-bs-toggle="modal"
                                                            data-bs-target="#betpop-up">Paeek will win</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                                <div class="deposit-with-tab">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-5">
                                            <div class="balance-area">
                                            
                                                <div
                                                    class="head-area d-flex align-items-center justify-content-between">
                                                    <p class="mdr">Current Balance</p>
                                                    
                                                </div>
                                                <h6><span>KSH</span>1,000 </h6>
                                                
                                            </div>
                                        
                                        </div>
                                        <div class="col-xxl-8 col-xl-7">
                                                <div class="right-area">
                                                    <h5>Deposit</h5>
                                                    <div class="address-bar">
                                                        <form action="">
                                                            <p>Send money into your BetPeer account</p>
                                                        
                                                            <div class="input-single">
                                                                <label>Amount</label>
                                                                <div class="input-area">
                                                                    <input type="text" placeholder="Enter Amount">
                                                                </div>
                                                            </div>
                                                            
                                                            <span class="btn-border">
                                                                <a href="javascript:void(0)" class="cmn-btn">Get Start
                                                                    Now</a>
                                                            </span>
                                                        
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                                <div class="deposit-with-tab withdraw">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-5">
                                            <div class="balance-area">
                                                <div
                                                    class="head-area d-flex align-items-center justify-content-between">
                                                    <p class="mdr">Current Balance</p>
                                                
                                                </div>
                                                <h6><span>KSH</span>1,000</h6>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8 col-xl-7">
                                            <div class="right-area">
                                                <h5>Withdraw </h5>
                                                
                                                <div class="address-bar">
                                                <form action="#">
                                                        <div class="input-single">
                                                            <label>Amount</label>
                                                            <div class="input-area">
                                                                <input type="text" placeholder="Enter Amount">
                                                            </div>
                                                        </div>
                                                        
                                                        <span class="btn-border">
                                                            <a href="javascript:void(0)" class="cmn-btn">Get Start
                                                                Now</a>
                                                        </span>
                                                    </form>
                                                </div>
                                                <div class="bottom-area">
                                                    <div class="single-item">
                                                        <h6>Transaction fee:</h6>
                                                        <p>Your withdrawal will also have 10.00 subtracted to cover
                                                            the transaction fee.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="tab-pane fade" id="transactions" role="tabpanel"
                                aria-labelledby="transactions-tab">
                                <div class="transactions-tab">
                                    <div class="head-area">
                                        <form action="#">
                                            <div class="single-input">
                                                <label>Month</label>
                                                <select>
                                                    <option value="1">2021/01</option>
                                                    <option value="2">2021/02</option>
                                                    <option value="3">2021/03</option>
                                                    <option value="4">2021/04</option>
                                                </select>
                                            </div>
                                            <div class="single-input">
                                                <label>Type</label>
                                                <select>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                    <option value="3">Type 3</option>
                                                    <option value="4">Type 4</option>
                                                </select>
                                            </div>
                                            <div class="single-input">
                                                <label>Currency</label>
                                                <select>
                                                    <option value="1">Currency 1</option>
                                                    <option value="2">Currency 2</option>
                                                    <option value="3">Currency 3</option>
                                                    <option value="4">Currency 4</option>
                                                </select>
                                            </div>
                                            <div class="text-end">
                                                <button>Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date/Time</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Currency</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Deposit</td>
                                                    <td>BTC</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                            alt="icon">
                                                        0.00016556
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Withdrawal</td>
                                                    <td>BTC</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                            alt="icon">
                                                        0.00016556
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Refer com.</td>
                                                    <td>USDT</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-2.png"
                                                            alt="icon">
                                                        13.1072000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Withdrawal</td>
                                                    <td>BTC</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                            alt="icon">
                                                        0.00016556
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Deposit</td>
                                                    <td>TRX</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-3.png"
                                                            alt="icon">
                                                        368.033428
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2021-01-07 16:33:53</th>
                                                    <td>Refer com.</td>
                                                    <td>BTC</td>
                                                    <td>
                                                        <img src="assets/images/icon/dashboard-coin-icon-1.png"
                                                            alt="icon">
                                                        0.00016556
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="setting" role="tabpanel"
                                aria-labelledby="setting-tab">
                                <div class="setting-tab">
                                    <div class="setting-personal-details">
                                        <h5>KYC Personal Details</h5>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="perFname">First Name</label>
                                                        <input type="text" id="perFname" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="perLname">Last Name</label>
                                                        <input type="text" id="perLname" placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="birth">Date Of Birth</label>
                                                        <input type="text" id="birth" placeholder="Enter Date Of Birth">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" id="phone" placeholder="Enter Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-input">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address" placeholder="Enter Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="postalcode">Postal Code</label>
                                                        <input type="text" id="postalcode"
                                                            placeholder="Enter Postal Code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="country">Country</label>
                                                        <input type="text" id="country" placeholder="Enter Country">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="city">City</label>
                                                        <input type="text" id="city" placeholder="Enter City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label for="state">State</label>
                                                        <input type="text" id="state" placeholder="Enter State">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input">
                                                        <label>Select ID Type</label>
                                                        <select>
                                                            <option value="1">Passport</option>
                                                            <option value="2">Nation ID Card</option>
                                                            <option value="3">Driving License</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-items-end">
                                                    <div class="single-input">
                                                        <div class="file-upload">
                                                            <div class="right-area">
                                                                <label class="file">
                                                                    <input type="file">
                                                                    <span class="file-custom"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span class="btn-border">
                                                        <button class="cmn-btn">Begin Verification</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Content Section end -->

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

    </x-dashboard>