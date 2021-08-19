<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/mabna', 'MabnaController@Index')->name('mabna.index');
Route::get('/mabna/data','DataController@buildings')->name('mabna.data');
Route::get('/mabna/create', 'MabnaController@Create')->name('mabna.create');
Route::post('/mabna/store', 'MabnaController@Store')->name('mabna.store');
Route::get('/mabna/edit/{mabna}','MabnaController@edit')->name('mabna.edit');
Route::put('/mabna/update/{mabna}', 'MabnaController@Update')->name('mabna.update');
Route::delete('/mabna/delete/{mabna}', 'MabnaController@Destroy')->name('mabna.destroy');

Route::get('/pembinaan', 'PembinaanController@Index')->name('pembinaan.index');
Route::get('/pembinaan/data','DataController@pembinaan')->name('pembinaan.data');
Route::get('/pembinaan/create', 'PembinaanController@Create')->name('pembinaan.create');
Route::post('/pembinaan/store', 'PembinaanController@Store')->name('pembinaan.store');
Route::delete('/pembinaan/delete/{pembinaan}', 'PembinaanController@Destroy')->name('pembinaan.destroy');
Route::get('/pembinaan/edit/{pembinaan}', 'PembinaanController@Edit')->name('pembinaan.edit');    
Route::put('/pembinaan/update/{pembinaan}', 'PembinaanController@Update')->name('pembinaan.update');

Route::get('/dosen', 'DosenController@Index')->name('dosen.index');
Route::get('/dosen/data','DataController@dosen')->name('dosen.data');
Route::get('/dosen/excel', 'DosenController@exportExcel')->name('export.excel');
Route::get('/dosen/pdf', 'DosenController@pdf')->name('export.pdf');
Route::get('/dosen/create', 'DosenController@Create')->name('dosen.create');
Route::post('/dosen/store', 'DosenController@Store')->name('dosen.store');
Route::get('/dosen/edit/{dosen}', 'DosenController@Edit')->name('dosen.edit');
Route::put('/dosen/update/{dosen}', 'DosenController@Update')->name('dosen.update');
Route::delete('/dosen/delete/{dosen}', 'DosenController@Destroy')->name('dosen.destroy');