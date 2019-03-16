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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/editor', function () {
    return view('admin.editors');
});


// Route::get('users/{id}', });
