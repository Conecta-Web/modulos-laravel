<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Son\Blog\Http\Controllers'], function()
{
    //Route::get('/', 'BlogController@index');
    Route::get('/', 'PostsController@index');
});
