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
                
                    
                
                <div class="row cus-mar" id="teamsarea">
               @include('components.teamsdata')
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