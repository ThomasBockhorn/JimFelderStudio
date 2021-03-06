<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaintingTagRequest;
use App\Http\Requests\UpdatePaintingTagRequest;
use App\Models\PaintingTag;

class PaintingTagController extends Controller
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
     * @param StorePaintingTagRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaintingTagRequest $request)
    {
        PaintingTag::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param PaintingTag $paintingTag
     * @return \Illuminate\Http\Response
     */
    public function show(PaintingTag $paintingTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PaintingTag $paintingTag
     * @return \Illuminate\Http\Response
     */
    public function edit(PaintingTag $paintingTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePaintingTagRequest $request
     * @param PaintingTag $paintingTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaintingTagRequest $request, PaintingTag $paintingTag)
    {
        $paintingTag->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PaintingTag $paintingTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaintingTag $paintingTag)
    {
        $paintingTag->delete();

    }
}
