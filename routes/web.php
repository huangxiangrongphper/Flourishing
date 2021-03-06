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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/report', function () {
    return 'Report page';
});

Route::get('/about', function () {
    return 'About page';
});

Route::resource('shop','ShopController');

Route::resource('pay','PayController');

Route::resource('user','UseoController');

Route::get('/about1', function () {
    return 'About1 page';
});

Route::get('/github', function () {
    return 'github page';
});

Route::get('/new', function () {
    return 'new page';
});


