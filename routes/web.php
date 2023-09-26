<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/perizinan', 'App\Http\Controllers\PerizinanController@index')->name('perizinan.index');
Route::post('/perizinan/store', 'App\Http\Controllers\PerizinanController@store')->name('perizinan.store');
Route::get('/perizinan/edit/{id}', 'App\Http\Controllers\PerizinanController@edit')->name('perizinan.edit');
Route::patch('/perizinan/update/{id}', 'App\Http\Controllers\PerizinanController@update')->name('perizinan.update');

Route::get('/perizinanlist', 'App\Http\Controllers\PerizinanController@show')->name('perizinan_list');

Route::get('/keterangan', 'App\Http\Controllers\KeteranganController@index')->name('keterangan.index');
Route::post('/keterangan/store', 'App\Http\Controllers\KeteranganController@store')->name('keterangan.store');
Route::get('/keterangan/edit/{id}', 'App\Http\Controllers\KeteranganController@edit')->name('keterangan.edit');
Route::patch('/keterangan/update/{id}', 'App\Http\Controllers\KeteranganController@update')->name('keterangan.update');
Route::delete('/keterangan/destroy/{id}', 'App\Http\Controllers\KeteranganController@destroy')->name('keterangan.destroy');

Route::get('/keteranganlist', 'App\Http\Controllers\KeteranganController@show')->name('keterangan_list');
