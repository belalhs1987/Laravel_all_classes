<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function hotelMethod(){
    	return view('frontend/hotel');
    }
    public function indexMethod(){
    	return view('frontend/index');
    }
}
