<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostsRequest;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postService;
    private $postRepo;

    public function __construct(PostService $postService, PostRepository $postRepo)
    {
        $this->postService = $postService;
        $this->postRepo = $postRepo;
    }

    public function index(Request $request)
    {
        $posts = Auth::user()->posts;

        return view('posts.index', compact(['posts']));
    }

    public function get_create(Request $request)
    {
        return view('posts.create');
    }

    public function post_create(CreatePostsRequest $request)
    {
        $post = $this->postService->create(array_merge(['user_id' => Auth::user()->id], $request->all()));

        $images = json_decode($request->get('imagesIds'));

        $savePostImage = true;

        if ($images) {
            $savePostImage = $this->postService->savePostImage($post, $images);
        }

        return response()->json([
            'error_code' => ($savePostImage) ? 200 : 500,
        ]);
    }

    public function getPost($item)
    {
        $post = $this->postRepo->find($item);

        return view('posts.item', compact('post'));
    }
}
