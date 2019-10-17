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

Auth::routes(['verify' => true]);
// Route::resource('/users', 'UserController');
// Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');

//Route for admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group( function(){
    // Route::get('/', 'HomeController@index')->name('home');
    // Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});
// Route::group(['prefix' => 'admin','namespace'=>'Admin','name'=>'admin.'], function(){
//     // Route::group(['middleware' => ['admin']], function(){
//         // Route::get('/dashboard', 'admin\AdminController@index');
//
//         Route::resource('/users','UserController',['except'=>['show','create','store']]);
//     // });
// });
