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

Route::get('Users/Create', function () {
    return view('Users.Create');
});


Route::post('/Users/Create',['uses' => 'UserController@store', 'as' => 'Users.Store']);