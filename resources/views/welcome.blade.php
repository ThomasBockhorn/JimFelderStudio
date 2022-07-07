@extends('layouts.guest')

@section('content')
    <div class="container mx-auto flex items-center justify-center overflow-hidden">
        <div class="slider relative h-80 w-96">
            <div class="slide visible-picture">
                <img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455__340.jpg" alt="" />
            </div>
            <div class="slide">
                <img src="https://cdn.pixabay.com/photo/2017/10/20/10/58/elephant-2870777__340.jpg" alt="" />
            </div>
            <div class="slide">
                <img src="https://cdn.pixabay.com/photo/2015/02/20/16/59/deer-643340__340.jpg" alt="">
            </div>
            <div class="slide">
                <img src="https://cdn.pixabay.com/photo/2018/05/17/09/18/away-3408119__340.jpg" alt="">
            </div>
            <div class="slide">
                <img src="https://cdn.pixabay.com/photo/2018/03/16/20/13/seagull-3232350__340.jpg" alt="">
            </div>
        </div>
    </div>


    @stop
