<?php

namespace App\Http\Controllers\frontend;

use App\Models\Bets;
use App\Models\PlacedBets;
use App\Models\UserAccounts;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\VirtualWallet;
use Illuminate\Support\Facades\Auth;

class PlacedbetController extends Controller
{
    //
    public function save(Request $request){
      
        $amount = $request->input('amount');
        
        $amountreceivable = $request->input ('amountrecievable');
      
        // dd($amountreceivable);

       

        $user_id = Auth::user()->id;
        if(Auth::check()){
             //  create the group bet by user
          

            
            $betslips= Bets::where('user_id',$user_id)->get();
            if($amountreceivable >0){
            if(UserAccounts::where('user_id',$user_id)->where('amount','>=',$amount)->first()){
                $useraccount = UserAccounts::where('user_id',$user_id)->where('amount','>=',$amount)->first();
                $reduceamount = $useraccount ->amount - $amount;
                $useraccount->amount = $reduceamount;
                $useraccount->update();

                // create competition
                foreach($betslips as $betslip){
                $competition = new Competition();
                $competition->home_team = $betslip->home_team;
                $competition->away_team = $betslip->away_team;
                $competition->odd = $betslip->odds;
                $competition->start_time = '2';
                $competition->end_time= '4';

                $competition->save();

                $competition->id;
                
                $virtualwallet = new VirtualWallet();
                $virtualwallet->competition_id = $competition->id;
                $virtualwallet->user_id = $betslip->user_id;
                $virtualwallet->bet_type = $betslip->bet_type;
                $virtualwallet->amount = $amount;
                $virtualwallet->save();
                


                }   
                // create Virtual wallet
               
              

                $betslips = Bets::where('user_id',$user_id)->get();
                Bets::destroy($betslips);
                // return redirect('/')->with('message','Your bet has been placed successfully');
                
                return response()->json([
                    'success' => true,
                    'message' => 'Bet added to Competition'
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
