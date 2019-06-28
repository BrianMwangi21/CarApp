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

Route::post('/register-new', 'AdminController@registerNew');

Route::post('/login-check', 'AdminController@loginCheck');

Route::get('/logout', 'AdminController@logout');
