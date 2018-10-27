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
  
 Route::prefix('pref')->group(function(){
	Route::get('/admin','class52Controller@belal');
	Route::get('/customer','class52Controller@belal2');
});
 Route::namespace('pref')->group(function(){
	Route::get('/admin','namespaceController@belal');
	Route::get('/customer','namespaceController@belal2');
});

 Route::group(['prefix'=>'user','namespace'=>'user','middleware'=>'userCheck'],function(){
 	Route::get('dashboard','userController@userMethod1');
 	Route::get('product','userController@userMethod2');
 });

 Route::get('error',function(){
 	abort(404);
 });