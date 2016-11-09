<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostsRequest;
use App\Services\PostService;

class PostController extends Controller
{
	private $postService;

	public function __construct(PostService $postService) 
	{
		$this->postService = $postService;
	}

    public function get_create(Request $request)
    {
    	return view('posts.create');
    }

    public function post_create(CreatePostsRequest $request)
    {
    	$post = $this->postService->create( $request->all() );
    }
}
