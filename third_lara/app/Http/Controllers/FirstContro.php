<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstContro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function GetVal($id)
    // {
    //     return 
    // }

    public function GetVal()
    {
        $img = ['1'=>'https://cdnprod.mafretailproxy.com/sys-master-root/h2c/h8d/9645695631390/8531_main.jpg_1700Wx1700H', '2'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxt18imYWcm9V1qOwjlfPi9V8umaKQ3ju6NA&usqp=CAU', '3'=>'https://m.media-amazon.com/images/I/71RNc7ru+nL._SX425_.jpg', '4'=>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/d1-81olored-candies-on-pastel-pink-background-royalty-free-image-1644956455.jpg'];
        $name = ['1'=>'Bounty', '2'=>'Snickers', '3'=>'MilkWay', '4'=>'M&M'];

        return view('home', compact('img', 'name'));
    }
}
