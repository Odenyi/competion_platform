<x-layout>
@section('Completed', 'active')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-8">
            <div class="tab-content">
                    <div class="col-12">
                        <h5 class="title"></h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr style="color:white;">
                                        <th scope="col">Date/Time</th>
                                        <th scope="col">Bet Id</th>
                                        <th scope="col">Home Team</th>
                                        <th scope="col">Away Team</th>
                                        <th scope="col">Stake</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Company feee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $availablecompetition as $competition)
                                    @php
                                        $total =  $competition->amount->amount *  $competition->odd;
                                        $amount =    95/100 * $total;
                                        $companyfee = 5/100 * $total ;                          
                                    @endphp
                                
                                    <tr style="color:white;">
                                        <th scope="row">{{ $competition ->created_at }}</th>
                                        <td>{{ $competition->id }}</td>
                                        <td>{{ $competition->home_team }}</td>
                                        <td>{{ $competition->away_team }}</td>
                                        <td>
                                            {{ $competition->amount->amount }}
                                        </td>
                                        <td>{{  $amount}}</td>
                                        <td>{{ $companyfee  }}</td>
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
</x-layout>