<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name'=>'required',
            'username'=>'required|max:255|min:3',
            'email'=> 'required|email',
            'password'=>'required|min:7'
        ]);


        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success','your account has been created');
    }
}
