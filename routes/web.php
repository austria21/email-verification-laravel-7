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
    return view('welcome');
});

Route::get('login','AuthController@index')->name('login');
Route::post('post-login','AuthController@postLogin')->name('login.post');
Route::get('registration', 'AuthController@registration')->name('register');
Route::post('post-registration', 'AuthController@postRegistration')->name('register.post');
Route::get('logout', 'AuthController@logout')->name('logout');


/* New Added Routes */
Route::get('dashboard', 'AuthController@dashboard')->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', 'AuthController@verifyAccount')->name('user.verify'); 
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
