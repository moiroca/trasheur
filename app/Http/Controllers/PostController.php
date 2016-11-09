<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostsRequest;
use App\Services\PostService;
use Auth;

class PostController extends Controller
{
	private $postService;

	public function __construct(PostService $postService) 
	{
		$this->postService = $postService;
	}

    public function index(Request $request)
    {
        $posts = Auth::user()->posts;
        return view('posts.index', compact([ 'posts' ]));
    }

    public function get_create(Request $request)
    {
    	return view('posts.create');
    }

    public function post_create(CreatePostsRequest $request)
    {
    	$post = $this->postService->create( array_merge([ 'user_id' => Auth::user()->id ], $request->all()) );

        $images = json_decode($request->get('imagesIds'));

        $savePostImage = true;
        
        if ( $images ) {
            $savePostImage = $this->postService->savePostImage($post, $images);
        }

        return response()->json([
            'error_code' => ($savePostImage ) ? 200 : 500
        ]);
    }

    public function getPost() {
        $data = [
            // 'title' => 'Title'
        ];

        return view('post-item', compact($data));
    }
}
