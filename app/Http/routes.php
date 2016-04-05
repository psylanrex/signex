<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/admin/gallery', 'PagesController@show_gallery');

Route::get('admin/gallery', ['as' => 'gallery', 'uses' => 'PagesController@show_gallery']);

Route::get('admin', 'PhotosController@index');
Route::get('/admin/1/photos/create', 'PhotosController@create');
Route::get('/admin/1/photos/{id}', 'PhotosController@show');
Route::delete('admin/1/photos/{id}', 'PhotosController@destroy');



// |--------------------------------------------------------------------------
// | Application Routes
// |--------------------------------------------------------------------------
// |
// | This route group applies the "web" middleware group to every route
// | it contains. The "web" middleware group is defined in your HTTP
// | kernel and includes session state, CSRF protection, and more.
// |


// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/admin', 'PagesController@index');
// });
