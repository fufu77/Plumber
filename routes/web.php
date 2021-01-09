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
Route::get('worker', 'AuthController@worker')->name('worker');

Route::get('repair', function () {
    return view('repair');
})->name('repair');

Route::get('repairlist', function () {
    return view('repairlist', ['items' => [
        [
            'title' => '印表機',
            'sub' => 'HP M632 不能印黑白',
            'time' => '10 minutes ago',
            'place' => '台中西屯區',
        ],
        [
            'title' => '電視機',
            'sub' => '沒有聲音',
            'time' => '1 days ago',
            'place' => '台中北屯區',
        ],
        [
            'title' => '投影機',
            'sub' => '沒有畫面',
            'time' => '5 days ago',
            'place' => '台中西屯區',
        ],
    ]]);
})->name('repairlist');

Route::get('repairlist/{id}', function ($id) {
    $array = [
        [
            'title' => '印表機',
            'sub' => 'HP M632 不能印黑白',
            'time' => '10 minutes ago',
            'place' => '台中西屯區',
        ],
        [
            'title' => '電視機',
            'sub' => '沒有聲音',
            'time' => '1 days ago',
            'place' => '台中北屯區',
        ],
        [
            'title' => '投影機',
            'sub' => '沒有畫面',
            'time' => '5 days ago',
            'place' => '台中西屯區',
        ],
    ];

    return view('userrepairlist', ['array' => $array[$id]]);
})->name('userrepairlist');

Route::get('showrepairlist', function () {
    return view('showrepairlist');
})->name('showrepairlist');


Route::post('userrepairlist', function () {
    return redirect()->back();
})->name('repair:new');


Route::post('showrepairlist', function () {
    return redirect()->back();
})->name('showrepairlist:new');


Route::get('/', function () {
    \Mail::to('greynia@abc.com')->send(new \App\Mail\FirstMail);
    return view('login');
});