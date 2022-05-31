<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;

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

Route::post('loginuser','LoginController@login')->name('login');
Route::get('home','LoginController@index');

Route::get('/addclient','HeaderController@addclient');
Route::get('/logout','HeaderController@index');

Route::get('/invoicelist_gst_1819_fo','HomeController@invlistgst1819fo');
Route::get('/pending_invoice_fo_direct','HomeController@pending_invoice_fo');
Route::get('/invoice_generation_fo/{id}','HomeController@invoice_generation');
Route::post('invoice_genration_fo_insertdata','HomeController@invoice_generation_fo_insert')->name('invoice_genration_fo_insert');
Route::get('/setprintdiv_gst','HomeController@setprintdiv_gst');
Route::get('/invoicelist_gst_1819_fo_back','HomeController@invoicelist_gst_1819_fo_back');