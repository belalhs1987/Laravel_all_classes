<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiseController extends Controller
{
   public function methodNameCheck($param1,$param2){
   	  $arr = ['a','b','c'];
    	return view('frontend.welcome',compact('param','arr'));
   }
}
