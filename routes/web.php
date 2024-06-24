<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', PostController::class . '@index')->name('post.index');
Route::get('/post/{id}', PostController::class . '@show')->name('post.show');
