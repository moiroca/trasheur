<?php namespace App\Repositories;

use App\Models\Post;
/**
 * Posts Repository
 *
 * @author John Temoty Roca <rocajohntemoty@gmail.com>
 */
class PostRepository
{	
	private $model;

	public function __construct(Post $post) 
	{
		$this->model = $post;
	}

	public function create(Array $data)
	{
		return $this->model->create($data);
	}
}