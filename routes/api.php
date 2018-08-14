<?php

Route::prefix('api')
    ->middleware(['api','admin.api.auth'])
    ->namespace("AvoRed\Framework\Api\Controllers")
    ->group(function () {
        
        Route::get('v1/category', 'CategoryController@index');
        Route::post('v1/category', 'CategoryController@store');
        Route::get('v1/category/{category}', 'CategoryController@show');
        Route::put('v1/category/{category}', 'CategoryController@update');
        Route::delete('v1/category/{category}', 'CategoryController@destroy');

        
        Route::get('v1/property', 'PropertyController@index');
        Route::post('v1/property', 'PropertyController@store');
        Route::get('v1/property/{property}', 'PropertyController@show');
        Route::put('v1/property/{property}', 'PropertyController@update');
        Route::delete('v1/property/{property}', 'PropertyController@destroy');
        
        Route::get('v1/attribute', 'AttributeController@index');
        Route::post('v1/attribute', 'AttributeController@store');
        Route::get('v1/attribute/{attribute}', 'AttributeController@show');
        Route::put('v1/attribute/{attribute}', 'AttributeController@update');
        Route::delete('v1/attribute/{attribute}', 'AttributeController@destroy');
        
    });
