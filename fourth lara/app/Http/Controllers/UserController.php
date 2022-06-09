<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getDataUser(){
        $users = User::all();
        return view('home', compact('users'));
    }

    public function update()
    {
        $student = User::find(1);
        $student->name = 'hosam';
        $student->email = 'hosam@mail.com';
        $student->password = '39602580';
        $student->update();
        return view('home');
    }

    public function delete(){
        $item = User::find(1);
        $item->delete();
    }

    public function insert(){
        $item = new User();
        $item->name = "moaeid";
        $item->email = "moaeid@mail.com";
        $item->password = "123456";
        $item->save();
    }

    public function welcome(){
        return view('/welcome');
    }
}
