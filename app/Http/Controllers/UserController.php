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
    //login function
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required','password'
            
        ]);
        $remember = $request->remember_me; 
        $remember_me = !empty ($remember)?true:false;
        if(auth()->attempt($formFields, $remember_me)){
            $user = auth()->user();
            $request->session()->regenerate();
            return redirect('/')->with('message','User Logged in succesfully');
        }
        return back()->withErrors(['logemail'=>'Invalid Credentials'])->onlyInput('logemail')->with('message','Invalid Credentials ');
        
    }
    //logout user
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out!');
    }
}
