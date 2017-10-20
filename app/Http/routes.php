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
//    Route::get('/add', ['middleware' => 'auth', 'uses' => 'Admin\AdminController@create']);
    Route::get('/news/{id}', 'NewsController@show');

});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/add-post', ['uses' => 'Admin\AdminPostController@show', 'as' => 'admin_add_post']);
    Route::post('/add-post', ['uses' => 'Admin\AdminPostController@create', 'as' => 'admin_add_post_p']);
    Route::get('update-post', ['as' => 'admin_update_post', 'uses' => 'Admin\AdminUpdatePostController@show']);
//    Route::post('update-post', ['as' => 'admin_update_post_news', 'uses' => 'Admin\AdminUpdatePostController@show']);
    Route::get('update-post/{id}', ['as' => 'admin_update_post_p', 'uses' => 'Admin\AdminUpdatePostController@showNew']);
    Route::get('/test', function () {
        return view('test');
    });
});
Route::get('/main', function () {
    return view('main');
});
Route::auth();
//
//Route::get('/home', 'HomeController@index');
//Route::get('upload', ['as' => 'upload_form', 'uses' => 'Admin\AdminPostController@getForm']);
//Route::post('upload', ['as' => 'upload_file', 'uses' => 'Admin\AdminPostController@upload']);
//
//Route::get('paginate', function () {
//    $users = DB::table('users')->paginate(15);
//    return view('paginate',['users'=>$users]);
//});