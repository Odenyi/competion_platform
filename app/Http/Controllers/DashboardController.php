<?php

namespace App\Http\Controllers;

use App\Models\UserAccounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //Show dashboard items
    public function index(){
        
        $useraccount = UserAccounts::where('user_id',Auth::user()->id)->get();
        return view('dashboard',compact( 'useraccount'));
    }

    public function update(Request $request)
{
     $this->validate($request, [
        'amount' => 'required'
    ]);
    // Create Post
    $account = UserAccounts::find(Auth::user()->id);
    $account->amount += $request->input('depositamount');
    $account->update();

    return redirect('/')->with('success', 'Post Updated');
}

}
