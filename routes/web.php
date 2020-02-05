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

Auth::routes([ 'register' => false ]);

Route::view('/home', 'welcome');
Route::resource('employees', 'EmployeeController');
Route::resource('companies', 'CompanyController');

Route::view('/', 'welcome');
Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');