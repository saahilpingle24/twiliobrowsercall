<?php

Route::get('/', 'CallController@index');
Route::post('/outbound', 'CallController@outbound');