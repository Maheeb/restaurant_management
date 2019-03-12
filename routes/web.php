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
Route::get('/',[
    'uses'=>'CookeryController@index',
    'as'=>'index'
    ]);
Route::get('/blog',[
    'uses'=>'CookeryController@blog',
    'as'=>'blog'
]);
Route::get('/contact',[
    'uses'=>'CookeryController@contact',
    'as'=>'contact'
]);

Route::get('/events',[
    'uses'=>'CookeryController@events',
    'as'=>'events'
]);
Route::get('/menu',[
    'uses'=>'CookeryController@menu',
    'as'=>'menu'
]);
Route::post('/contact/success', [
    'uses' => 'CookeryController@jn',
    'as'   => 'join.sucs'
]);
Route::get('/single/{id}',[
    'uses'=>'CookeryController@single',
    'as'=>'single'
]);
Route::post('/single/{id}/success', [
    'uses' => 'CookeryController@com',
    'as'   => 'com.sucs'
]);
Auth::routes();

Route::group(['middleware' => 'auth'], function() {
// lots of routes that require auth middleware
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::resource('/admin/posts','PostController');

});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');