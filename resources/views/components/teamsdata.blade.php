@foreach ($availablecompetition as $competition)
                    <div class="col-lg-6 betagainst">
                    <input type="hidden" class="betagainstinput" value="{{$competition->id}}">
                        <div class="single-area">
                            <div class="head-area d-flex align-items-center">
                                <span class="mdr cmn-btn">Pick Winner</span>
                                <p>Mar 23, 2022,3:45PM EDT</p>
                            </div>
                            <div class="main-content">
                                <div class="team-single">
                                    <h4 id="Arsenal">{{ $competition->home_team }}</h4>
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
                                   
                                    <h6> Bet Amount &nbsp;Ksh.{{$competition->amount->amount}}</h6>  
                                  
                                    
                                </div>
                                <div class="team-single">
                                    <h4 id="volna">{{ $competition->away_team }}</h4>
                                    <span class="mdr">Away</span>
                                    <div class="img-area">
                                        <img src="assets/images/team-logo-2.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-item">
                               
                                            <button type="button" class="cmn-btn clickbuttonhome @foreach($competition->availableCompetition as $compete){{$compete->bet_type ==1 ?'active-bet':''}} @endforeach " data-bs-toggle="modal" id="arsenalbtn" 
                                        data-bs-target="#">{{$competition->home_team}} will win</button> 
                                            
                                         <button type="button" class="cmn-btn clickbuttondraw @foreach($competition->availableCompetition as $compete){{$compete->bet_type ==0 ?'active-bet':''}} @endforeach draw" >Draw</button>

                                        <button type="button" class="cmn-btn clickbuttonaway @foreach($competition->availableCompetition as $compete){{$compete->bet_type ==2 ?'active-bet':''}} @endforeach lastTeam">{{$competition->away_team}}will win</button>
                                               
                                        
                                       
                               
                                    
                            </div>
                        </div>
                    </div>
                    @endforeach