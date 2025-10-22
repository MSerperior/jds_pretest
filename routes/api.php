<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);

Route::resource('news', NewsController::class)->middleware('auth:api');
Route::resource('news.comments', CommentController::class)->shallow();
