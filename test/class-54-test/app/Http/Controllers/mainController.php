<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function indexMethod(){
    	return view('frontend/index');
    }
     public function blogMethod(){
    	return view('frontend/blog');
    }
     public function contactMethod(){
    	return view('frontend/contact');
    }
     public function portfolioMethod(){
    	return view('frontend/portfolio');
    }
     public function servicesMethod(){
    	return view('frontend/services');
    }
}
