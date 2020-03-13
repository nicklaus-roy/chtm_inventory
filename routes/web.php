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
})->name('login');

Route::post('/login', 'LoginController@store');

Route::middleware('auth')
	->group(function() {
		Route::get('/logout', 'LoginController@logout');

		Route::get('/equipment', 'EquipmentController@index');
		Route::get('/equipment/create', 'EquipmentController@create');
		Route::post('/equipment/store', 'EquipmentController@store');
        Route::get('/utensils', 'UtensilsController@index');
        Route::get('/utensils/create', 'UtensilsController@create');
        Route::post('/utensils/store', 'UtensilsController@store');
	});
