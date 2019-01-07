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



// EMP table task 

Route::get('get_employees1', 'EmployeesController@getDataAsEmployeeCanBeManager');

Route::get('get_employees2', 'EmployeesController@getData');

// Login Form task 

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/check_session', 'SessionController@checkSession');

Route::get('/remove_session', 'SessionController@removeSession')->name('remove_session');