<?php namespace App\Services;

use App\Repositories\PostRepository;

/**
 * Posts Service
 *
 * @author John Temoty Roca <rocajohntemoty@gmail.com>
 */
class PostService
{
	private $postRepo;

	public function __construct(PostRepository $postRepo)
	{
		$this->postRepo = $postRepo;
	}

	public function create(Array $data) 
	{
		return $this->postRepo->create($data);
	}
}