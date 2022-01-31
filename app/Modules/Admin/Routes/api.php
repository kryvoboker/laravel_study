<?php

//добавил импорт
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admins', 'middleware' => []], function () {
    Route::get('/', 'AdminController@index')->name('api.admins.index');
    Route::post('/', 'AdminController@store')->name('api.admins.store');
    Route::get('/{admin}', 'AdminController@show')->name('api.admins.read');
    Route::put('/{admin}', 'AdminController@update')->name('api.admins.update');
    Route::delete('/{admin}', 'AdminController@destroy')->name('api.admins.delete');
});
