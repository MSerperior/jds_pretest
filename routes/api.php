<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('news', NewsController::class);
Route::resource('news.comments', CommentController::class)->shallow();
