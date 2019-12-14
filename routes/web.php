<?php

Route::get('/', 'DashboardController@index');

Route::group(['prefix' => 'users'], function() {
  Route::get('/', 'UserController@index')->name('users.index');

  Route::get('create', 'UserController@create')->name('users.create');
  Route::post('store', 'UserController@store')->name('users.store');

  Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
  Route::post('update', 'UserController@update')->name('users.update');

  Route::get('delete/{id}', 'UserController@delete')->name('users.delete');
});
