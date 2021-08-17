<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/mabna', 'BuildingController@Index')->name('building.index');
Route::get('/mabna/data','DataController@buildings')->name('building.data');
Route::get('/mabna/create', 'BuildingController@Create')->name('building.create');
Route::post('/mabna/store', 'BuildingController@Store')->name('building.store');
Route::get('/mabna/edit/{building}','BuildingController@edit')->name('building.edit');
Route::put('/mabna/update/{building}', 'BuildingController@Update')->name('building.update');
Route::delete('/mabna/delete/{building}', 'BuildingController@Destroy')->name('building.destroy');