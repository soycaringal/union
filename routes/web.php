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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'ProfilesController@index');
Route::get('/minutes', 'ProfilesController@minutes');
Route::get('/memos', 'ProfilesController@memos');
Route::get('/cases', 'ProfilesController@cases');
Route::post('/createMinute', 'ProfilesController@createMinute');
Route::post('/createMemo', 'ProfilesController@createMemo');

Route::resource('profiles', 'ProfilesController');
