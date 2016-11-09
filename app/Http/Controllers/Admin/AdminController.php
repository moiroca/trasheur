<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\Repositories\PostRepository;

class AdminController extends BaseController {

	private $postRepo;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct(PostRepository $postRepo) {
		$this->middleware('auth');
		$this->postRepo = $postRepo;
	}

	public function index() 
	{
		$posts = $this->postRepo->getAll();
		return view('admin.index', compact([ 'posts' ]));
	}

	public function getUserItem($item)
	{
		$post = $this->postRepo->find($item);
		return view('admin.item', compact( 'post' ));
	}
}