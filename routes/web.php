<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'book'], function () {
    Route::get('create', 'BookController@create');
    Route::post('create', ['as' => 'book.create', 'uses' => 'BookController@store']);
//    Route::get('/all', ['as' => 'book.index', 'uses' => 'BookController@index']);
    Route::get('/all', ['as' => 'book.index', 'uses' => 'BookController@index']);
    Route::get('destroy/{id}', ['as' => 'book.destroy', 'uses' => 'BookController@destroy']);
//    Route::get('destroy/{id?}', ['as' => 'book.destroy', 'uses' => 'BookController@destroy']);
    Route::get('edit/{id}', ['as' => 'book.edit', 'uses' => 'BookController@edit']);
    Route::put('update/{id}', ['as' => 'book.update', 'uses' => 'BookController@update']);

});


Route::group(['prefix' => 'category'], function () {
    Route::get('/delete/{id}',['as' => 'category.destroy' , 'uses' => 'CategoryController@destroy']);
});

Route::get('/language/{lang?}', [
    'as' => 'language.change',
    'uses' => 'LocalizationController@change'
]);
