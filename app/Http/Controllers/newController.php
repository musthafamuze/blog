<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function multi(Request $request)
    {
    $multiple=$request->number1*$request->number2;
    return view('multi',['result'=>$multiple]);
    }
     public function index()
    {
        return view('multiple');
    }
    

}
