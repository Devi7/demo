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

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
//    Route::get('dashboard', 'Admin\AdminController@index');

    // [...] other routes

    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'Admin\TagCrudController');
    CRUD::resource('user', 'UserCrudController');
});