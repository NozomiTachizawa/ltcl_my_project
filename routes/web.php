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
    Route::get('/index', 'ReviewController@index');
    Route::post('/reviews', 'ReviewController@store');
    Route::get('/reviews/create', 'ReviewController@create');
    Route::get('/reviews/like/{id}', 'ReviewController@like')->name('review.like');
    Route::get('/reviews/unlike/{id}', 'ReviewController@unlike')->name('review.unlike');
    Route::get('/reviews/{review}', 'ReviewController@show');
    Route::put('/reviews/{review}', 'ReviewController@update');
    Route::delete('/reviews/{review}', 'ReviewController@delete');
    Route::get('/reviews/{review}/edit', 'ReviewController@edit');
    Route::get('/categories/{category}', 'CategoryController@index');
    Route::get('/user', 'UserController@index');
    Route::get('/user/liked', 'UserController@liked_index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
