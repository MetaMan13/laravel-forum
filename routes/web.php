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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// PROFILE ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', 'App\Http\Controllers\ProfilesController@index')->name('profile');
    Route::patch('/profile', 'App\Http\Controllers\ProfilesController@update');
    Route::get('/profile/{user:nickname}', 'App\Http\Controllers\ProfilesController@show');
});

// POST ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/post', 'App\Http\Controllers\PostController@index');
    Route::get('/post/create', 'App\Http\Controllers\PostController@create');
    Route::post('/post', 'App\Http\Controllers\PostController@store');
    Route::get('/post/{post}', 'App\Http\Controllers\PostController@show');
    Route::patch('/post/{post}', 'App\Http\Controllers\PostController@update');
    Route::delete('/post/{post}', 'App\Http\Controllers\PostController@destroy');
    Route::get('/post/{post}/edit', 'App\Http\Controllers\PostController@edit');
});

// THEME ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::post('/theme', 'App\Http\Controllers\UserController@theme');
});
