<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\UserAccounts;
use App\Models\VirtualWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    //
    public function index()
    {   $user_id = Auth::user()->id;
        $availablecompetition = Competition::whereDoesntHave('availableCompetition', function ($query) {
            $query->where('user_id',Auth::user()->id);
        })->WhereNull('status')->get();
              
        return view('frontend.Competition',compact('availablecompetition'));
    }
 
    // home team 
    public function betagainsthome(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $betagainstid= $request->input('betagainst_id');
            if(Competition::where('id',$betagainstid)->first()){
                $competition= Competition::where('id',$betagainstid)->first();
                if($competition->odd < 3){
                    $virtualwallet= VirtualWallet::where('competition_id',$betagainstid)->first();
                    $Useraccount = UserAccounts::where('user_id',$user_id)->first();
                    $useramount = $Useraccount->amount;

                    $amount = $virtualwallet->amount;
                    if($useramount >= $amount){
                    // deduct from user accounts
                    $deductedamount =$useramount - $amount;
                    $Useraccount->amount = $deductedamount;
                    $Useraccount ->update();


                    //add to virtual wallet
                    $updatevirtualwallet= new VirtualWallet();
                    $updatevirtualwallet->competition_id = $betagainstid;
                    $updatevirtualwallet->user_id = $user_id;
                    $updatevirtualwallet->bet_type = 1;
                    $updatevirtualwallet->amount =$amount;
                    $updatevirtualwallet->save();

                        // increament odd 
                    $odd = $competition->odd + 1;
                    $competition->odd = $odd;
                    $competition->update();
                    // check game completion
                    $completeodd =  $competition->odd;
                    if( $completeodd == 3){
                        $competition->status = 'completed';
                        $competition->update();
                    }

                    

                   


                    
                    
                    return response()->json([
                        'success'=>1,
                        'message'=>'Bet Home succeded'
                    ]);
                     }
                    else{
                        return response()->json([
                            'success'=>1,
                            'message'=>'Bet not placed'
                        ]);

                     }
                }
                else{
                    return redirect()->back();
                }
               
           }
           else{
               return redirect()->back();
           }
        }
       
        
    }

    // bet draw
    public function betagainstdraw(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $betagainstid= $request->input('betagainst_id');
            if(Competition::where('id',$betagainstid)->first()){
                $competition= Competition::where('id',$betagainstid)->first();
                if($competition->odd < 3){
                    $virtualwallet= VirtualWallet::where('competition_id',$betagainstid)->first();
                    $Useraccount = UserAccounts::where('user_id',$user_id)->first();
                    $useramount = $Useraccount->amount;

                    $amount = $virtualwallet->amount;
                    if($useramount >= $amount){
                    // deduct from user accounts
                    $deductedamount =$useramount - $amount;
                    $Useraccount->amount = $deductedamount;
                    $Useraccount ->update();


                    //add to virtual wallet
                    $updatevirtualwallet= new VirtualWallet();
                    $updatevirtualwallet->competition_id = $betagainstid;
                    $updatevirtualwallet->user_id = $user_id;
                    $updatevirtualwallet->bet_type = 0;
                    $updatevirtualwallet->amount =$amount;
                    $updatevirtualwallet->save();

                        // increament odd 
                    $odd = $competition->odd + 1;
                    $competition->odd = $odd;
                    $competition->update();

                    // check game completion
                    $completeodd =  $competition->odd;
                    if( $completeodd == 3){
                        $competition->status = 'completed';
                        $competition->update();
                    }


                    

                   


                    
                    
                    return response()->json([
                        'success'=>1,
                        'message'=>'Bet Draw succeded'
                    ]);
                     }
                    else{
                        return response()->json([
                            'success'=>1,
                            'message'=>'Bet not placed'
                        ]);

                     }
                }
                else{
                    return redirect()->back();
                }
               
           }
           else{
               return redirect()->back();
           }
        }
       
        
    }
    // bet away
    public function betagainstaway(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $betagainstid= $request->input('betagainst_id');
            if(Competition::where('id',$betagainstid)->first()){
                $competition= Competition::where('id',$betagainstid)->first();
                if($competition->odd < 3){
                    $virtualwallet= VirtualWallet::where('competition_id',$betagainstid)->first();
                    $Useraccount = UserAccounts::where('user_id',$user_id)->first();
                    $useramount = $Useraccount->amount;

                    $amount = $virtualwallet->amount;
                    if($useramount >= $amount){
                    // deduct from user accounts
                    $deductedamount =$useramount - $amount;
                    $Useraccount->amount = $deductedamount;
                    $Useraccount ->update();


                    //add to virtual wallet
                    $updatevirtualwallet= new VirtualWallet();
                    $updatevirtualwallet->competition_id = $betagainstid;
                    $updatevirtualwallet->user_id = $user_id;
                    $updatevirtualwallet->bet_type = 2;
                    $updatevirtualwallet->amount =$amount;
                    $updatevirtualwallet->save();

                        // increament odd 
                    $odd = $competition->odd + 1;
                    $competition->odd = $odd;
                    $competition->update();

                    // check game completion
                    $completeodd =  $competition->odd;
                    if( $completeodd == 3){
                        $competition->status = 'completed';
                        $competition->update();
                    }


                    

                   


                    
                    
                    return response()->json([
                        'success'=>1,
                        'message'=>'Bet Away succeded'
                    ]);
                     }
                    else{
                        return response()->json([
                            'success'=>1,
                            'message'=>'Bet not placed'
                        ]);

                     }
                }
                else{
                    return redirect()->back();
                }
               
           }
           else{
               return redirect()->back();
           }
        }
       
        
    }

}
