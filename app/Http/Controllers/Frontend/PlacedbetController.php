<?php

namespace App\Http\Controllers\frontend;

use App\Models\Bets;
use App\Models\PlacedBets;
use App\Models\UserAccounts;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Models\Competition;
use Illuminate\Support\Facades\Auth;

class PlacedbetController extends Controller
{
    //
    public function save(Request $request){
      
        $amount = $request->input('amount');
        $betpeerfee = $request->input('betpeerfee');
        $amountreceivable = $request->input ('amountrecievable');
      
        // dd($amountreceivable);

       

        $user_id = Auth::user()->id;
        if(Auth::check()){
             //  create the group bet by user
          

            
            $placedbets = Bets::where('user_id',$user_id)->get();
            if($amountreceivable >0){
            if(UserAccounts::where('user_id',$user_id)->where('amount','>=',$amount)->first()){
                $useraccount = UserAccounts::where('user_id',$user_id)->where('amount','>=',$amount)->first();
                $reduceamount = $useraccount ->amount - $amount;
                $useraccount->amount = $reduceamount;
                $useraccount->update();
                
                $competition = new Competition();
                $competition->recievable_amount = $amountreceivable;
                $competition->platformfee = $betpeerfee;
                $competition->save();

                $competition->id;
                // create betsplaced
                $multibet = new PlacedBets();

                foreach ($placedbets as $placedbet) {
                    $multibet = new PlacedBets();
                    $multibet->groupbet_id = $usergroupbets->id;
                    $multibet->user_id = $placedbet->user_id;
                    $multibet->game_id = $placedbet->game_id;
                    $multibet->home_team = $placedbet->home_team;
                    $multibet->away_team = $placedbet->away_team;
                    $multibet->bet_type = $placedbet->bet_type;
                    $multibet->odds = $placedbet->odds;
                    $multibet->save();


                    
                }

                $placedbets = Bets::where('user_id',$user_id)->get();
                Bets::destroy($placedbets);
                // return redirect('/')->with('message','Your bet has been placed successfully');
                
                return response()->json([
                    'success' => true,
                    'message' => 'Bet added to placed'
                ]);
            }
            else{
            return response()->json([
                'success' => true,
                'message' => 'insufficient funds please load yor account'
            ]);
        }
    }else{
       
            return response()->json([
                'success' => true,
                'message' => 'please select a team to bet'
            ]);

    }
           
        }

    }
}
