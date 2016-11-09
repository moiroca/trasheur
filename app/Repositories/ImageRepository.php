<?php

namespace App\Repositories;

use App\Models\PostImage; 

/**
 * Image Repository
 *
 * @author John Temoty Roca <rocajohntemoty@gmail.com>
 */
class ImageRepository
{
    private $model;

    public function __construct(PostImage $postImage) 
    {
        $this->model = $postImage;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
}