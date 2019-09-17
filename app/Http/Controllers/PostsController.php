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
use App\Http\Requests\StoreBlogPost;

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
     * Store the blog post
     *
     * @param StoreBlogPost $request Form Request Validation
     * @return Response
     */
    public function store(StoreBlogPost $request)
    {
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
