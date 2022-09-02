<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

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
}
