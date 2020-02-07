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
Route::get('/admin', function () {
    return view('vendor.index');
});
Route::get('/about', function () {
    return view('vendor.about');
});
Route::get('/tour', function () {
    return view('vendor.tour');
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
Route::get('/place', function () {
    return view('vendor.place');
});

Route::get('/detail_package', function () {
    return view('vendor.detail_package');
});

Route::get('/customize_packages', function () {
    return view('vendor.customize_packages');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//for roles and permission
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});
Route::get('/getCity', 'ClientController@getCity')->name('city');
Route::resources([
    'guide'=>'GuideController',
        'client'=>'ClientController'
]
);
