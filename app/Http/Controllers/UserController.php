<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //create new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>['required','min:3'],
            'number'=>['required','min:3',Rule::unique('users','number')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6',
            
        ]);

        // encrypt password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);
        //login
        auth()->login($user);

        return redirect('/')->with('message','User created');

    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
            
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','User Logged in succesfully');
        }
        return back()->withErrors(['logemail'=>'Invalid Credentials'])->onlyInput('logemail');
    }
}
