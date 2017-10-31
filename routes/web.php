<?php
/*
 * Nick Wilging
 * 10/30/17
 *
 * Zoadilack Coding Challenge
 */

Route::get('/zoadilack', 'ZoadilackController@index');
Route::post('/zoadilack/notify', 'ZoadilackController@notify');