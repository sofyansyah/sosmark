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

Route::get('/autofollow', function () {
    return view('autofollow');
});
Route::get('/following', function () {
    return view('following');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/', 'PostController@index');
Route::post('postfotoalbum', 'PostController@postfotoalbum');
Route::post('postalbum', 'PostController@postalbum');

Route::post('postfotosingle', 'PostController@postfotosingle');
Route::post('postsingle', 'PostController@postsingle');
Route::get('postsingle/hapus/{id}', 'PostController@hapussingle');
Route::post('postsingle/edit/{id}', 'PostController@editsingle');
