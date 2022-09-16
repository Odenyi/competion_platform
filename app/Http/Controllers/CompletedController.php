<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompletedController extends Controller
{
    //show completed competition
    public function index()
    {
        $availablecompetition = Competition::where('odd',3)->get();
              
        return view('frontend.Completed',compact('availablecompetition'));
    }

}
