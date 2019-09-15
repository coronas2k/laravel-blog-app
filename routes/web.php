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

use App\Http\Controllers\TasksController;
/*
Route::get('tasks', 'TasksController@index');
Route::get('task/{task}', 'TasksController@show');
*/

Route::get('/', 'PostsController@index');
// Controller
// Eloquent model Post
// Migration create_posts_table

Route::get('post/{post}', 'PostsController@show');
