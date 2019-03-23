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

Route::get('/', 'WebController@index')->name('web');

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::resource('/users', 'UsersController', ['except' => ['show']]);
    Route::resource('/menu', 'MenuController', ['except' => ['show', 'destroy']]);
    Route::resource('/home', 'HomeController', ['except' => ['show', 'destroy', 'create', 'store']]);
    Route::resource('/aboutus', 'AboutUsController', ['except' => ['show', 'destroy', 'create', 'store']]);
    Route::resource('/visi', 'VisiController', ['except' => [ 'store', 'show', 'destroy']]);

    // Misi Content
    Route::get('/misi/content', 'MisiController@createContent')->name('misi.create_content');
    Route::post('/misi/content', 'MisiController@storeContent')->name('misi.store_content');
    Route::get('/misi/{content}/edit_content', 'MisiController@editContent')->name('misi.edit_content');
    Route::put('/misi/edit_content/{content}', 'MisiController@updateContent')->name('misi.update_content');
    Route::delete('/misi/{content}', 'MisiController@destroyContent')->name('misi.destroy_content');

    Route::resource('/misi', 'MisiController', ['except' => ['show', 'destroy', 'create', 'store']]);

    // Product Content
    Route::get('/product/content', 'ProductController@createContent')->name('product.create_content');
    Route::post('/product/content', 'ProductController@storeContent')->name('product.store_content');
    Route::get('/product/{content}/edit_content', 'ProductController@editContent')->name('product.edit_content');
    Route::put('/product/edit_content/{content}', 'ProductController@updateContent')->name('product.update_content');
    Route::delete('/product/{content}', 'ProductController@destroyContent')->name('product.destroy_content');

    Route::resource('/product', 'ProductController', ['except' => ['show', 'destroy', 'create', 'store']]);

    Route::resource('/notice', 'NoticeController', ['except' => ['show', 'destroy', 'create', 'store']]);
    Route::resource('/photo', 'PhotoController', ['except' => ['show']]);
    Route::resource('/video', 'VideoController', ['except' => ['show']]);

    Route::resource('/contact', 'ContactController');


});

// get create diberi status 404
