<?php

namespace App\Http\Controllers;

use App\Models\FinishedBets_Wallet;
use App\Models\IncompleteBets;
use App\Models\IncompleteBets_wallet;
use App\Models\UserAccounts;
use App\Models\VirtualWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //Show dashboard items
    public function index(){
        
        $useraccount = UserAccounts::where('user_id',Auth::user()->id)->get();
        $userincompletebets = IncompleteBets_wallet::where('user_id',Auth::user()->id)->get();
        $userclosedbets = FinishedBets_Wallet::where('user_id',Auth::user()->id)->get();
        $userprogressbets = VirtualWallet::where('user_id',Auth::user()->id)->get();
        return view('dashboard',compact( 'useraccount','userclosedbets','userincompletebets','userprogressbets'));
    }

    public function update(Request $request)
{
    
    // Create Post
    $account = UserAccounts::where('user_id',Auth::user()->id)->first();
    $amount = $request->input('depositamount') + $account->amount;
    $account->amount = $amount;
    $account->update();

    return redirect('/dashboard')->with('message', 'Amount Deposited');
}
public function withdraw(Request $request){
    $account = UserAccounts::where('user_id',Auth::user()->id)->first();
    if($account->amount >= $request->input('withdrawamount')){
        $amount = $account->amount - $request->input('withdrawamount');
        $account->amount = $amount;
        $account->update();
        return redirect('/dashboard')->with('message', 'Amount withdrawn');
    }
    

}

}
