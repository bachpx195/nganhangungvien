<?php

Route::group(['prefix' => '', 'namespace' => 'Modules\Front\Http\Controllers'], function()
{
	Route::get('/', 'FrontController@index');
});