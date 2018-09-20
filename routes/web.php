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

Auth::routes();
Route::get('/create', 'PostsController@create');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/posts', 'PostsController');
//Route::get('/', 'PagesController@index');
Route::post('upload-file', ['as'=>'upload-file','uses'=>'CloudderController@uploadFile']);
Route::get('get-file', 'CloudderController@getFile');