<?php

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
Route::group(['namespace' => 'user'], function () {
    Route::resource('index', 'IndexController');
});
// Route::get('/', function () {
//     return view('user.product');
// });

// Route::get('login', function () {
//     return view('user.product');
// });

// Route::get('/login', function () {
//     return view('user.login');
// });

// Route::get('/shop', function () {
//     return view('user.shop');
// });

