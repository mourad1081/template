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

Route::get('admin/{action}', 'AdminController@index');




/*
+--------------------------------------------------------------------------+
| URI's for posts                                                          |
+--------------------------------------------------------------------------+
|                                                                          |
| Here we define the routes for interacting with posts. First, we define a |
| binding in order to retrieve the corresponding post via the URI's        |
| parameter.                                                               |
|--------------------------------------------------------------------------+
*/
Route::get('posts/{post}','PostsController@get')->middleware('bindings');
Route::post('posts','PostsController@insert')->middleware(['auth', 'bindings']);
Route::put('posts/{post}','PostsController@update')->middleware(['auth', 'bindings']);
Route::delete('posts/{post}', 'PostsController@delete')->middleware(['auth', 'bindings']);
// ------------------------------------------------------------------------+



/*
+--------------------------------------------------------------------------+
| URI's for users                                                          |
+--------------------------------------------------------------------------+
|                                                                          |
| Here we define the routes for interacting with users. First, we define a |
| binding in order to retrieve the corresponding user via the URI's        |
| parameter.                                                               |
|--------------------------------------------------------------------------+
*/
Route::get('users/{user}','UsersController@get')->middleware('bindings');
// ------------------------------------------------------------------------+








