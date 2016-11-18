<?php

namespace App\Http\Controllers;

use App\Models\PostImage as Image;
use App\Services\PostImageService;
use File;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    protected $imageService;

    public function __construct(PostImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function getUpload()
    {
        return view('pages.upload');
    }

    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->imageService->upload($photo);

        return $response;
    }

    public function getServerImages()
    {
        $images = Image::get(['name', 'url']);
        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->name,
                'server'   => $image->url,
                'size'     => File::size(public_path('images/full_size/'.$image->name)),
            ];
        }

        return response()->json([
            'images' => $imageAnswer,
        ]);
    }

    public function deleteUpload()
    {
        $filename = Input::get('id');

        if (!$filename) {
            return 0;
        }

        $response = $this->imageService->delete($filename);

        return $response;
    }
}
