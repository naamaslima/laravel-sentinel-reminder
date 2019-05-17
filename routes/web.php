<?php

/*   Rotas para recuperação de senha    */

Route::get('recuperar-senha', 'Auth\ReminderController@create')->name('recuperar.senha.create');
Route::post('recuperar-senha', 'Auth\ReminderController@store')->name('recuperar.senha.store');
Route::get('recuperar-senha/{id}/{token}', 'Auth\ReminderController@edit')->name('recuperar.senha.edit');
Route::post('recuperar-senha/{id}/{token}', 'Auth\ReminderController@update')->name('recuperar.senha.update');
