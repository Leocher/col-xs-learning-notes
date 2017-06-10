<?php
use Facades\App\Services\Weibo;
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

Route::get('/listen',function(){
    \App\Post::create(['title'=>'Title','body'=>'My Body']);
});

Route::prefix('admin')->middleware('admin')->name('dashboard')->get('/', function () {
    return view('welcome');
});

Route::resource('posts','PostController');

Route::get('/',function(){
    $posts = \App\Post::all();
    return $posts->map->title;
});

Route::get('/home',function(){
   return view('welcome');
});

Route::get('/email',function(){
   $email = new \App\Mail\LessonPublished(\App\User::first());
    Mail::to(\App\User::first())->send($email);
});

Route::get('/weibo',function(){
    Weibo::publish('这是一条微博');
});
