<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('belal','class52Controller@belal');
//Route::get('belal','practiseController@methodName');
//Route::get('route1/{param1}/{param2}','practiseController@methodNameCheck');
  


 Route::get('route2/{param1}/{param2}','practiseController@methodNameCheck'); 


 
 Route::get('/welcome', function (){
 	return view('welcome');
 });
 Route::prefix('multi')->group(function(){
	Route::get('/index','mainController@indexMethod');
	Route::get('/blog','mainController@blogMethod');
	Route::get('/contact','mainController@contactMethod');
	Route::get('/portfolio','mainController@portfolioMethod');
	Route::get('/services','mainController@servicesMethod');
	 
});
 