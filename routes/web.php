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

Route::get('/coba', 'WebController@index')->name('web');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('/users', 'UsersController', ['except' => ['show']]);
    Route::resource('/menu', 'MenuController', ['except' => ['show', 'store', 'destroy']]);
    Route::resource('/home', 'HomeController', ['except' => ['show', 'store', 'destroy', 'create', 'store']]);
    Route::resource('/aboutus', 'AboutUsController', ['except' => ['show', 'destroy', 'create', 'store']]);
    Route::resource('/visi', 'VisiController', ['except' => ['show', 'destroy', 'create', 'store']]);
    Route::get('/misi/content', 'MisiController@createContent')->name('misi.create_content');
    Route::post('/misi/content', 'MisiController@storeContent')->name('misi.store_content');
    Route::get('/misi/{content}/edit_content', 'MisiController@editContent')->name('misi.edit_content');
    Route::put('/misi/edit_content/{content}', 'MisiController@updateContent')->name('misi.update_content');
    Route::delete('/misi/{content}', 'MisiController@destroyContent')->name('misi.destroy_content');
    Route::resource('/misi', 'MisiController', ['except' => ['show', 'destroy', 'create', 'store']]);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/admin/editor', function () {
    //     return view('admin.editors');
    // });

    // Route::get('users/{id}', });
