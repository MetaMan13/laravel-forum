<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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
    return view('home', [
        'posts' => App\Models\Post::whereIn('user_id', auth()->user()->follows->pluck('follow_id'))->with('likes', 'comments', 'dislikes', 'user')->simplePaginate(30)
    ]);
})->middleware(['auth'])->name('home');

// PROFILE ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', 'App\Http\Controllers\ProfilesController@index');
    Route::patch('/profile', 'App\Http\Controllers\ProfilesController@update');
    Route::get('/profile/{user:nickname}', 'App\Http\Controllers\ProfilesController@show');
    Route::get('/profile/{user:nickname}/edit', 'App\Http\Controllers\ProfilesController@edit');
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

// LIKE ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::post('/like', 'App\Http\Controllers\LikeController@create');
});

// DISLIKE ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::post('/dislike', 'App\Http\Controllers\DislikeController@create');
});

// FOLLOW ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::post('/follow', 'App\Http\Controllers\FollowController@create');
    Route::post('/unfollow', 'App\Http\Controllers\FollowController@destroy');
});

// NOTIFICATIONS ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/notifications', 'App\Http\Controllers\UserNotificationsController@show');
});

// COUNTRY ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/country', 'App\Http\Controllers\CountryController@index');
});

// GROUP ROUTES GROUP
Route::group(['middleware' => 'auth'], function(){
    Route::get('/group', 'App\Http\Controllers\GroupController@index');
});
