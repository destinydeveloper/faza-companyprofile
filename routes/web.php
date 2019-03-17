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

Route::get('/coba', function () {
    return view('index');
})->name('web');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('/users', 'UsersController');
});


Route::get('/admin/editor', function () {
    return view('admin.editors');
});


// Route::get('users/{id}', });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
