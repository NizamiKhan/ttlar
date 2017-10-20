<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'SiteController@show');
    Route::get('/category/{id}', 'CategoriesController@actionCategory');
    Route::get('/news/{id}', 'NewsController@show');

});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/add-post', ['uses' => 'Admin\AdminPostController@show', 'as' => 'admin_add_post']);
    Route::post('/add-post', ['uses' => 'Admin\AdminPostController@create', 'as' => 'admin_add_post_p']);
    Route::get('update-post', ['as' => 'admin_update_post', 'uses' => 'Admin\AdminUpdatePostController@show']);
    Route::post('update-post', ['as' => 'admin_update_post_news', 'uses' => 'Admin\AdminUpdatePostController@create']);
    Route::get('update-post/{id}', ['as' => 'admin_update_post_p', 'uses' => 'Admin\AdminUpdatePostController@showNew']);
    Route::get('archive/{id}', 'Admin\ArchiveController@show');
});

Route::auth();