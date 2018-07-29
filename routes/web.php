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
    return view('dashboard');
});

Route::get('/profile','ProfileController@index');

Route::get('/customer','CustomerController@index');

Route::get('/invoice','InvoiceController@index');
Route::get('/invoice/detail','InvoiceController@detail');
Route::get('/invoice/print','InvoiceController@print');

Route::get('/po','POController@index')->name('po-index');
Route::get('/po/create','POController@create')->name('po-create');
Route::post('/po/post','POController@post')->name('po-post');
Route::get('/po/edit','POController@edit')->name('po-edit');
Route::post('/po/detail','POController@deatil')->name('po-detail');