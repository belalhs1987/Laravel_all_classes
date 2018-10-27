<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function userMethod1(){
    	return view('user/dashboard');
    }
    public function userMethod2(){
    	return view('product');
    }
}
