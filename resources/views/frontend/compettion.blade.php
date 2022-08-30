<x-layout>
@section('Competition', 'active')
  <!-- Bet This Game start -->
  <section class="bet-this-game">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">BetPeer Peer 2 Peer</h5>
                            <h2 class="title">Bets in This competion</h2>
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
                                    data-bs-target="#betpop-up">Volna will win</button>
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
</x-layout>