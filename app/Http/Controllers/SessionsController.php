<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Good bye !');
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate(); 
            return redirect('/')->with('success', 'welcome back');
        }

        return back()->withInput()->withErrors(['email'=>'Your Provided Credentials Could Not Be Verified']);
    }
}
