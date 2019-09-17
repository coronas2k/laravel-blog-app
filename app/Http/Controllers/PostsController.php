<?php
/**
 * PostsController
 * Posts Resource Controller
 * php version 7.3
 *
 * @category Controllers
 * @package Laravel Blog App
 * @author Nayef Alebrahim <nayef@alebrah.im>
 * @license https://opensource.org/licenses/MIT MIT
 * @link https://nayefalebrahim.com
 */
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

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

    /**
     * PostController show
     *
     * @param Post $post Post model injection
     *
     * @return View
     */
    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
            'postTitleEscaped' => htmlspecialchars($post->title),
            'postTitle' => $post->title,
            'postBody' => $post->body,
            'postRealTime' => $post->created_at->diffForHumans()
            ]
        );
    }

    /**
     * PostController create
     *
     * @return View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * PostController store
     *
     * @param Illuminate\Http\Request $request Request injection
     *
     * @return Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate(
            [
                'title' => 'required',
                'body' => 'required'
            ]
        );
        // create post
        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body
            ]
        );
        // redirect
        return redirect('/');
    }
}
