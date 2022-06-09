<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    public function index(){
        $data = Candy::all();
        return view('shop', compact('data'));
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $data = Candy::find($id);
        $data->delete();
        return redirect();
    }
}
