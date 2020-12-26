<?php

use RealRashid\SweetAlert\Facades\Alert;
//Use Alert;
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
//    return view('login');
//});

Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin')->name('post.login');
Route::get('registration', 'AuthController@registration')->name('registration');
Route::post('post-registration', 'AuthController@postRegistration')->name('post.registration');
Route::get('dashboard', 'AuthController@dashboard')->middleware('auth')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('main', 'AuthController@main')->name('main');

Route::get('/', function () {
    \Mail::to('greynia@abc.com')->send(new \App\Mail\FirstMail);
    return view('login');
});
