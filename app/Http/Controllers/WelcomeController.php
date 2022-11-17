<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    //show welcome page
    public function index()
    { if(Auth::check()){
        $bets = Bets::where('user_id',Auth::user()->id)->get();
       
        $APIkey='ebef07843ae9cd97dcb8b192de4c8866aca83fcb37e06ac63173222ed5b9e697';
        $league_id = 302;
        $from = 2022-11-9;
        $to = 2022-12-30;
        $league_id = 149;

        $curl_options = array(
        CURLOPT_URL =>"https://apiv3.apifootball.com/?action=get_events&from=$from&to=$to&league_id=$league_id&APIkey=$APIkey",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array) json_decode($result);

        // dd($result);
        return view('welcome',compact('bets'));
        }
        else{
            return view('welcome');
        }
    }
}
