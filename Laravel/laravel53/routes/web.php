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

//Route::get('/', function () {
//    $users = \App\User::paginate(5);
//    return view('welcome',compact('users'));
//});

//Auth::loginUsingId(2);
//Route::get('/',function(){
//    return Auth::user()->notifications;
//});
//Route::delete('user/notification',function(){
//    Auth::user()->unreadNotifications->markAsRead();
//    return redirect()->back();
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
