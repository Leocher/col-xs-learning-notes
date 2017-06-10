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

Route::prefix('admin')->middleware('admin')->name('dashboard')->get('/', function () {
    return view('welcome');
});

Route::get('posts/{post}','PostController@show');

Route::get('/',function(){
    $posts = \App\Post::all();
    return $posts->map->title;
});
