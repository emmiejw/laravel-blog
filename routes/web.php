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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=> 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/post', 'PostsController');
    // Route::resource('/category', 'CategoryController');
    Route::get('category/create',[
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);
    Route::get('categories',[
        'uses' => 'CategoryController@index',
        'as' => 'categories'
    ]);
    Route::get('category/{id}/edit',[
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ]);
    Route::get('category/delete/{id}',[
        'uses' => 'CategoryController@destroy',
        'as' => 'category.destroy'
    ]);
    Route::post('category/store',[
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);
    Route::post('/category/update/{id}', [
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ]);
});
