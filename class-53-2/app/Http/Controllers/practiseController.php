<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiseController extends Controller
{
   public function methodName($param){
   	 //echo $param;
    	return view('welcome');
   }
}
