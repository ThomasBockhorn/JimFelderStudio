<?php

namespace App\Services;

use App\Http\Requests\StorePaintingImageRequest;
use App\Http\Requests\UpdatePaintingImageRequest;
use App\Models\PaintingImage;
use Illuminate\Support\Facades\Storage;

class ImageServices
{

    /**
     * This service adds an image to the database and storage
     * @param StorePaintingImageRequest $request
     * @param PaintingImage $paintingImage
     * @return void
     */
    public static function ImageAddService(StorePaintingImageRequest $request, PaintingImage $paintingImage): void
    {
        if (!empty($request->filename && $request->painting_id)) {

            $paintingImage->filename = Storage::putFile('public/images', $request->filename);

            $paintingImage->painting_id = $request->painting_id;

            $paintingImage->save();
        }

    }


    /**
     * This service will update image reference in database and update file in Storage
     * @param UpdatePaintingImageRequest $request
     * @param PaintingImage $paintingImage
     * @return void
     */
    public static function ImageUpdateService(UpdatePaintingImageRequest $request, PaintingImage $paintingImage): void
    {
        if (!empty($paintingImage->id)) {

            $paintingImageUpdate = PaintingImage::findOrFail($paintingImage->id);

            Storage::delete($paintingImageUpdate->filename);

            $paintingImageUpdate->filename = Storage::putFile('public/images/', $request->filename);

            $paintingImageUpdate->painting_id = $request->painting_id;

            $paintingImageUpdate->save();
        }

    }


    /**
     * This service will delete an image in storage and the reference in the database
     * @param $id
     * @return void
     */
    public static function ImageDeleteService($id): void
    {
        if (!empty($id)) {

            $paintingImageEntry = PaintingImage::findOrFail($id);

            Storage::delete($paintingImageEntry->filename);

            $paintingImageEntry->delete();
        }

    }
}
