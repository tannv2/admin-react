<?php

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('{all?}', 'AppController@index')->where('all', '([A-z\d-\/_.]+)?');
});