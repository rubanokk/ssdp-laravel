<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::localize(function () {
    Route::view('/', 'home.index');
    Route::resource('posts', PostsController::class);
});

// Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
//     Route::view('/', 'home.index');
//     Route::resource('posts', PostsController::class);
//     // Route::get('/{category}', [PostsController::class, 'category']);
//     // Route::get('/posts/{post}', [PostsController::class, 'show'])->name('post');
// });