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

Route::get('/blog', function(){
    return view('dashboard');
});

Route::resource('/blog/awal', 'BlogController');
Route::get('api/blog', 'BlogController@api')->name('api.blog');