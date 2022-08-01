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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'ReviewController@top');
    Route::get('/index', 'ReviewController@index');
    Route::post('/reviews', 'ReviewController@store');
    Route::get('/reviews/create', 'ReviewController@create');
    Route::get('/reviews/{review}', 'ReviewController@show');
    Route::put('/reviews/{review}', 'ReviewController@update');
    Route::delete('/reviews/{review}', 'ReviewController@delete');
    Route::get('/reviews/{review}/edit', 'ReviewController@edit');
    Route::get('/categories/{category}', 'CategoryController@index');
    Route::get('/user', 'UserController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
