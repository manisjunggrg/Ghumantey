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
    return view('vendor.index');
});
Route::get('/about', function () {
    return view('vendor.about');
});
Route::get('/tour', function () {
    return view('vendor.tour');
});
Route::get('/hotel', function () {
    return view('vendor.hotel');
});
Route::get('/blog', function () {
    return view('vendor.blog-single');
});
Route::get('/contact', function () {
    return view('vendor.contact');
});
Route::get('/index', function () {
    return view('vendor.index');
});
Route::get('/useradmin', function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
