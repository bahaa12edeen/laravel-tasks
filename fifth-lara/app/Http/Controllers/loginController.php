<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function viewRegister(){
        return view('register');
    }

    public function viewLogin(){
        return view('login');
    }

    public function viewDashboard(){
        return view('dashboard');
    }

    public function viewShop(){
        return view('shop');
    }

    public function form_validate(Request $request){
        $request->validate([
            'firstName'=>'required|alpha',
            'lastName'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'confirmPassword'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'city'=>'required|alpha',
            'phone'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();
    }
}