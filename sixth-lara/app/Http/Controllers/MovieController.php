<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController extends Controller
{
    public function show(){
        $data = movie::all();
        return view('index', compact('data'));
    }

    public function  added(Request $request){
        $add = new movie();
        $add->movie_url = $request->input('url');
        $add->movie_name = $request->input('name');
        $add->movie_description = $request->input('description');
        $add->movie_gener = $request->input('gener');
        $add->save();
        return redirect()->back();
    }

    public function showin()
    {
        $showinT = movie::all();
        return view('admin', compact('showinT'));
    }

    public function viewUpdate($id){
        $update = movie::find($id);
        return view('update', compact('update'));
    }

    public function update(Request $request, $id){
        $add =  movie::find($id);
        $add->movie_url = $request->input('url');
        $add->movie_name = $request->input('name');
        $add->movie_description = $request->input('description');
        $add->movie_gener = $request->input('gener');
        $add->update();
        return redirect('admin');
    }

    public function delete($id){
        $delete =  movie::find($id);
        $delete->delete();
        return redirect('admin');
    }
}