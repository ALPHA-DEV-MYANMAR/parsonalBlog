<?php

use Illuminate\Support\Facades\Route;

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


// UI
Route::get('/','App\Http\Controllers\UiController@index');

Route::get('/showpost','App\Http\Controllers\UiController@ShowPost');

Route::post('/like/{id}','App\Http\Controllers\LikeDislikeController@like');

Route::post('/dislike/{id}','App\Http\Controllers\LikeDislikeController@dislike');

Route::post('/comment/{id}','App\Http\Controllers\CommentController@comment');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','isadmin']],function(){
    Route::get('/admin','App\Http\Controllers\admin\AdminDashboardController@index');

    //User
    Route::get('/users','App\Http\Controllers\admin\UserController@index');
    Route::get('/users/{id}/edit','App\Http\Controllers\admin\UserController@edit');
    Route::post('/users/{id}/update','App\Http\Controllers\admin\UserController@update');
    Route::get('/users/{id}/delete','App\Http\Controllers\admin\UserController@delete');
    //Skill
    Route::resource('/skills','App\Http\Controllers\admin\SkilllController');
    //Post
    Route::resource('/posts','App\Http\Controllers\admin\PostController');


});