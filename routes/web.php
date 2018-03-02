<?php

use App\User;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/user/{id}', function($id) {
//  return 'User '.$id;
//});
Route::group(['domain' => 'www.laravel.com'], function () {
    Auth::routes();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['namespace' => 'Admin', 'domain' => 'admin.laravel.com'], function () {
    Route::get('/home', 'HomeController@index');
});