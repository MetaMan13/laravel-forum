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

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    // PROFILE ROUTES
    Route::get('/profile', 'App\Http\Controllers\ProfilesController@index')->name('profile');
    Route::put('/profile', 'App\Http\Controllers\ProfilesController@save');
    Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@show');
});

require __DIR__.'/auth.php';
