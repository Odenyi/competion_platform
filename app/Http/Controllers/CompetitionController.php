<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    //
    public function index()
    {  $availablecompetition = Competition::all();
              
        return view('frontend.Competition',compact('availablecompetition'));
    }
    public function books() {
    return $this->hasOne('App\Models\Book')->latest();
}

    public function betagainstdraw(Request $request)
    {
        if(Auth::check()){
            $betagainstid= $request->input('betitem_id');
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
