<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Posts Repository.
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

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
