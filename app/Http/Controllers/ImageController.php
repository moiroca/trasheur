<?php

namespace App\Http\Controllers;

use App\Repositories\ImageRepository;
use Illuminate\Support\Facades\Input;
use App\Models\PostImage as Image; 
use File;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function getUpload()
    {
        return view('pages.upload');
    }

    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;

    }

    public function getServerImages()
    {
        $images = Image::get(['name', 'url']);
        $imageAnswer = [];
        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->name,
                'server' => $image->url,
                'size' => File::size(public_path('images/full_size/' . $image->name))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }
    
    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }
}