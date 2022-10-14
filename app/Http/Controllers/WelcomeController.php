<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    //show welcome page
    public function index()
    { if(Auth::check()){
        $bets = Bets::where('user_id',Auth::user()->id)->get();
        return view('welcome',compact('bets'));
        }
        else{
            return view('welcome');
        }
    }
}
