<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/biography', function () {
    return view('introduction');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/paintings', \App\Http\Controllers\PaintingController::class)->middleware(['auth']);
Route::resource('/painting-images', \App\Http\Controllers\PaintingImageController::class)->middleware(['auth']);
Route::resource('/painting-tag', \App\Http\Controllers\PaintingTagController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
