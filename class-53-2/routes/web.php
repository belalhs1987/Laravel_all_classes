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

 Route::get('/', function () {
     return view('welcome');
 }); ddd fd3ewdfe err3e ewed3e ewerfre r3e eerewdsww

Route::get('controller_check/{param}','practiseController@methodName');
Route::get('controller_check2/{data}','practiceController2@methodName')->
where(['data'=>'[0-9]+']);

Route::get('multiple/{data1}/{data2}','practiceController3@methodName')->
where(['data1'=>'[0-9]+','data2'=>'[A-Za-z]+']);

   Route::get('/','homeController@indexMethod')->name('index') 

    Route::get('/hotel','homeController@hotelMethod');
    