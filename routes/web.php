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


Route::get('showrepairlist', function () {
    return view('showrepairlist',['items' => [
        [
            'title' => '朱小玲',
            'time' => '1 week ago',
            'sub' => '冷氣壞掉，常常發出不明的聲音還有奇怪的味道',
            'dis' => '中大型電器',
        ],
        [
            'title' => '張小瑋',
            'time' => '3 days ago',
            'sub' => '淨水器似乎沒有正常的淨水',
            'dis' => '小型電器',
        ],
        [
            'title' => '陳小民',
            'time' => '2 hours ago',
            'sub' => '洗衣機發出極大的聲響，常常在奇怪的時間停止',
            'dis' => '大型電器',
        ],
    ]]);
})->name('showrepairlist');


Route::post('repair', function () {
    return redirect()->back();
})->name('repair:new');

//
//Route::post('showrepairlist', function () {
//    return redirect()->back();
//})->name('showrepairlist:new');


Route::get('/', function () {
    \Mail::to('greynia@abc.com')->send(new \App\Mail\FirstMail);
    return view('login');
});
