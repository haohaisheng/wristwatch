<?php
//Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);
    Route::get('/sys-20170428', ['as' => 'sys-20170428', 'uses' => 'AdminController@adm']);
    Route::get('/detail', ['as' => 'detail', 'uses' => 'AdminController@detail']);
    Route::get('/category', ['as' => 'category', 'uses' => 'AdminController@category']);
    Route::get('/welcome', ['as' => 'welcome', 'uses' => 'AdminController@welcome']);
    Route::get('/productlist', ['as' => 'productlist', 'uses' => 'ProductController@productList']);
    Route::get('/orderlist', ['as' => 'orderlist', 'uses' => 'ProductController@orderList']);
});
