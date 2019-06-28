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

Route::get('/', 'AdminsController@login');

Route::get('/register', 'AdminsController@register');

Route::post('/register-new', 'AdminsController@registerNew');

Route::post('/login-check', 'AdminsController@loginCheck');

Route::get('/logout', 'AdminsController@logout');

Route::get('/home', 'CarsController@getAll');

Route::get('/new-car', function() {
    return view('new-car');
});

Route::post('/new-car-create', 'CarsController@newCar');