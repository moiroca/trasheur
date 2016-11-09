<?php 

namespace App\Services;

use App\Repositories\PostRepository;
use App\Models\Post;

/**
 * Posts Service
 *
 * @author John Temoty Roca <rocajohntemoty@gmail.com>
 */
class PostService {
	
	private $postRepo;

	public function __construct(PostRepository $postRepo)
	{
		$this->postRepo = $postRepo;
	}

	public function create(Array $data) 
	{
		return $this->postRepo->create($data);
	}

	public function savePostImage(Post $post, $imageIds) 
	{
		$isSuccess = true;

		try {
			foreach ($imageIds as $key => $imageId) {
				$post->images()->attach( $imageId );
			}
		} catch (\Exception $e) { 
			$isSuccess = false; 
		}

		return $isSuccess;
	}
}