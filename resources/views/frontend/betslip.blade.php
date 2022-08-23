
<x-layout>
@php
$total_bets = 0;
@endphp

@section('Betslip', 'active')
<!-- Betpop Up Modal start -->
<div class="betpopmodal">
        <div class="modal " style="display:block ; position:static;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-11">
                            <div class="modal-content">
                        
                                <div class="modal-body">
                                    <div style="overflow-y:auto; height:10rem;" >
                                @unless($bets->isEmpty())
                                @foreach($bets as $bet)
                                    <div class="select-odds mb-2 betcard">
                                        <input type="hidden" class="delete_class update_class" value="{{$bet->id}}">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h6> {{$bet->team_name}} X {{$bet->team_name}}</h6>
                                                            
                                        <h6 class="odds">{{$bet->odds}}</h6>
                                        <a href="javascript:void(0);" class="text-danger deleteicon " 
                                            data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" 
                                            data-bs-placement="top" title="Delete">
                                            <i class="mdi mdi-trash-can font-size-18"></i></a>

                                        </div>
                                        <div class="d-flex align-items-center justify-content-around">
                                        <h6>{{$bet->team_name}}</h6>
                                        </div>
                                    </div>
                                    @php
                                    $total_bets += $bet->odds;
                                    @endphp
                                    @endforeach
                                    @else
                                    <div class="text-center">
                                        <h5>No bets found</h5>
                                    </div>
                                    @endunless
                                    </div>
                                    
                                    <div class="mid-area">
                                        <div class="single-area">
                                            <div class="item-title d-flex align-items-center justify-content-between">
                                                <span>Bet Amount :</span>
                                                
                                            </div>
                                            <div class="d-flex in-dec-val">
                                                <input type="number" value="1" class="InDeVal1" name="amount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
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
                                  
                                    </div>
                                    <div class="bottom-area">
                                        <div class="fee-area">
                                            <p>Winner will get: <span class="amount"></span></p>
                                            <p class="fee">BetPeer Fee: <span>5%: </span><span class="betpeerfee"></span></p>
                                        </div>
                                        <div class="btn-area">
                                            <button class="placebet">Make Bet</button>
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

    </x-layout>