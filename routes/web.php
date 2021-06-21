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

// Route::get('/', 'BaseController@index');
Route::get('/', function() {
    return redirect('/login');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/main', 'BaseController@main');
Route::get('/payment', 'BaseController@payment');
Route::get('/bio', 'BaseController@bio');
Route::post('/input_bio', 'BaseController@store');
Route::get('/rules', 'BaseController@setting');
Route::get('/information', 'BaseController@information');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
