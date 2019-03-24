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

// Route::get('/', function () {
//     return view('factuur.overzicht');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/facturen','InvoiceController@index');
Route::get('/','InvoiceController@index');
Route::post('/facturen/create','InvoiceController@createInvoice')->name('facturen.create');
Route::get('/facturen/{factuurnummer}/edit','InvoiceController@edit')->name('facturen.edit');
Route::get('/facturen/{factuurnummer}/product/add','InvoiceController@addInvoiceProduct')->name('facturen.add_product'); //product toevoegen

Route::get('/downloadPDF/{factuurnummer}','InvoiceController@downloadPDF');

// Route::get('/facturen/pdf','InvoiceController@downloadPDF')->name('facturen.pdf');
Route::post('/product','ProductController@create')->name('product.create');
// Route::delete('/product/delete/{id}','ProductController@delete')->name('product.delete');
Route::get('/product','ProductController@index');
