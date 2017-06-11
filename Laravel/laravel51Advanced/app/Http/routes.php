<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/other', function () {
    return view('other');
});

Auth::loginUsingId(3);
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
   Route::get('/users',function(){
       return 'only admin';
   }) ;
});

Route::get('/event', function () {
    $user = \App\User::find(1);
    event(new \App\Events\UserSignUp($user));
});
