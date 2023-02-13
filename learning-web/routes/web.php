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
    return view('layouts.index');
});

Route::controller(\App\Http\Controllers\WebLearningController::class)->group(function() {
    Route::get('main-learning', 'mainLearning');
    Route::get('buku-gratis', 'freeBooksContent');
    Route::get('modul-sekolah', 'moduleContent');
    Route::get('video', 'videoContent');
});

Route::controller(\App\Http\Controllers\OpenFileController::class)->group(function () {
   Route::get('buku-gratis/buku1', 'openFileBuku1');
   Route::get('buku-gratis/buku2', 'openFileBuku2');
});

