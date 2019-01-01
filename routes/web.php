<?php

Route::get('/testpost', function(){
    return App\Category::find(1)->posts;
});

Route::get('/testcat', function(){
    return App\Post::find(1)->category;
});
Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/post/{id}', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);

Route::get('/category/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);
Route::get('/tag/{id}', [
    'uses' => 'FrontEndController@tag',
    'as' => 'tag.single'
]);

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

    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);

    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    Route::get('user/edit/{id}',[
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ]);
    Route::get('user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.destroy'
    ]);
    Route::post('user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    Route::post('/user/update/{id}', [
        'uses' => 'UsersController@update',
        'as' => 'user.update'
    ]);

    Route::get('user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ]);

    Route::get('user/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);

    Route::get('user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);
    Route::get('user/delete/{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    Route::post('/user/profile/update', [
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);

    Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);
    Route::post('/settings/update', [
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);
});
