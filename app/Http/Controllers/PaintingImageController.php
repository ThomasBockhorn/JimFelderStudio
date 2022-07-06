<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaintingImageRequest;
use App\Http\Requests\UpdatePaintingImageRequest;
use App\Models\PaintingImage;

class PaintingImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaintingImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaintingImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaintingImage  $paintingImage
     * @return \Illuminate\Http\Response
     */
    public function show(PaintingImage $paintingImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaintingImage  $paintingImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PaintingImage $paintingImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaintingImageRequest  $request
     * @param  \App\Models\PaintingImage  $paintingImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaintingImageRequest $request, PaintingImage $paintingImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaintingImage  $paintingImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaintingImage $paintingImage)
    {
        //
    }
}
