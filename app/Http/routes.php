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
    Route::get('/add', ['middleware' => 'auth', 'uses' => 'AdminController@add']);
//    Route::auth();

//    Route::get('/test/index', function (){
//        return view('/default/index');
//    });
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

Route::get('/home', 'HomeController@index');
