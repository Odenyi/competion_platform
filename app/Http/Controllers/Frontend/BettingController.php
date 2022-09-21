<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Bets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;

class BettingController extends Controller
{
    //add to betslip
    public function addToBetslip(Request $request){
        $team_name = $request->input('team_name');
        $away_team = $request->input('away_team');
        $bet_type = $request->input('bet_type');
        $game_id = $request->input('game_id');
        $user_id = Auth::user()->id;

        if(Auth::check()){
            $betitemcheck = Bets::where('user_id',$user_id)->where('game_id',$game_id)->exists();
            if($betitemcheck){
                if(Bets::where('user_id',$user_id)->where('game_id',$game_id)->where('bet_type', $bet_type)->exists()){
                $deleteitem = Bets::where('user_id',$user_id)->where('game_id',$game_id)->where('bet_type', $bet_type)->first();
                $deleteitem->delete();
                return response()->json([
                    'Success'=>1,
                    'message' =>'Bet deleted'
                ]);

            }
            else{
                $updatebettype = Bets::where('user_id',$user_id)->where('game_id',$game_id)->first();
                $updatebettype->bet_type = $bet_type;
                $updatebettype->update();

                return response()->json([
                    'Success'=>2,
                    'message' =>'Bet upadted'
                ]);


            }

            }
            else{
                
            $betslip= new Bets();
            $betslip->user_id = $user_id;
            $betslip->game_id = $game_id;
            $betslip->home_team = $team_name;
            $betslip->away_team = $away_team;
            $betslip->bet_type = $bet_type;
            $betslip->odds = $request->input('bet_odds');
            $betslip->save();
            return response()->json([
                'Success' => 2,
                'message' => 'Bet added to Betslip'
            ]);
            
            }
        }
        else{
            return response()->json([
                'success'=>true,
                'message'=>'You need to be logged in to bet'
            ]);
        }

        
    }
    // show betslip
    public function index(){
        $bets = Bets::where('user_id',Auth::user()->id)->get();
        return view('frontend.betslip',compact('bets'));
    }
    //delete bet from betslip
    public function deleteBetslip(Request $request){
      
       if(Auth::check()){
        $deleteid = $request->input('betitem_id');
        if(Bets::where('id',$deleteid)->where('user_id',Auth::user()->id)->first()){
            $delete = Bets::where('id',$deleteid)->where('user_id',Auth::user()->id)->first();
            $delete->delete();
            return response()->json([
                'success'=>1,
                'message'=>'Bet deleted from betslip'
            ]);
       }
       else{
           return redirect()->back();
       }
    }
}
}