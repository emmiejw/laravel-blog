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
    Route::get('post/create',[
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);
    Route::get('post',[
        'uses' => 'PostsController@index',
        'as' => 'post.index'
    ]);
    Route::get('post/trashed',[
        'uses' => 'PostsController@trashed',
        'as' => 'post.trashed'
    ]);
    Route::get('post/kill/{id}',[
        'uses' => 'PostsController@kill',
        'as' => 'post.kill'
    ]);
    Route::get('post/restore/{id}',[
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
    ]);
    Route::get('post/edit/{id}',[
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
    Route::get('post/delete/{id}',[
        'uses' => 'PostsController@destroy',
        'as' => 'post.destroy'
    ]);
    Route::post('post/store',[
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);
    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);

    Route::get('tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::get('tags',[
        'uses' => 'TagsController@index',
        'as' => 'tag.index'
    ]);
    Route::get('tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::get('tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.destroy'
    ]);
    Route::post('tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
});
