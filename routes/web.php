<?php

use App\Http\Controllers\TasksController;

// Eloquent model Post
// Migration create_posts_table

// Post Controlller
Route::get('/', 'PostsController@index');

Route::get('post/{post}', 'PostsController@show');

Route::get('posts/create', 'PostsController@create');

Route::post('posts', 'PostsController@store');
