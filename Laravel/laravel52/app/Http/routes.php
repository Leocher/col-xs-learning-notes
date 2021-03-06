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

Route::get('/user/{user}', function (\App\User $user) {
    return $user;
})->middleware('throttle:3');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['web']],function(){
    Route::get('/',function(){
        return view('welcome');
    });
});

Route::group(['middleware'=>['api']],function(){
    //
});

Route::get('/admin/login', 'AdminAuth\AuthController@showLoginForm');
Route::post('/admin/login', 'AdminAuth\AuthController@login');
Route::get('/admin/logout', 'AdminAuth\AuthController@logout');
Route::get('/admin/register', 'AdminAuth\AuthController@showRegistrationForm');
Route::post('/admin/register', 'AdminAuth\AuthController@register');
Route::get('/admin', 'AdminController@index');
