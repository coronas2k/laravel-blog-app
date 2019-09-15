<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    /**
     * PostController index
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::getSortedByLatest();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'postTitleEscaped' => htmlspecialchars($post->title),
            'postTitle' => $post->title,
            'postBody' => $post->body,
            'postRealTime' => $post->dateToUTC(),
        ]);
    }
}
