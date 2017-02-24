<?php

Route::group(['prefix' => config('amamarul-location.prefix'), 'middleware' => config('amamarul-location.middlewares') ,'as' => 'amamarul.translations.'], function(){

    Route::get('home', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@index')->name('home');
    Route::get('lang/{lang}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@lang')->name('lang');
    Route::get('lang/generateJson/{lang}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@generateJson')->name('lang.generateJson');
    Route::get('newLang', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@newLang')->name('lang.newLang');
    Route::get('newString', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@newString')->name('lang.newString');
    Route::get('search', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@search')->name('lang.search');
    Route::get('string/{code}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@string')->name('lang.string');
    Route::get('publish-all', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@publishAll')->name('lang.publishAll');
});
Route::post('translations/lang/update/{id}', '\Amamarul\LaravelJsonLocationsManager\Controllers\HomeController@update')->name('amamarul.translations.lang.update');
