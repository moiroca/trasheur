<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'user_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function images()
    {
        return $this->belongsToMany('App\Models\PostImage', 'posts_images', 'post_id', 'image_id');
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
