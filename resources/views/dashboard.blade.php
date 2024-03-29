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
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                        aria-selected="true">dashboard</button>
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
                                    <button class="nav-link" id="setting-tab" data-bs-toggle="tab"
                                        data-bs-target="#setting" type="button" role="tab" aria-controls="setting"
                                        aria-selected="false">setting</button>
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
                                <h5>{{auth()->user()->name}}</h5>
                                <p>ID: 32315145</p>
                            </div>
                            <div class="balance">
                                <div class="single-item">
                                    <img src="assets/images/icon/dashboard-sidebar-icon-1.png" alt="images">
                                    <h5>@foreach ($useraccount as $account)
                                            Ksh. {{ $account->amount}}
                                                @endforeach </h5>
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
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
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
                                                <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date/Time</th>
                                                    <th scope="col">Game</th>
                                                    <th scope="col">Choice</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Stake</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userprogressbets as $userbet)
                                                @php
                                                    $possiblewin = ($userbet->amount * $userbet->competition->odd)*95/100;

                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $userbet->updated_at }}</th>
                                                    <td>{{$userbet->competition->home_team}} X {{$userbet->competition->away_team}}</td>
                                                    <td>@if ($userbet->bet_type == 1)
                                                        {{$userbet->competition->home_team}}  
                                                        @elseif ($userbet->bet_type == 0) 
                                                        draw
                                                        @else($userbet->bet_type == 2) 
                                                        {{$userbet->competition->away_team }}                                                   
                                                    @endif</td>
                                                    <td>@if ($userbet->competition->status == 'completed')
                                                        Complete
                                                        @else
                                                        In progress
                                                        
                                                    @endif</td>
                                                    <td>{{$userbet->amount}}</td>
                                                    <td>
                                                        {{$possiblewin}}
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                         </table>
                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="canceled" role="tabpanel"
                                                aria-labelledby="canceled-tab">
                                                <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date/Time</th>
                                                    <th scope="col">Game</th>
                                                    <th scope="col">Choice</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Stake</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userincompletebets as $userbet)
                                                @php
                                                    $possiblewin = ($userbet->stake * $userbet->incompleteCompetition->odd);

                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $userbet->updated_at }}</th>
                                                    <td>{{$userbet->incompleteCompetition->home_team}} X {{$userbet->incompleteCompetition->away_team}}</td>
                                                    <td>@if ($userbet->bet_type == 1)
                                                        {{$userbet->incompleteCompetition->home_team}}  
                                                        @elseif ($userbet->bet_type == 0) 
                                                        draw
                                                        @else($userbet->bet_type == 2) 
                                                        {{$userbet->incompleteCompetition->away_team }}                                                   
                                                    @endif</td>
                                                    <td>{{$userbet->status}}</td>
                                                    <td>{{$userbet->stake}}</td>
                                                    <td>
                                                        {{$possiblewin}}
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                            </div>
                                            <div class="tab-pane fade" id="finished" role="tabpanel"
                                                aria-labelledby="finished-tab">
                                                <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date/Time</th>
                                                    <th scope="col">Game</th>
                                                    <th scope="col">Choice</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Stake</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userclosedbets as $userbet)
                                                @php
                                                    $possiblewin = ($userbet->stake * $userbet->closedcompetition->odd)*95/100;

                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $userbet->updated_at }}</th>
                                                    <td>{{$userbet->closedcompetition->home_team}} X {{$userbet->closedcompetition->away_team}}</td>
                                                    <td>@if ($userbet->bet_type == 1)
                                                        {{$userbet->closedcompetition->home_team}}  
                                                        @elseif ($userbet->bet_type == 0) 
                                                        draw
                                                        @else($userbet->bet_type == 2) 
                                                        {{$userbet->closedcompetition->away_team }}                                                   
                                                    @endif</td>
                                                    <td>{{$userbet->status}}</td>
                                                    <td>{{$userbet->stake}}</td>
                                                    <td>
                                                        {{$possiblewin}}
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
                                                <h6><span>KSH</span>@foreach ($useraccount as $account)
                                                {{ $account->amount}}
                                                @endforeach</h6>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xxl-8 col-xl-7">
                                            <div class="right-area">
                                                <h5>Deposit</h5>
                                                <div class="address-bar">
                                                    <form action="" method="" id="depositform">
                                                        @csrf
                                                        <p>Send money into your BetPeer account</p>
                                                        <p id="c2b_response"></p>
                                                        <div class="input-single">
                                                            <label>Amount</label>
                                                            <div class="input-area">
                                                                <input type="number" placeholder="Enter Amount" name="depositamount" id="depositamount">
                                                            </div>
                                                        </div>
                                                        
                                                        <span class="btn-border">
                                                            <a href="javascript:void(0)" class="cmn-btn" id="depositviaMpesa">Deposit</a>
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
                                                <h6><span>KSH</span>@foreach ($useraccount as $account)
                                                {{ $account->amount}}
                                                @endforeach </h6>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8 col-xl-7">
                                            <div class="right-area">
                                                <h5>Withdraw </h5>
                                               
                                                <div class="address-bar">
                                                    <form action="/withdrawcash" method="POST" id="withdrawform">
                                                        @csrf
                                                        <div class="input-single">
                                                            <label>Amount</label>
                                                            <div class="input-area">
                                                                <input type="number" placeholder="Enter Amount" name="withdrawamount">
                                                            </div>
                                                        </div>
                                                        
                                                        <span class="btn-border">
                                                            <a href="javascript:void(0)" class="cmn-btn" onclick="document.getElementById('withdrawform').submit()">Withdraw</a>
                                                        </span>
                                                    </form>
                                                </div>
                                                <div class="bottom-area">
                                                    <div class="single-item">
                                                        <h6>Transaction fee:</h6>
                                                        <p>Your withdrawal will also have ksh 10 subtracted to cover
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
                            <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                <div class="setting-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-area">
                                                <h5>Settings</h5>
                                            </div>
                                            <div class="single-area">
                                                <div class="file-upload">
                                                    <div class="img-area">
                                                        <img src="assets/images/demo-profile.png" alt="icon">
                                                    </div>
                                                    <div class="right-area">
                                                        <p class="title">Upload profile photo via:</p>
                                                        <label class="file">
                                                            <input type="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                        <p class="mdr">Choose a photo from your personal computer. 3MB
                                                            max.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-area">
                                                <div class="icon-area">
                                                    <img src="assets/images/icon/message-icon.png" alt="icon">
                                                </div>
                                                <p class="mdr"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54243c3d383d24626c60143339353d387a373b39">[email&#160;protected]</a></p>
                                                <a href="personal-details-setting.html" class="mdr">Unverified
                                                    Account</a>
                                            </div>
                                            <div class="single-area">
                                                <div class="icon-area">
                                                    <img src="assets/images/icon/security-icon.png" alt="icon">
                                                </div>
                                                <a href="modify-login-password.html" class="cmn-btn">Change Password</a>
                                            </div>
                                            <div class="single-area">
                                                <p>Enable Google Authentication</p>
                                                <label class="switch" id="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="google-authentication mt-30" id="aaactive">
                                    <h4>Enable Google Authentication</h4>
                                    <div class="d-flex">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn active" id="download-app-tab"
                                                    data-bs-toggle="tab" data-bs-target="#download-app" type="button"
                                                    role="tab" aria-controls="download-app"
                                                    aria-selected="true">download app</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="scan-qr-code-tab" data-bs-toggle="tab"
                                                    data-bs-target="#scan-qr-code" type="button" role="tab"
                                                    aria-controls="scan-qr-code" aria-selected="false">scan qr
                                                    code</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="backup-key-tab" data-bs-toggle="tab"
                                                    data-bs-target="#backup-key" type="button" role="tab"
                                                    aria-controls="backup-key" aria-selected="false">backup key</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="enable-authentication-tab"
                                                    data-bs-toggle="tab" data-bs-target="#enable-authentication"
                                                    type="button" role="tab" aria-controls="enable-authentication"
                                                    aria-selected="false">Enable Google Authentication</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="download-app" role="tabpanel"
                                            aria-labelledby="download-app-tab">
                                            <div class="auth-container">
                                                <p>Step 1: Download and install the Google Authentication app into your
                                                    mobile phone.</p>
                                                <div class="brand d-flex align-items-center">
                                                    <a href="javascript:void(0)"><img src="assets/images/app-store.png" alt="images"></a>
                                                    <a href="javascript:void(0)"><img src="assets/images/google-play.png"
                                                            alt="images"></a>
                                                </div>
                                                <div class="footer-area">
                                                    <h6>I have installed the app</h6>
                                                    <a href="javascript:void(0)" class="cmn-btn">Next Step</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="scan-qr-code" role="tabpanel"
                                            aria-labelledby="scan-qr-code-tab">
                                            <div class="auth-container">
                                                <p>Step 2: Scan this QR code in the Google Authentication app.</p>
                                                <div class="qr-code brand">
                                                    <img src="assets/images/qr-code.png" alt="images">
                                                </div>
                                                <div class="number-area">
                                                    <p>If you are unable to scan the QR code, please enter this code
                                                        manually into the app.</p>
                                                    <h6 class="number">GI4V6OJYGI3TGMBW</h6>
                                                </div>
                                                <div class="footer-area">
                                                    <h6>I have installed the app</h6>
                                                    <a href="javascript:void(0)" class="cmn-btn">Next Step</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="backup-key" role="tabpanel"
                                            aria-labelledby="backup-key-tab">
                                            <div class="auth-container">
                                                <p>Step 3: Please save this Key on paper. This Key will allow you to
                                                    recover your Google Authentication in case of phone loss.</p>
                                                <div class="number-area">
                                                    <p>Resetting your Google Authentication requires opening a support
                                                        ticket and takes at least 7 days to process.</p>
                                                    <h6 class="number">GI4V6OJYGI3TGMBW</h6>
                                                </div>
                                                <div class="footer-area">
                                                    <h6>I have already written down the 16-Digit Key</h6>
                                                    <a href="javascript:void(0)" class="cmn-btn">Next Step</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="enable-authentication" role="tabpanel"
                                            aria-labelledby="enable-authentication-tab">
                                            <div class="auth-container">
                                                <p>Step 4: Enter your site password and your google authentication code
                                                    from the google authentication app</p>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="single-input">
                                                                <label for="loginpass">Login Password</label>
                                                                <input type="text" id="loginpass"
                                                                    placeholder="Enter Login Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="single-input">
                                                                <label for="authcode">Google Authentication Code</label>
                                                                <input type="text" id="authcode"
                                                                    placeholder="Enter Google Authentication Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <span class="btn-border w-100">
                                                                <button class="cmn-btn w-100">Submit</button>
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