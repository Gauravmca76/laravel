<?php

use App\Http\Controllers\SalariedController;
use App\Http\Controllers\ItemController;

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

Route::get('export', 'SalariedController@export')->name('export');  
Route::get('importExportView', 'SalariedController@importExportView');  
Route::post('import', 'SalariedController@import')->name('import');