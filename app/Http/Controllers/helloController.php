<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function index()
    {
        return view('calc');
    }

      
    // 
    // public function add (Request $reques){
    //  $num1=$reques->number1; echo "<br/>";
    //  $num2=$reques->number2;
    //  $num3=$num1+$num2;
    //  echo $num3;
    // }

    public function add (Request $request)
    {
        $sum=$request->number1+$request->number2;
        return view('sum',['resul'=>$sum]);
    }

   
}
