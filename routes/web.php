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

Route::get('/', 'BaseController@getIndex');

Auth::routes();

Route::get('contact', 'MessageController@getIndex');

Route::get('contact_form', 'MessageFormController@getIndex');

Route::get('notes', 'NoteController@getAll');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('notes/{id}', 'NoteController@getOne');

Route::get('/{url}', 'PageController@getIndex');//always at the end(!!)
